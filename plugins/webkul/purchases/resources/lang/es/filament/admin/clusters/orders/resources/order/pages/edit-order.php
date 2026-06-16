<?php

return [
    'notification' => [
        'title' => 'Pedido actualizado',
        'body'  => 'El pedido ha sido actualizado exitosamente.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => 'Confirmar',
        ],

        'close' => [
            'label' => 'Cerrar',
        ],

        'cancel' => [
            'label' => 'Cancelar',
        ],

        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Pedido eliminado',
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
