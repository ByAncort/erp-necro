<?php

return [
    'navigation' => [
        'title' => 'Ubicaciones',
        'group' => 'Gestión de Almacén',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'General',

                'fields' => [
                    'location'                     => 'Ubicación',
                    'location-placeholder'         => 'ej. Stock de Repuesto',
                    'parent-location'              => 'Ubicación Padre',
                    'parent-location-hint-tooltip' => 'La ubicación principal que engloba esta ubicación. Por ejemplo, la \'Zona de Despacho\' es parte de la ubicación padre \'Puerta 1\'.',
                    'external-notes'               => 'Notas Externas',
                ],
            ],

            'settings' => [
                'title'  => 'Configuración',

                'fields' => [
                    'location-type'                 => 'Tipo de Ubicación',
                    'company'                       => 'Compañía',
                    'storage-category'              => 'Categoría de Almacenamiento',
                    'is-scrap'                      => '¿Es una Ubicación de Desecho?',
                    'is-scrap-hint-tooltip'         => 'Seleccione esta casilla para designar esta ubicación para almacenar productos desechados o dañados.',
                    'is-dock'                       => '¿Es una Ubicación de Muelle?',
                    'is-dock-hint-tooltip'          => 'Seleccione esta casilla para designar esta ubicación para almacenar productos que están listos para su envío.',
                    'is-replenish'                  => '¿Es una Ubicación de Reabastecimiento?',
                    'is-replenish-hint-tooltip'     => 'Active esta función para recuperar todas las cantidades necesarias para el reabastecimiento en esta ubicación.',
                    'logistics'                     => 'Logística',
                    'removal-strategy'              => 'Estrategia de Extracción',
                    'removal-strategy-hint-tooltip' => 'Especifica el método predeterminado para determinar el estante, lote y ubicación exactos desde los cuales seleccionar productos. Este método puede aplicarse a nivel de categoría de producto, con una alternativa a las ubicaciones padre si no se configura aquí.',
                    'cyclic-counting'               => 'Conteo Cíclico',
                    'inventory-frequency'           => 'Frecuencia de Inventario',
                    'last-inventory'                => 'Último Inventario',
                    'last-inventory-hint-tooltip'   => 'Fecha del último inventario en esta ubicación.',
                    'next-expected'                 => 'Próximo esperado',
                    'next-expected-hint-tooltip'    => 'Fecha del próximo inventario planificado según el programa cíclico.',
                ],
            ],

            'additional' => [
                'title'  => 'Información Adicional',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'         => 'Ubicación',
            'type'             => 'Tipo',
            'storage-category' => 'Categoría de Almacenamiento',
            'company'          => 'Compañía',
            'deleted-at'       => 'Eliminado el',
            'created-at'       => 'Creado el',
            'updated-at'       => 'Actualizado el',
        ],

        'groups' => [
            'warehouse'       => 'Almacén',
            'type'            => 'Tipo',
            'created-at'      => 'Creado el',
            'updated-at'      => 'Actualizado el',
        ],

        'filters' => [
            'location' => 'Ubicación',
            'type'     => 'Tipo',
            'company'  => 'Compañía',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Ubicación actualizada',
                    'body'  => 'La ubicación ha sido actualizada exitosamente.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Ubicación restaurada',
                    'body'  => 'La ubicación ha sido restaurada exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ubicación eliminada',
                    'body'  => 'La ubicación ha sido eliminada exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Ubicación forzada a eliminar',
                        'body'  => 'La ubicación ha sido forzada a eliminar exitosamente.',
                    ],

                    'error' => [
                        'title' => 'La ubicación no pudo ser eliminada',
                        'body'  => 'La ubicación no puede ser eliminada porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Imprimir Código de Barras',
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Ubicaciones restauradas',
                    'body'  => 'Las ubicaciones han sido restauradas exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ubicaciones eliminadas',
                    'body'  => 'Las ubicaciones han sido eliminadas exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Ubicaciones forzadas a eliminar',
                        'body'  => 'Las ubicaciones han sido forzadas a eliminar exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Las ubicaciones no pudieron ser eliminadas',
                        'body'  => 'Las ubicaciones no pueden ser eliminadas porque están actualmente en uso.',
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
                    'location'                     => 'Ubicación',
                    'location-placeholder'         => 'ej. Stock de Repuesto',
                    'parent-location'              => 'Ubicación Padre',
                    'parent-location-hint-tooltip' => 'La ubicación principal que engloba esta ubicación. Por ejemplo, la \'Zona de Despacho\' es parte de la ubicación padre \'Puerta 1\'.',
                    'external-notes'               => 'Notas Externas',
                ],
            ],

            'settings' => [
                'title'  => 'Configuración',

                'entries' => [
                    'location-type'                 => 'Tipo de Ubicación',
                    'company'                       => 'Compañía',
                    'storage-category'              => 'Categoría de Almacenamiento',
                    'is-scrap'                      => '¿Es una Ubicación de Desecho?',
                    'is-scrap-hint-tooltip'         => 'Seleccione esta casilla para designar esta ubicación para almacenar productos desechados o dañados.',
                    'is-dock'                       => '¿Es una Ubicación de Muelle?',
                    'is-dock-hint-tooltip'          => 'Seleccione esta casilla para designar esta ubicación para almacenar productos que están listos para su envío.',
                    'is-replenish'                  => '¿Es una Ubicación de Reabastecimiento?',
                    'is-replenish-hint-tooltip'     => 'Active esta función para recuperar todas las cantidades necesarias para el reabastecimiento en esta ubicación.',
                    'logistics'                     => 'Logística',
                    'removal-strategy'              => 'Estrategia de Extracción',
                    'removal-strategy-hint-tooltip' => 'Especifica el método predeterminado para determinar el estante, lote y ubicación exactos desde los cuales seleccionar productos. Este método puede aplicarse a nivel de categoría de producto, con una alternativa a las ubicaciones padre si no se configura aquí.',
                    'cyclic-counting'               => 'Conteo Cíclico',
                    'inventory-frequency'           => 'Frecuencia de Inventario',
                    'last-inventory'                => 'Último Inventario',
                    'last-inventory-hint-tooltip'   => 'Fecha del último inventario en esta ubicación.',
                    'next-expected'                 => 'Próximo esperado',
                    'next-expected-hint-tooltip'    => 'Fecha del próximo inventario planificado según el programa cíclico.',
                ],
            ],

            'additional' => [
                'title'  => 'Información Adicional',
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
