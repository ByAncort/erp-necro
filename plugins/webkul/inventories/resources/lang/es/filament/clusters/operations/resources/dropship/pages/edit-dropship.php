<?php

return [
    'notification' => [
        'title' => 'Envío Directo actualizado',
        'body'  => 'El envío directo ha sido actualizado exitosamente.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Envío Directo eliminado',
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
