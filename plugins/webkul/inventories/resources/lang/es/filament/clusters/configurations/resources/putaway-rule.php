<?php

return [
    'navigation' => [
        'title' => 'Reglas de Ubicación',
        'group' => 'Gestión de Almacén',
    ],

    'form' => [
        'fields' => [
            'in-location'          => 'Cuando el Producto Llega a',
            'product'              => 'Producto',
            'product-placeholder'  => 'Todos los Productos',
            'category'             => 'Categoría de Producto',
            'category-placeholder' => 'Todas las Categorías',
            'storage-category'     => 'Categoría de Almacenamiento',
            'out-location'         => 'Almacenar en',
            'sub-location'         => 'Sububicación',
            'company'              => 'Compañía',
        ],
    ],

    'table' => [
        'columns' => [
            'in-location'      => 'Cuando el Producto Llega a',
            'product'          => 'Producto',
            'category'         => 'Categoría de Producto',
            'storage-category' => 'Categoría de Almacenamiento',
            'out-location'     => 'Almacenar en',
            'sub-location'     => 'Sububicación',
            'company'          => 'Compañía',
            'deleted-at'       => 'Eliminado el',
            'created-at'       => 'Creado el',
            'updated-at'       => 'Actualizado el',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Regla de ubicación actualizada',
                    'body'  => 'La regla de ubicación ha sido actualizada exitosamente.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Regla de ubicación restaurada',
                    'body'  => 'La regla de ubicación ha sido restaurada exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Regla de ubicación eliminada',
                    'body'  => 'La regla de ubicación ha sido eliminada exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'error' => [
                        'title' => 'La regla de ubicación no pudo ser eliminada',
                        'body'  => 'La regla de ubicación no puede ser eliminada permanentemente porque está referenciada por otros registros.',
                    ],

                    'success' => [
                        'title' => 'Regla de ubicación eliminada permanentemente',
                        'body'  => 'La regla de ubicación ha sido eliminada permanentemente exitosamente.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Reglas de ubicación restauradas',
                    'body'  => 'Las reglas de ubicación han sido restauradas exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Reglas de ubicación eliminadas',
                    'body'  => 'Las reglas de ubicación han sido eliminadas exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'error' => [
                        'title' => 'Las reglas de ubicación no pudieron ser eliminadas',
                        'body'  => 'Algunas reglas de ubicación no pueden ser eliminadas permanentemente porque están referenciadas por otros registros.',
                    ],

                    'success' => [
                        'title' => 'Reglas de ubicación eliminadas permanentemente',
                        'body'  => 'Las reglas de ubicación han sido eliminadas permanentemente exitosamente.',
                    ],
                ],
            ],
        ],
    ],
];
