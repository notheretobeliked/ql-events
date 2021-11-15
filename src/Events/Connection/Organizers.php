<?php
/**
 * Connection - Organizers.
 *
 * Registers connections from other types to Organizers.
 *
 * @package \WPGraphQL\TEC\Events\Connection
 * @since   0.0.1
 */

namespace WPGraphQL\TEC\Events\Connection;

use GraphQL\Type\Definition\ResolveInfo;
use WPGraphQL\AppContext;
use WPGraphQL\TEC\Events\Data\OrganizerHelper;
use WPGraphQL\TEC\Events\Type\WPInterface\NodeWithOrganizers;
use WPGraphQL\TEC\Events\Type\WPObject\Organizer;

/**
 * Class - Organizers
 */
class Organizers {
		/**
		 * The GraphQL field name for the connection.
		 *
		 * @var string
		 */
	public static string $from_field_name = 'organizers';

	/**
	 * Registers the various connections from other Types to Organizers.
	 */
	public static function register_connections() : void {
		// From Event.
		register_graphql_connection(
			[
				'fromType'      => NodeWithOrganizers::$type,
				'toType'        => Organizer::$type,
				'fromFieldName' => self::$from_field_name,
				'resolve'       => function ( $source, array $args, AppContext $context, ResolveInfo $info ) {
					if ( empty( $source->organizerIds ) ) {
						return null;
					}

					$args['where']['post__in'] = $source->organizerIds;

					return OrganizerHelper::resolve_connection( $source, $args, $context, $info, 'tribe_organizer' );
				},
			]
		);
	}
}
