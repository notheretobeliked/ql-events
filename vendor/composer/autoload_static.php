<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e59707a5d3582830b47ec9f532e7191
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\Extensions\\QL_Events\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\Extensions\\QL_Events\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'QL_Events' => __DIR__ . '/../..' . '/includes/class-ql-events.php',
        'WPGraphQL\\QL_Events\\Connection\\Attendees' => __DIR__ . '/../..' . '/includes/connection/class-attendees.php',
        'WPGraphQL\\QL_Events\\Connection\\Events' => __DIR__ . '/../..' . '/includes/connection/class-events.php',
        'WPGraphQL\\QL_Events\\Connection\\Organizers' => __DIR__ . '/../..' . '/includes/connection/class-organizers.php',
        'WPGraphQL\\QL_Events\\Connection\\Tickets' => __DIR__ . '/../..' . '/includes/connection/class-tickets.php',
        'WPGraphQL\\QL_Events\\Connection\\Tickets_Plus' => __DIR__ . '/../..' . '/includes/connection/class-tickets-plus.php',
        'WPGraphQL\\QL_Events\\Core_Schema_Filters' => __DIR__ . '/../..' . '/includes/class-core-schema-filters.php',
        'WPGraphQL\\QL_Events\\Data\\Connection\\Attendee_Connection_Resolver' => __DIR__ . '/../..' . '/includes/data/connection/class-attendee-connection-resolver.php',
        'WPGraphQL\\QL_Events\\Data\\Connection\\Event_Connection_Resolver' => __DIR__ . '/../..' . '/includes/data/connection/class-event-connection-resolver.php',
        'WPGraphQL\\QL_Events\\Data\\Connection\\Organizer_Connection_Resolver' => __DIR__ . '/../..' . '/includes/data/connection/class-organizer-connection-resolver.php',
        'WPGraphQL\\QL_Events\\Data\\Connection\\Ticket_Connection_Resolver' => __DIR__ . '/../..' . '/includes/data/connection/class-ticket-connection-resolver.php',
        'WPGraphQL\\QL_Events\\Data\\Factory' => __DIR__ . '/../..' . '/includes/data/class-factory.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Attendee' => __DIR__ . '/../..' . '/includes/types/object/common/trait-attendee.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Event_Linked_Data_Type' => __DIR__ . '/../..' . '/includes/types/object/class-event-linked-data-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Event_Type' => __DIR__ . '/../..' . '/includes/types/object/class-event-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Order' => __DIR__ . '/../..' . '/includes/types/object/common/trait-order.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Organizer_Linked_Data_Type' => __DIR__ . '/../..' . '/includes/types/object/class-organizer-linked-data-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Organizer_Type' => __DIR__ . '/../..' . '/includes/types/object/class-organizer-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\PayPalAttendee_Type' => __DIR__ . '/../..' . '/includes/types/object/class-paypalattendee-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\PayPalOrder_Type' => __DIR__ . '/../..' . '/includes/types/object/class-paypalorder-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\PayPalTicket_Type' => __DIR__ . '/../..' . '/includes/types/object/class-paypalticket-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\RSVPAttendee_Type' => __DIR__ . '/../..' . '/includes/types/object/class-rsvpattendee-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\RSVPTicket_Type' => __DIR__ . '/../..' . '/includes/types/object/class-rsvpticket-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Ticket' => __DIR__ . '/../..' . '/includes/types/object/common/trait-ticket.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Ticket_Linked_Data_Type' => __DIR__ . '/../..' . '/includes/types/object/class-ticket-linked-data-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Ticket_Type' => __DIR__ . '/../..' . '/includes/types/object/class-ticket-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Venue_Linked_Data_Type' => __DIR__ . '/../..' . '/includes/types/object/class-venue-linked-data-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\Venue_Type' => __DIR__ . '/../..' . '/includes/types/object/class-venue-type.php',
        'WPGraphQL\\QL_Events\\Type\\WPObject\\WooAttendee_Type' => __DIR__ . '/../..' . '/includes/types/object/class-wooattendee-type.php',
        'WPGraphQL\\QL_Events\\Type_Registry' => __DIR__ . '/../..' . '/includes/class-type-registry.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e59707a5d3582830b47ec9f532e7191::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e59707a5d3582830b47ec9f532e7191::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e59707a5d3582830b47ec9f532e7191::$classMap;

        }, null, ClassLoader::class);
    }
}
