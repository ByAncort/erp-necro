<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Pedido Eliminado',
                    'body'  => 'El pedido ha sido eliminado exitosamente.',
                ],

                'error' => [
                    'title' => 'El Pedido no pudo ser eliminado',
                    'body'  => 'El pedido no puede ser eliminado porque está actualmente en uso.',
                ],
            ],
        ],
    ],
];
