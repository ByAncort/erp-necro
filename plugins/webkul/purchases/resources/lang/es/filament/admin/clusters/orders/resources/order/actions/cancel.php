<?php

return [
    'label' => 'Cancelar',

    'action' => [
        'notification' => [
            'warning' => [
                'receipts' => [
                    'title' => 'No se puede cancelar el pedido',
                    'body'  => 'El pedido no puede ser cancelado porque tiene recepciones que ya están realizadas.',
                ],

                'bills' => [
                    'title' => 'No se puede cancelar el pedido',
                    'body'  => 'El pedido no puede ser cancelado. Primero debe cancelar sus facturas de proveedor relacionadas.',
                ],
            ],

            'success' => [
                'title' => 'Pedido cancelado',
                'body'  => 'El pedido ha sido cancelado exitosamente.',
            ],
        ],
    ],
];
