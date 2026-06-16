<?php

return [
    'header-actions' => [
        'validate' => [
            'label' => 'Validar',

            'notification' => [
                'warning' => [
                    'title' => 'Stock insuficiente',
                    'body'  => 'El desecho tiene stock insuficiente para validar.',
                ],

                'success' => [
                    'title' => 'Desecho marcado como completado',
                    'body'  => 'El desecho ha sido marcado como completado exitosamente.',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Desecho Eliminado',
                    'body'  => 'El desecho ha sido eliminado exitosamente.',
                ],

                'error' => [
                    'title' => 'Los desechos no pudieron ser eliminados',
                    'body'  => 'Los desechos no pueden ser eliminados porque están actualmente en uso.',
                ],
            ],
        ],
    ],
];
