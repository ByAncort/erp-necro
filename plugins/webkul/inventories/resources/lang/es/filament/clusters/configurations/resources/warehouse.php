<?php

return [
    'navigation' => [
        'title' => 'Almacenes',
        'group' => 'Gestión de Almacenes',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'General',
                'fields' => [
                    'name'               => 'Nombre',
                    'name-placeholder'   => 'ej. Almacén Central',
                    'code'               => 'Nombre Corto',
                    'code-placeholder'   => 'ej. AC',
                    'code-hint-tooltip'  => 'El nombre corto sirve como identificador del almacén.',
                    'company'            => 'Empresa',
                    'address'            => 'Dirección',
                ],
            ],

            'settings' => [
                'title'  => 'Configuraciones',

                'fields' => [
                    'shipment-management'              => 'Gestión de Envíos',
                    'incoming-shipments'               => 'Envíos Entrantes',
                    'incoming-shipments-hint-tooltip'  => 'Ruta entrante predeterminada a seguir',
                    'outgoing-shipments'               => 'Envíos Salientes',
                    'outgoing-shipments-hint-tooltip'  => 'Ruta saliente predeterminada a seguir',
                    'manufacture'                      => 'Fabricación',
                    'manufacture-hint-tooltip'         => 'Ruta de fabricación predeterminada a seguir',
                    'resupply-management'              => 'Gestión de Reabastecimiento',
                    'resupply-management-hint-tooltip' => 'Las rutas se generarán automáticamente para reabastecer este almacén desde los almacenes seleccionados.',
                    'resupply-from'                    => 'Reabastecer Desde',
                ],
            ],

            'additional' => [
                'title'  => 'Información Adicional',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nombre',
            'code'       => 'Nombre Corto',
            'company'    => 'Empresa',
            'address'    => 'Dirección',
            'deleted-at' => 'Eliminado el',
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],

        'groups' => [
            'address'       => 'Dirección',
            'company'       => 'Empresa',
            'created-at'    => 'Creado el',
            'updated-at'    => 'Actualizado el',
        ],

        'filters' => [
            'company' => 'Empresa',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Almacén restaurado',
                    'body'  => 'El almacén ha sido restaurado exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Almacén eliminado',
                    'body'  => 'El almacén ha sido eliminado exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Almacén eliminado forzosamente',
                        'body'  => 'El almacén ha sido eliminado forzosamente exitosamente.',
                    ],

                    'error' => [
                        'title' => 'El almacén no pudo ser eliminado',
                        'body'  => 'El almacén no puede ser eliminado porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Almacenes restaurados',
                    'body'  => 'Los almacenes han sido restaurados exitosamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Almacenes eliminados',
                    'body'  => 'Los almacenes han sido eliminados exitosamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Almacenes eliminados forzosamente',
                        'body'  => 'Los almacenes han sido eliminados forzosamente exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los almacenes no pudieron ser eliminados',
                        'body'  => 'Los almacenes no pueden ser eliminados porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Información General',

                'entries' => [
                    'name'    => 'Nombre del Almacén',
                    'code'    => 'Código del Almacén',
                    'company' => 'Empresa',
                    'address' => 'Dirección',
                ],
            ],

            'settings' => [
                'title' => 'Configuraciones',

                'entries' => [
                    'shipment-management' => 'Gestión de Envíos',
                    'incoming-shipments'  => 'Envíos Entrantes',
                    'outgoing-shipments'  => 'Envíos Salientes',
                    'resupply-management' => 'Gestión de Reabastecimiento',
                    'resupply-from'       => 'Reabastecer Desde',
                ],
            ],

            'record-information' => [
                'title' => 'Información del Registro',

                'entries' => [
                    'created-by'   => 'Creado por',
                    'created-at'   => 'Creado el',
                    'last-updated' => 'Última Actualización',
                ],
            ],
        ],
    ],
];
