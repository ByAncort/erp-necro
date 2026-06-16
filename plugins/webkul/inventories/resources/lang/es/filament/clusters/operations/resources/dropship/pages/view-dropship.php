<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Envío Directo Eliminado',
                    'body'  => 'El envío directo ha sido eliminado exitosamente.',
                ],

                'error' => [
                    'title' => 'El envío directo no pudo ser eliminado',
                    'body'  => 'El envío directo no puede ser eliminado porque está actualmente en uso.',
                ],
            ],
        ],
    ],
];
