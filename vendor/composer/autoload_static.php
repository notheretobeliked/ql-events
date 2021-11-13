<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76247ffd27f1d1ab469519c96f3a9966
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\TEC\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\TEC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\TEC\\Common\\TypeRegistry' => __DIR__ . '/../..' . '/src/Common/TypeRegistry.php',
        'WPGraphQL\\TEC\\Common\\Type\\Enum\\TimezoneModeEnum' => __DIR__ . '/../..' . '/src/Common/Type/Enum/TimezoneModeEnum.php',
        'WPGraphQL\\TEC\\Common\\Type\\WPObject\\TecSettings' => __DIR__ . '/../..' . '/src/Common/Type/WPObject/TecSettings.php',
        'WPGraphQL\\TEC\\Events\\Connection\\Events' => __DIR__ . '/../..' . '/src/Events/Connection/Events.php',
        'WPGraphQL\\TEC\\Events\\Connection\\Organizers' => __DIR__ . '/../..' . '/src/Events/Connection/Organizers.php',
        'WPGraphQL\\TEC\\Events\\Connection\\Venues' => __DIR__ . '/../..' . '/src/Events/Connection/Venues.php',
        'WPGraphQL\\TEC\\Events\\CoreSchemaFilters' => __DIR__ . '/../..' . '/src/Events/CoreSchemaFilters.php',
        'WPGraphQL\\TEC\\Events\\Data\\Connection\\EventConnectionResolver' => __DIR__ . '/../..' . '/src/Events/Data/Connection/EventConnectionResolver.php',
        'WPGraphQL\\TEC\\Events\\Data\\Connection\\OrganizerConnectionResolver' => __DIR__ . '/../..' . '/src/Events/Data/Connection/OrganizerConnectionResolver.php',
        'WPGraphQL\\TEC\\Events\\Data\\Connection\\VenueConnectionResolver' => __DIR__ . '/../..' . '/src/Events/Data/Connection/VenueConnectionResolver.php',
        'WPGraphQL\\TEC\\Events\\Data\\EventHelper' => __DIR__ . '/../..' . '/src/Events/Data/EventHelper.php',
        'WPGraphQL\\TEC\\Events\\Data\\Factory' => __DIR__ . '/../..' . '/src/Events/Data/Factory.php',
        'WPGraphQL\\TEC\\Events\\Data\\Loader\\EventLoader' => __DIR__ . '/../..' . '/src/Events/Data/Loader/EventLoader.php',
        'WPGraphQL\\TEC\\Events\\Data\\OrganizerHelper' => __DIR__ . '/../..' . '/src/Events/Data/OrganizerHelper.php',
        'WPGraphQL\\TEC\\Events\\Data\\VenueHelper' => __DIR__ . '/../..' . '/src/Events/Data/VenueHelper.php',
        'WPGraphQL\\TEC\\Events\\Model\\Event' => __DIR__ . '/../..' . '/src/Events/Model/Event.php',
        'WPGraphQL\\TEC\\Events\\Model\\Organizer' => __DIR__ . '/../..' . '/src/Events/Model/Organizer.php',
        'WPGraphQL\\TEC\\Events\\Model\\Venue' => __DIR__ . '/../..' . '/src/Events/Model/Venue.php',
        'WPGraphQL\\TEC\\Events\\TypeRegistry' => __DIR__ . '/../..' . '/src/Events/TypeRegistry.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\CostOperatorEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/CostOperatorEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\CurrencyPositionEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/CurrencyPositionEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\EnabledViewsEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/EnabledViewsEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\EventsTemplateEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/EventsTemplateEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Input\\CostFilterInput' => __DIR__ . '/../..' . '/src/Events/Type/Input/CostFilterInput.php',
        'WPGraphQL\\TEC\\Events\\Type\\Input\\DateAndTimezoneInput' => __DIR__ . '/../..' . '/src/Events/Type/Input/DateAndTimezoneInput.php',
        'WPGraphQL\\TEC\\Events\\Type\\Input\\DateRangeAndTimezoneInput' => __DIR__ . '/../..' . '/src/Events/Type/Input/DateRangeAndTimezoneInput.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Event' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/Event.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\EventLinkedData' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/EventLinkedData.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Organizer' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/Organizer.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\OrganizerLinkedData' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/OrganizerLinkedData.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\TecSettings' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/TecSettings.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Venue' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/Venue.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\VenueCoordinates' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/VenueCoordinates.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\VenueLinkedData' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/VenueLinkedData.php',
        'WPGraphQL\\TEC\\Interfaces\\Hookable' => __DIR__ . '/../..' . '/src/Interfaces/Hookable.php',
        'WPGraphQL\\TEC\\Interfaces\\TypeRegistryInterface' => __DIR__ . '/../..' . '/src/Interfaces/TypeRegistryInterface.php',
        'WPGraphQL\\TEC\\TEC' => __DIR__ . '/../..' . '/src/TEC.php',
        'WPGraphQL\\TEC\\Tickets\\CoreSchemaFilters' => __DIR__ . '/../..' . '/src/Tickets/CoreSchemaFilters.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Factory' => __DIR__ . '/../..' . '/src/Tickets/Data/Factory.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Loader\\TicketLoader' => __DIR__ . '/../..' . '/src/Tickets/Data/Loader/TicketLoader.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\PurchasableTicket' => __DIR__ . '/../..' . '/src/Tickets/Model/PurchasableTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\RsvpTicket' => __DIR__ . '/../..' . '/src/Tickets/Model/RsvpTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\Ticket' => __DIR__ . '/../..' . '/src/Tickets/Model/Ticket.php',
        'WPGraphQL\\TEC\\Tickets\\TypeRegistry' => __DIR__ . '/../..' . '/src/Tickets/TypeRegistry.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\PaypalCurrencyCodeOptionsEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/PaypalCurrencyCodeOptionsEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\StockHandlingOptionsEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/StockHandlingOptionsEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\StockModeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/StockModeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketFormLocationOptionsEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/TicketFormLocationOptionsEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketIdTypeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/TicketIdTypeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketTypeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/TicketTypeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\PurchasableTicket' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/PurchasableTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\Ticket' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/Ticket.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\RsvpTicket' => __DIR__ . '/../..' . '/src/Tickets/Type/WPObject/RsvpTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\TecSettings' => __DIR__ . '/../..' . '/src/Tickets/Type/WPObject/TecSettings.php',
        'WPGraphQL\\TEC\\Traits\\PostTypeResolverMethod' => __DIR__ . '/../..' . '/src/Traits/PostTypeResolverMethod.php',
        'WPGraphQL\\TEC\\TypeRegistry' => __DIR__ . '/../..' . '/src/TypeRegistry.php',
        'WPGraphQL\\TEC\\Utils\\Utils' => __DIR__ . '/../..' . '/src/Utils/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76247ffd27f1d1ab469519c96f3a9966::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76247ffd27f1d1ab469519c96f3a9966::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit76247ffd27f1d1ab469519c96f3a9966::$classMap;

        }, null, ClassLoader::class);
    }
}
