<?php

return [
    'navigation' => [
        'title' => 'Reportes',
        'group' => 'Inventario',
    ],

    'moves' => [
        'navigation' => [
            'title' => 'Historial de Movimientos',
        ],

        'filters' => [
            'product-category'     => 'Categoría de Producto',
            'source-location'      => 'Ubicación de Origen',
            'destination-location' => 'Ubicación de Destino',
            'package'              => 'Paquete',
            'lot'                  => 'Lote/Número de Serie',
            'package-type'         => 'Tipo de Paquete',
        ],

        'groups' => [
            'product'   => 'Producto',
            'status'    => 'Estado',
            'date'      => 'Fecha',
            'operation' => 'Operación',
            'location'  => 'Ubicación',
            'category'  => 'Categoría',
        ],
    ],

    'quantities' => [
        'navigation' => [
            'title' => 'Ubicaciones',
        ],

        'filters' => [
            'warehouse'        => 'Almacén',
            'location'         => 'Ubicación',
            'product-category' => 'Categoría de Producto',
            'storage-category' => 'Categoría de Almacenamiento',
            'package'          => 'Paquete',
            'lot'              => 'Lote/Número de Serie',
            'package-type'     => 'Tipo de Paquete',
        ],

        'groups' => [
            'product'          => 'Producto',
            'product-category' => 'Categoría de Producto',
            'location'         => 'Ubicación',
            'storage-category' => 'Categoría de Almacenamiento',
            'lot'              => 'Lote/Número de Serie',
            'package'          => 'Paquete',
            'company'          => 'Empresa',
        ],
    ],
];
