<?php

return [
    'notification' => [
        'title' => 'Entrega actualizada',
        'body'  => 'La entrega ha sido actualizada exitosamente.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Entrega eliminada',
                    'body'  => 'La entrega ha sido eliminada exitosamente.',
                ],

                'error' => [
                    'title' => 'La entrega no pudo ser eliminada',
                    'body'  => 'La entrega no puede ser eliminada porque está actualmente en uso.',
                ],
            ],
        ],
    ],
];
