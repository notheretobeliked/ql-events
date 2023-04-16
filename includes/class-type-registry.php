<?php
/**
 * Registers TEC types to the schema.
 *
 * @package \WPGraphQL\QL_Events
 * @since   0.0.1
 */

namespace WPGraphQL\QL_Events;

/**
 * Class Type_Registry
 */
class Type_Registry {
	/**
	 * Registers QL Events types, connections, unions, and mutations to GraphQL schema
	 *
	 * @param \WPGraphQL\Registry\TypeRegistry $type_registry  Instance of the WPGraphQL TypeRegistry.
	 */
	public function init( \WPGraphQL\Registry\TypeRegistry $type_registry ) {
	
		// TEC Input types.
		Type\WPInputObject\Meta_Data_Input::register();

		// TEC Object fields.
		Type\WPObject\Event_Type::register_fields();
		Type\WPObject\Event_Linked_Data_Type::register();
		Type\WPObject\Organizer_Type::register_fields();
		Type\WPObject\Organizer_Linked_Data_Type::register();
		Type\WPObject\Venue_Type::register_fields();
		Type\WPObject\Venue_Linked_Data_Type::register();
		Type\WPObject\Meta_Data_Type::register();

	
}
}