<?php

return [
    'label'             => 'Validar',
    'modal-heading'     => '¿Crear Pedido Pendiente?',
    'modal-description' => 'Cree un pedido pendiente si los productos restantes se procesarán más tarde. Si no, no genere un pedido pendiente.',

    'extra-modal-footer-actions' => [
        'no-backorder' => [
            'label' => 'Sin Pedido Pendiente',
        ],
    ],

    'notification' => [
        'error' => [
            'title' => 'Validación Fallida',
        ],

        'warning' => [
            'lines-missing' => [
                'title' => 'No hay cantidades reservadas',
                'body'  => 'No hay cantidades reservadas para la transferencia.',
            ],

            'no-quantities-reserved' => [
                'title' => 'No hay cantidades reservadas',
                'body'  => 'No hay cantidades reservadas para la transferencia.',
            ],

            'lot-missing' => [
                'title' => 'Proporcione Lote/Número de Serie',
                'body'  => 'Debe proporcionar un Lote/Número de Serie para los productos :products.',
            ],

            'serial-qty' => [
                'title' => 'Número de Serie Ya Asignado',
                'body'  => 'El número de serie ya ha sido asignado a otro producto.',
            ],

            'partial-package' => [
                'title' => 'No se puede mover el mismo contenido del paquete',
                'body'  => 'No puede mover el mismo contenido de un paquete más de una vez dentro de una sola transferencia ni dividir el paquete entre dos ubicaciones.',
            ],
        ],
    ],
];
