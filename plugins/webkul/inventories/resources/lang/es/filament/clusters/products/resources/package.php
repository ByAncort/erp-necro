<?php

return [
    'navigation' => [
        'title' => 'Paquetes',
        'group' => 'Inventario',
    ],

    'global-search' => [
        'name'         => 'Nombre',
        'package-type' => 'Tipo de Paquete',
        'location'     => 'Ubicación',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'fields' => [
                    'name'             => 'Nombre',
                    'name-placeholder' => 'ej. PAQ007',
                    'package-type'     => 'Tipo de Paquete',
                    'pack-date'        => 'Fecha de Empaque',
                    'location'         => 'Ubicación',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nombre',
            'package-type' => 'Tipo de Paquete',
            'location'     => 'Ubicación',
            'company'      => 'Empresa',
            'created-at'   => 'Creado el',
            'updated-at'   => 'Actualizado el',
        ],

        'groups' => [
            'package-type'   => 'Tipo de Paquete',
            'location'       => 'Ubicación',
            'created-at'     => 'Creado el',
        ],

        'filters' => [
            'package-type' => 'Tipo de Paquete',
            'location'     => 'Ubicación',
            'creator'      => 'Creador',
            'company'      => 'Empresa',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Paquete eliminado',
                        'body'  => 'El paquete ha sido eliminado exitosamente.',
                    ],

                    'error' => [
                        'title' => 'El paquete no pudo ser eliminado',
                        'body'  => 'El paquete no puede ser eliminado porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print-without-content' => [
                'label' => 'Imprimir Código de Barras',
            ],

            'print-with-content' => [
                'label' => 'Imprimir Código de Barras con Contenido',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Paquetes eliminados',
                        'body'  => 'Los paquetes han sido eliminados exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los paquetes no pudieron ser eliminados',
                        'body'  => 'Los paquetes no pueden ser eliminados porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Detalles del Paquete',

                'entries' => [
                    'name'         => 'Nombre del Paquete',
                    'package-type' => 'Tipo de Paquete',
                    'pack-date'    => 'Fecha de Empaque',
                    'location'     => 'Ubicación',
                    'company'      => 'Empresa',
                    'created-at'   => 'Creado el',
                    'updated-at'   => 'Última Actualización',
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
