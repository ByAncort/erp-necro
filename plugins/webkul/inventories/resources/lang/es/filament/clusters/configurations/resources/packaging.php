<?php

return [
    'navigation' => [
        'title' => 'Empaques',
        'group' => 'Productos',
    ],

    'form' => [
        'package-type' => 'Tipo de Paquete',
        'routes'       => 'Rutas',
    ],

    'table' => [
        'columns' => [
            'package-type' => 'Tipo de Paquete',
        ],

        'groups' => [
            'package-type' => 'Tipo de Paquete',
        ],

        'filters' => [
            'package-type' => 'Tipo de Paquete',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'entries' => [
                    'package_type' => 'Tipo de Paquete',
                ],
            ],

            'routing' => [
                'title' => 'Información de Enrutamiento',

                'entries' => [
                    'routes'     => 'Rutas de Almacén',
                    'route_name' => 'Nombre de Ruta',
                ],
            ],
        ],
    ],
];
