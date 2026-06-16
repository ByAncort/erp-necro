<?php

return [
    'label' => 'Devolver',

    'modal' => [
        'form' => [
            'columns' => [
                'product'  => 'Producto',
                'quantity' => 'Cantidad',
                'uom'      => 'UDM',
            ],
        ],
    ],

    'notification' => [
        'no-products' => [
            'body' => 'No hay productos para devolver (solo las líneas en estado Completado y que no hayan sido devueltas completamente pueden ser devueltas).',
        ],
        'no-quantities' => [
            'body' => 'Especifique al menos una cantidad distinta de cero.',
        ],
    ],
];
