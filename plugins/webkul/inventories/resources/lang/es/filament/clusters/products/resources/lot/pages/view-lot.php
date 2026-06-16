<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Lote Eliminado',
                    'body'  => 'El lote ha sido eliminado exitosamente.',
                ],

                'error' => [
                    'title' => 'El lote no pudo ser eliminado',
                    'body'  => 'El lote no puede ser eliminado porque está actualmente en uso.',
                ],
            ],
        ],
    ],
];
