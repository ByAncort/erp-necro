<?php

return [
    'navigation' => [
        'title' => 'Planes de actividad',
        'group' => 'Actividades',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Información general',
                'fields' => [
                    'name'       => 'Nombre',
                    'status'     => 'Estado',
                    'department' => 'Departamento',
                    'company'    => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nombre',
            'status'     => 'Estado',
            'department' => 'Departamento',
            'company'    => 'Empresa',
            'manager'    => 'Gerente',
            'created-by' => 'Creado por',
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],

        'filters' => [
            'name'           => 'Nombre',
            'plugin'         => 'Plugin',
            'activity-types' => 'Tipos de actividad',
            'company'        => 'Empresa',
            'department'     => 'Departamento',
            'is-active'      => 'Estado',
            'updated-at'     => 'Actualizado el',
            'created-at'     => 'Creado el',
        ],

        'groups' => [
            'status'     => 'Estado',
            'name'       => 'Nombre',
            'created-by' => 'Creado por',
            'created-at' => 'Creado el',
            'updated-at' => 'Actualizado el',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Plan de actividad restaurado',
                    'body'  => 'El plan de actividad se ha restaurado correctamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Plan de actividad eliminado',
                    'body'  => 'El plan de actividad se ha eliminado correctamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Plan de actividad eliminado forzosamente',
                    'body'  => 'El plan de actividad se ha eliminado forzosamente correctamente.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Planes de actividad restaurados',
                    'body'  => 'Los planes de actividad se han restaurado correctamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Planes de actividad eliminados',
                    'body'  => 'Los planes de actividad se han eliminado correctamente.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Planes de actividad eliminados forzosamente',
                    'body'  => 'Los planes de actividad se han eliminado forzosamente correctamente.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Plan de actividad creado',
                    'body'  => 'El plan de actividad se ha creado correctamente.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Información general',
                'entries' => [
                    'name'       => 'Nombre',
                    'status'     => 'Estado',
                    'department' => 'Departamento',
                    'manager'    => 'Gerente',
                    'company'    => 'Empresa',
                ],
            ],
        ],
    ],
];
