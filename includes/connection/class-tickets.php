<?php
/**
 * Connection - Tickets
 *
 * Registers connections to Ticket
 *
 * @package WPGraphQL\QL_Events\Connection
 * @since   0.0.1
 */

namespace WPGraphQL\QL_Events\Connection;

use Tribe__Tickets__RSVP as RSVP;
use WPGraphQL\Connection\PostObjects;
use WPGraphQL\WooCommerce\Connection\Products;
use WPGraphQL\WooCommerce\Data\Factory;
use WPGraphQL\Data\Connection\PostObjectConnectionResolver;
use WPGraphQL\QL_Events\QL_Events as QL_Events;

/**
 * Class - Tickets
 */
class Tickets extends PostObjects {

	/**
	 * Returns a connection resolver wrapped around the ticket repositories
	 * passed by classname.
	 *
	 * @param array $ticket_classes  Classnames of Ticket repository to be used.
	 *
	 * @return mixed
	 */
	private static function get_event_to_ticket_resolver( $ticket_classes ) {
		return function( $source, $args, $context, $info ) use ( $ticket_classes ) {
			// Get ticket post-types.
			$ticket_post_types = [];
			foreach ( $ticket_classes as $ticket_class ) {
				$ticket_post_types[] = tribe( $ticket_class )->ticket_object;
			}

			// Create connection resolver.
			$resolver = new PostObjectConnectionResolver(
				$source,
				$args,
				$context,
				$info,
				$ticket_post_types
			);

			// Set query args to connection resolver.
			$meta_query = count( $ticket_classes ) > 1 ? [ 'relation' => 'OR' ] : [];
			foreach ( $ticket_classes as $ticket_class ) {
				$meta_query[] = [
					'key'     => tribe( $ticket_class )->get_event_key(),
					'value'   => $source->ID,
					'compare' => '=',
				];
			}
			$resolver->set_query_arg( 'meta_query', $meta_query );
			$resolver->set_query_arg( 'tribe_suppress_query_filters', true );

			// Resolve connection and return results.
			$connection = $resolver->get_connection();
			return $connection;
		};
	}
	/**
	 * Registers the various connections from other Types to Tickets
	 */
	public static function register_connections() {
		if ( QL_Events::is_ticket_events_loaded() ) {
			$post_object_object     = get_post_type_object( tribe( 'tickets.rsvp' )->ticket_object );
			$available_ticket_types = [
				'tickets.rsvp',
				'tickets.commerce.paypal',
			];

			if ( QL_Events::is_ticket_events_plus_loaded() ) {
				$available_ticket_types[] = 'tickets-plus.commerce.woo';
			}

			// From RootQuery to Tickets.
			register_graphql_connection(
				[
					'fromType'       => 'RootQuery',
					'toType'         => 'Ticket',
					'fromFieldName'  => 'tickets',
					'connectionArgs' => self::get_connection_args( [], $post_object_object ),
					'resolve'        => function( $source, $args, $context, $info ) {
						$ticket_types = array_values( tribe_tickets()->ticket_types() );
						$resolver     = new PostObjectConnectionResolver( $source, $args, $context, $info, $ticket_types );

						$connection = $resolver->get_connection();
						return $connection;
					},
				]
			);

			// From Event to Tickets.
			register_graphql_connection(
				[
					'fromType'       => 'Event',
					'toType'         => 'Ticket',
					'fromFieldName'  => 'tickets',
					'connectionArgs' => self::get_connection_args( [], $post_object_object ),
					'resolve'        => self::get_event_to_ticket_resolver( $available_ticket_types ),
				]
			);
			// From Event to RSVPTickets.
			register_graphql_connection(
				[
					'fromType'       => 'Event',
					'toType'         => 'RSVPTicket',
					'fromFieldName'  => 'rsvpTickets',
					'connectionArgs' => self::get_connection_args( [], $post_object_object ),
					'resolve'        => self::get_event_to_ticket_resolver( [ 'tickets.rsvp' ] ),
				]
			);

			// From Event to PayPalTickets.
			register_graphql_connection(
				[
					'fromType'       => 'Event',
					'toType'         => 'PayPalTicket',
					'fromFieldName'  => 'paypalTickets',
					'connectionArgs' => self::get_connection_args( [], $post_object_object ),
					'resolve'        => self::get_event_to_ticket_resolver( [ 'tickets.commerce.paypal' ] ),
				]
			);

			if ( QL_Events::is_ticket_events_plus_loaded() && QL_Events::is_woographql_loaded() ) {
				// From Event to WooTicket.
				register_graphql_connection(
					[
						'fromType'       => 'Event',
						'toType'         => 'Product',
						'fromFieldName'  => 'wooTickets',
						'connectionArgs' => Products::get_connection_args(),
						'resolve'        => self::get_event_to_ticket_resolver( [ 'tickets-plus.commerce.woo' ] ),
					]
				);
			}
		}
	}
}
