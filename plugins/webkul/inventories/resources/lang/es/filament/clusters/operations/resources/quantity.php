<?php

return [
    'navigation' => [
        'title' => 'Cantidades',
        'group' => 'Ajustes',
    ],

    'form' => [
        'fields' => [
            'location'         => 'Ubicación',
            'product'          => 'Producto',
            'package'          => 'Paquete',
            'lot'              => 'Lote / Números de Serie',
            'counted-qty'      => 'Cantidad Contada',
            'scheduled-at'     => 'Programado el',
            'storage-category' => 'Categoría de Almacenamiento',
        ],
    ],

    'table' => [
        'columns' => [
            'location'           => 'Ubicación',
            'product'            => 'Producto',
            'product-category'   => 'Categoría de Producto',
            'lot'                => 'Lote / Números de Serie',
            'storage-category'   => 'Categoría de Almacenamiento',
            'available-quantity' => 'Cantidad Disponible',
            'quantity'           => 'Cantidad',
            'package'            => 'Paquete',
            'last-counted-at'    => 'Último Conteo el',
            'on-hand'            => 'Cantidad Disponible',
            'uom'                => 'UDM',
            'counted'            => 'Cantidad Contada',
            'difference'         => 'Diferencia',
            'scheduled-at'       => 'Programado el',
            'user'               => 'Usuario',
            'company'            => 'Empresa',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Cantidad actualizada',
                    'body'  => 'La cantidad ha sido actualizada exitosamente.',
                ],
            ],
        ],

        'groups' => [
            'product'          => 'Producto',
            'product-category' => 'Categoría de Producto',
            'location'         => 'Ubicación',
            'storage-category' => 'Categoría de Almacenamiento',
            'lot'              => 'Lote / Números de Serie',
            'company'          => 'Empresa',
            'package'          => 'Paquete',
        ],

        'filters' => [
            'product'             => 'Producto',
            'uom'                 => 'Unidad de Medida',
            'product-category'    => 'Categoría de Producto',
            'location'            => 'Ubicación',
            'storage-category'    => 'Categoría de Almacenamiento',
            'lot'                 => 'Lote / Números de Serie',
            'company'             => 'Empresa',
            'package'             => 'Paquete',
            'on-hand-quantity'    => 'Cantidad Disponible',
            'difference-quantity' => 'Cantidad de Diferencia',
            'incoming-at'         => 'Entrante el',
            'scheduled-at'        => 'Programado el',
            'user'                => 'Usuario',
            'created-at'          => 'Creado el',
            'updated-at'          => 'Actualizado el',
            'company'             => 'Empresa',
            'creator'             => 'Creador',
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Añadir Cantidad',

                'notification' => [
                    'title' => 'Cantidad añadida',
                    'body'  => 'La cantidad ha sido añadida exitosamente.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'La cantidad ya existe',
                        'body'  => 'Ya existe una cantidad para esta configuración. Actualice la cantidad existente en su lugar.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'apply' => [
                'label' => 'Aplicar',

                'notification' => [
                    'title' => 'Cambios de cantidad aplicados',
                    'body'  => 'Los cambios de cantidad han sido aplicados exitosamente.',
                ],
            ],

            'clear' => [
                'label' => 'Limpiar',

                'notification' => [
                    'title' => 'Cambios de cantidad limpiados',
                    'body'  => 'Los cambios de cantidad han sido limpiados exitosamente.',
                ],
            ],
        ],
    ],
];
