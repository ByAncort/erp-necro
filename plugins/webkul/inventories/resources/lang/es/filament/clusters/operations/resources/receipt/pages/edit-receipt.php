<?php

return [
    'notification' => [
        'title' => 'Recepción actualizada',
        'body'  => 'La recepción ha sido actualizada exitosamente.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Recepción eliminada',
                    'body'  => 'La recepción ha sido eliminada exitosamente.',
                ],

                'error' => [
                    'title' => 'La recepción no pudo ser eliminada',
                    'body'  => 'La recepción no puede ser eliminada porque está actualmente en uso.',
                ],
            ],
        ],
    ],
];
