<?php
/**
 * Connection - Attendees
 *
 * Registers connections to Attendee
 *
 * @package WPGraphQL\QL_Events\Connection
 * @since   0.0.1
 */

namespace WPGraphQL\QL_Events\Connection;

use Tribe__Tickets__RSVP as RSVP;
use Tribe__Tickets__Attendee_Repository as Attendee_Repository;
use WPGraphQL\Connection\PostObjects;
use WPGraphQL\Data\Connection\PostObjectConnectionResolver;

/**
 * Class - Attendees
 */
class Attendees extends PostObjects {
	/**
	 * Registers the various connections from other Types to Attendees
	 */
	public static function register_connections() {
		// Get Attendees repository instance.
		$repository = tribe_attendees();

		// From RootQuery to Attendees.
		$attendee_types = array_values( $repository->attendee_types() );
		register_graphql_connection(
			[
				'fromType'       => 'RootQuery',
				'toType'         => 'Attendee',
				'fromFieldName'  => 'attendees',
				'connectionArgs' => array_merge(
					...array_map(
						[ __CLASS__, 'get_attendee_type_connection_args' ],
						$attendee_types
					)
				),
				'resolve'        => function( $source, $args, $context, $info ) use ( $attendee_types ) {
					$resolver = new PostObjectConnectionResolver( $source, $args, $context, $info, $attendee_types );

					return $resolver->get_connection();
				},
			]
		);

		// From Event to Attendees.
		$attendee_to_event_keys = array_values( $repository->attendee_to_event_keys() );
		register_graphql_connection(
			[
				'fromType'       => 'Event',
				'toType'         => 'Attendee',
				'fromFieldName'  => 'attendees',
				'connectionArgs' => array_merge(
					...array_map(
						[ __CLASS__, 'get_attendee_type_connection_args' ],
						$attendee_types
					)
				),
				'resolve'        => function( $source, $args, $context, $info ) use ( $attendee_types, $attendee_to_event_keys ) {
					$resolver = new PostObjectConnectionResolver( $source, $args, $context, $info, $attendee_types );

					// Set query args to connection resolver.
					$meta_query = count( $attendee_to_event_keys ) > 1 ? [ 'relation' => 'OR' ] : [];
					foreach ( $attendee_to_event_keys as $key ) {
						$meta_query[] = [
							'key'     => $key,
							'value'   => $source->ID,
							'compare' => '=',
						];
					}

					$resolver->set_query_arg( 'meta_query', $meta_query );
					$resolver->set_query_arg( 'tribe_suppress_query_filters', true );

					return $resolver->get_connection();
				},
			]
		);
	}

}
