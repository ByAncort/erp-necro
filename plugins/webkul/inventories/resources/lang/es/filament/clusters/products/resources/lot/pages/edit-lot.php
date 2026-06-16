<?php

return [
    'notification' => [
        'title' => 'Lote actualizado',
        'body'  => 'El lote ha sido actualizado exitosamente.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Lote eliminado',
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
