<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Detalles de la actividad',

                'fields' => [
                    'activity-type' => 'Tipo de actividad',
                    'summary'       => 'Resumen',
                    'note'          => 'Nota',
                ],
            ],

            'assignment' => [
                'title' => 'Asignación',

                'fields' => [
                    'assignment' => 'Asignación',
                    'assignee'   => 'Asignado a',
                ],
            ],

            'delay-information' => [
                'title' => 'Información de demora',

                'fields' => [
                    'delay-count'            => 'Cantidad de demora',
                    'delay-unit'             => 'Unidad de demora',
                    'delay-from'             => 'Demora desde',
                    'delay-from-helper-text' => 'Origen del cálculo de la demora',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => 'Tipo de actividad',
            'summary'       => 'Resumen',
            'assignment'    => 'Asignación',
            'assigned-to'   => 'Asignado a',
            'interval'      => 'Intervalo',
            'delay-unit'    => 'Unidad de demora',
            'delay-from'    => 'Demora desde',
            'created-by'    => 'Creado por',
            'created-at'    => 'Creado el',
            'updated-at'    => 'Actualizado el',
        ],

        'groups' => [
            'activity-type' => 'Tipo de actividad',
            'assignment'    => 'Asignación',
            'assigned-to'   => 'Asignado a',
            'interval'      => 'Intervalo',
            'delay-unit'    => 'Unidad de demora',
            'delay-from'    => 'Demora desde',
            'created-by'    => 'Creado por',
            'created-at'    => 'Creado el',
            'updated-at'    => 'Actualizado el',
        ],

        'filters' => [
            'activity-type'   => 'Tipo de actividad',
            'activity-status' => 'Estado de actividad',
            'has-delay'       => 'Tiene demora',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Plantilla de actividad actualizada',
                    'body'  => 'La plantilla de actividad se ha actualizado correctamente.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Plantilla de actividad creada',
                    'body'  => 'La plantilla de actividad se ha creado correctamente.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Plantilla de actividad eliminada',
                    'body'  => 'La plantilla de actividad se ha eliminado correctamente.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Plantillas de actividad eliminadas',
                    'body'  => 'Las plantillas de actividad se han eliminado correctamente.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Detalles de la actividad',

                'entries' => [
                    'activity-type' => 'Tipo de actividad',
                    'summary'       => 'Resumen',
                ],
            ],

            'assignment' => [
                'title' => 'Asignación',

                'entries' => [
                    'assignment' => 'Asignación',
                    'assignee'   => 'Asignado a',
                ],
            ],

            'delay-information' => [
                'title' => 'Información de demora',

                'entries' => [
                    'delay-count'            => 'Cantidad de demora',
                    'delay-unit'             => 'Unidad de demora',
                    'delay-from'             => 'Demora desde',
                    'delay-from-helper-text' => 'Origen del cálculo de la demora',
                ],
            ],
        ],

        'note' => 'Nota',
    ],
];
