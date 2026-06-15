<?php

return [
    'title' => 'Variantes',

    'form' => [
        'date'                   => 'Fecha',
        'employee'               => 'Empleado',
        'description'            => 'Descripción',
        'time-spent'             => 'Tiempo Invertido',
        'time-spent-helper-text' => 'Tiempo invertido en horas (Ej. 1.5 horas significa 1 hora 30 minutos)',
    ],

    'table' => [
        'columns' => [
            'date'                   => 'Fecha',
            'employee'               => 'Empleado',
            'description'            => 'Descripción',
            'time-spent'             => 'Tiempo Invertido',
            'time-spent-on-subtasks' => 'Tiempo Invertido en Subtareas',
            'total-time-spent'       => 'Tiempo Total Invertido',
            'remaining-time'         => 'Tiempo Restante',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Variante eliminada',
                    'body'  => 'La variante ha sido eliminada exitosamente.',
                ],
            ],
        ],
    ],
];
