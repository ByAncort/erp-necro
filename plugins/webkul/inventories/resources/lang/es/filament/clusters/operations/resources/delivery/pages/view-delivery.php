<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Entrega Eliminada',
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
