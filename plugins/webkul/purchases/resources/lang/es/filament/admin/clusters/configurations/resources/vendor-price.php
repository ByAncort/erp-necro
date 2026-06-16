<?php

return [
    'navigation' => [
        'title' => 'Listas de Precios de Proveedor',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'General',

                'fields' => [
                    'vendor'                      => 'Proveedor',
                    'vendor-product-name'         => 'Nombre del Producto del Proveedor',
                    'vendor-product-name-tooltip' => 'El nombre del producto del proveedor aparecerá en la solicitud de cotización. Déjelo en blanco para usar el nombre interno del producto.',
                    'vendor-product-code'         => 'Código del Producto del Proveedor',
                    'vendor-product-code-tooltip' => 'El código del producto del proveedor aparecerá en la solicitud de cotización. Déjelo en blanco para usar el código interno.',
                    'delay'                       => 'Plazo de Entrega (Días)',
                    'delay-tooltip'               => 'El plazo de entrega (en días) desde la confirmación de la orden de compra hasta la recepción del producto en el almacén. Utilizado por el planificador para la planificación automática de órdenes de compra.',
                ],
            ],

            'prices' => [
                'title'  => 'Precios',

                'fields' => [
                    'product'            => 'Producto',
                    'quantity'           => 'Cantidad',
                    'quantity-tooltip'   => 'La cantidad mínima requerida para comprar a este proveedor y calificar para el precio especificado. Esto se expresa en la Unidad de Medida del producto del proveedor o, si no se establece, en la unidad de medida predeterminada del producto.',
                    'unit-price'         => 'Precio Unitario',
                    'unit-price-tooltip' => 'El precio por unidad de este producto del proveedor, expresado en la Unidad de Medida del producto del proveedor o, si no se establece, en la unidad de medida predeterminada del producto.',
                    'currency'           => 'Moneda',
                    'valid-from'         => 'Válido Desde',
                    'valid-to'           => 'Válido Hasta',
                    'discount'           => 'Descuento (%)',
                    'company'            => 'Compañía',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'vendor'              => 'Proveedor',
            'vendor-product-name' => 'Nombre del Producto del Proveedor',
            'vendor-product-code' => 'Código del Producto del Proveedor',
            'delay'               => 'Plazo de Entrega (Días)',
            'product'             => 'Producto',
            'quantity'            => 'Cantidad',
            'unit-price'          => 'Precio Unitario',
            'currency'            => 'Moneda',
            'valid-from'          => 'Válido Desde',
            'valid-to'            => 'Válido Hasta',
            'discount'            => 'Descuento (%)',
            'company'             => 'Compañía',
            'created-at'          => 'Creado En',
            'updated-at'          => 'Actualizado En',
        ],

        'filters' => [
            'vendor'        => 'Filtrar por Proveedor',
            'product'       => 'Filtrar por Producto',
            'currency'      => 'Filtrar por Moneda',
            'company'       => 'Filtrar por Compañía',
            'price-from'    => 'Precio Mínimo',
            'price-to'      => 'Precio Máximo',
            'min-qty-from'  => 'Cantidad Mínima Desde',
            'min-qty-to'    => 'Cantidad Mínima Hasta',
            'starts-from'   => 'Fecha Válido Desde',
            'ends-before'   => 'Fecha Válido Hasta',
            'created-from'  => 'Creado Desde',
            'created-until' => 'Creado Hasta',
        ],

        'groups' => [
            'vendor'     => 'Proveedor',
            'product'    => 'Producto',
            'created-at' => 'Creado En',
            'updated-at' => 'Actualizado En',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Precio de Proveedor eliminado',
                        'body'  => 'El precio de proveedor ha sido eliminado exitosamente.',
                    ],

                    'error' => [
                        'title' => 'El Precio de Proveedor no pudo ser eliminado',
                        'body'  => 'El precio de proveedor no puede ser eliminado porque está actualmente en uso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Precios de Proveedor eliminados',
                        'body'  => 'Los precios de proveedor han sido eliminados exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los Precios de Proveedor no pudieron ser eliminados',
                        'body'  => 'Los precios de proveedor no pueden ser eliminados porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'General',

                'entries' => [
                    'vendor'                      => 'Proveedor',
                    'vendor-product-name'         => 'Nombre del Producto del Proveedor',
                    'vendor-product-name-tooltip' => 'El nombre del producto del proveedor aparecerá en la solicitud de cotización. Déjelo en blanco para usar el nombre interno del producto.',
                    'vendor-product-code'         => 'Código del Producto del Proveedor',
                    'vendor-product-code-tooltip' => 'El código del producto del proveedor aparecerá en la solicitud de cotización. Déjelo en blanco para usar el código interno.',
                    'delay'                       => 'Plazo de Entrega (Días)',
                    'delay-tooltip'               => 'El plazo de entrega (en días) desde la confirmación de la orden de compra hasta la recepción del producto en el almacén. Utilizado por el planificador para la planificación automática de órdenes de compra.',
                ],
            ],

            'record-information' => [
                'title'  => 'Información del Registro',

                'entries' => [
                    'created-by'   => 'Creado Por',
                    'created-at'   => 'Creado En',
                    'last-updated' => 'Última Actualización',
                ],
            ],

            'prices' => [
                'title'  => 'Precios',

                'entries' => [
                    'product'            => 'Producto',
                    'quantity'           => 'Cantidad',
                    'quantity-tooltip'   => 'La cantidad mínima requerida para comprar a este proveedor y calificar para el precio especificado. Esto se expresa en la Unidad de Medida del producto del proveedor o, si no se establece, en la unidad de medida predeterminada del producto.',
                    'unit-price'         => 'Precio Unitario',
                    'unit-price-tooltip' => 'El precio por unidad de este producto del proveedor, expresado en la Unidad de Medida del producto del proveedor o, si no se establece, en la unidad de medida predeterminada del producto.',
                    'currency'           => 'Moneda',
                    'valid-from'         => 'Válido Desde',
                    'valid-to'           => 'Válido Hasta',
                    'discount'           => 'Descuento (%)',
                    'company'            => 'Compañía',
                ],
            ],
        ],
    ],
];
