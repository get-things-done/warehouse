<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'transfer' => [
        'morph_map' => [
            'warehouse_import' => \GetThingsDone\Warehouse\Models\WarehouseImport::class,
            'warehouse_export' => \GetThingsDone\Warehouse\Models\WarehouseExport::class,
        ]
    ]
];