<?php

return [
    'navigation' => [
        'title' => 'Rutas',
        'group' => 'Gestión de Almacén',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'General',

                'fields' => [
                    'route'             => 'Ruta',
                    'route-placeholder' => 'ej. Recepción en Dos Pasos',
                    'company'           => 'Compañía',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Aplicable en',
                'description' => 'Elija las ubicaciones donde esta ruta puede ser aplicada.',

                'fields' => [
                    'products'                        => 'Productos',
                    'products-hint-tooltip'           => 'Si se selecciona, esta ruta estará disponible para selección en el producto.',
                    'product-categories'              => 'Categorías de Producto',
                    'product-categories-hint-tooltip' => 'Si se selecciona, esta ruta estará disponible para selección en la categoría de producto.',
                    'warehouses'                      => 'Almacenes',
                    'warehouses-hint-tooltip'         => 'Cuando se asigna un almacén a esta ruta, se considerará la ruta predeterminada para los productos que se mueven a través de ese almacén.',
                    'packaging'                       => 'Empaque',
                    'packaging-hint-tooltip'          => 'Si se selecciona, esta ruta estará disponible para selección en el empaque.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'route'      => 'Ruta',
            'company'    => 'Compañía',
            'deleted-at' => 'Eliminado el',
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],

        'groups' => [
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],

        'filters' => [
            'company'  => 'Compañía',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Ruta actualizada',
                    'body'  => 'La ruta ha sido actualizada exitosamente.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Ruta restaurada',
                    'body'  => 'La ruta ha sido restaurada exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ruta eliminada',
                    'body'  => 'La ruta ha sido eliminada exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Ruta forzada a eliminar',
                        'body'  => 'La ruta ha sido forzada a eliminar exitosamente.',
                    ],

                    'error' => [
                        'title' => 'La ruta no pudo ser eliminada',
                        'body'  => 'La ruta no puede ser eliminada porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Rutas restauradas',
                    'body'  => 'Las rutas han sido restauradas exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Rutas eliminadas',
                    'body'  => 'Las rutas han sido eliminadas exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Rutas forzadas a eliminar',
                        'body'  => 'Las rutas han sido forzadas a eliminar exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Las rutas no pudieron ser eliminadas',
                        'body'  => 'Las rutas no pueden ser eliminadas porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'General',

                'entries' => [
                    'route'             => 'Ruta',
                    'route-placeholder' => 'ej. Recepción en Dos Pasos',
                    'company'           => 'Compañía',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Aplicable en',
                'description' => 'Seleccione los lugares donde esta ruta puede ser seleccionada.',

                'entries' => [
                    'products'                        => 'Productos',
                    'products-hint-tooltip'           => 'Si se selecciona, esta ruta estará disponible para selección en el producto.',
                    'product-categories'              => 'Categorías de Producto',
                    'product-categories-hint-tooltip' => 'Si se selecciona, esta ruta estará disponible para selección en la categoría de producto.',
                    'warehouses'                      => 'Almacenes',
                    'warehouses-hint-tooltip'         => 'Cuando se asigna un almacén a esta ruta, se considerará la ruta predeterminada para los productos que se mueven a través de ese almacén.',
                    'packaging'                       => 'Empaque',
                    'packaging-hint-tooltip'          => 'Si se selecciona, esta ruta estará disponible para selección en el empaque.',
                ],
            ],

            'record-information' => [
                'title' => 'Información del Registro',

                'entries' => [
                    'created-by'   => 'Creado Por',
                    'created-at'   => 'Creado el',
                    'last-updated' => 'Última Actualización',
                ],
            ],
        ],
    ],
];
