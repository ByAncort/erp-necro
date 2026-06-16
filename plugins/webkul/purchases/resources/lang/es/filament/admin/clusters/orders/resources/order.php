<?php

return [
    'global-search' => [
        'vendor'    => 'Proveedor',
        'reference' => 'Referencia',
        'amount'    => 'Monto',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'fields' => [
                    'vendor'                   => 'Proveedor',
                    'vendor-reference'         => 'Referencia del Proveedor',
                    'vendor-reference-tooltip' => 'El número de referencia de la orden de venta o licitación proporcionada por el proveedor. Se utiliza para la coincidencia al recibir productos, ya que esta referencia suele estar incluida en la orden de entrega del proveedor.',
                    'agreement'                => 'Acuerdo',
                    'currency'                 => 'Moneda',
                    'confirmation-date'        => 'Fecha de Confirmación',
                    'order-deadline'           => 'Fecha Límite del Pedido',
                    'expected-arrival'         => 'Llegada Esperada',
                    'confirmed-by-vendor'      => 'Confirmado por el Proveedor',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Productos',

                'repeater' => [
                    'products' => [
                        'title'            => 'Productos',
                        'add-product-line' => 'Agregar Producto',

                        'fields' => [
                            'product'             => 'Producto',
                            'expected-arrival'    => 'Llegada Esperada',
                            'quantity'            => 'Cantidad',
                            'received'            => 'Recibido',
                            'billed'              => 'Facturado',
                            'unit'                => 'Unidad',
                            'packaging-qty'       => 'Cantidad de Empaque',
                            'packaging'           => 'Empaque',
                            'taxes'               => 'Impuestos',
                            'discount-percentage' => 'Descuento (%)',
                            'unit-price'          => 'Precio Unitario',
                            'amount'              => 'Monto',
                        ],

                        'notifications' => [
                            'quantity-below-received' => [
                                'title' => 'No se Puede Reducir la Cantidad',
                                'body'  => 'No puede reducir la cantidad por debajo de la cantidad recibida (:qty).',
                            ],

                            'blanket-order-qty-limit' => [
                                'title' => 'La Cantidad Excede el Límite de la Orden Abierta',
                                'body'  => 'La cantidad del producto (:product_qty) excede la cantidad disponible (:available_qty) de la orden abierta.',
                            ],
                        ],

                        'columns' => [
                            'product'             => 'Producto',
                            'expected-arrival'    => 'Llegada Esperada',
                            'quantity'            => 'Cantidad',
                            'received'            => 'Recibido',
                            'billed'              => 'Facturado',
                            'unit'                => 'Unidad',
                            'packaging-qty'       => 'Cantidad de Empaque',
                            'packaging'           => 'Empaque',
                            'taxes'               => 'Impuestos',
                            'discount-percentage' => 'Descuento (%)',
                            'unit-price'          => 'Precio Unitario',
                            'amount'              => 'Monto',
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'No se Puede Eliminar el Producto',
                                'body'  => 'No se pueden eliminar productos de una orden de compra confirmada.',
                            ],
                        ],
                    ],

                    'section' => [
                        'title' => 'Agregar Sección',

                        'fields' => [],
                    ],

                    'note' => [
                        'title' => 'Agregar Nota',

                        'fields' => [],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Información Adicional',

                'fields' => [
                    'buyer'             => 'Comprador',
                    'company'           => 'Compañía',
                    'source-document'   => 'Documento de Origen',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'Los Términos Comerciales Internacionales (Incoterms) son un conjunto de términos estandarizados utilizados en transacciones globales para definir responsabilidades entre compradores y vendedores.',
                    'incoterm-location' => 'Ubicación Incoterm',
                    'payment-term'      => 'Plazo de Pago',
                    'fiscal-position'   => 'Posición Fiscal',
                ],
            ],

            'terms' => [
                'title' => 'Términos y Condiciones',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'         => 'Favorito',
            'priority'         => 'Prioridad',
            'vendor-reference' => 'Referencia del Proveedor',
            'reference'        => 'Referencia',
            'vendor'           => 'Proveedor',
            'buyer'            => 'Comprador',
            'company'          => 'Compañía',
            'order-deadline'   => 'Fecha Límite del Pedido',
            'source-document'  => 'Documento de Origen',
            'untaxed-amount'   => 'Monto Sin Impuestos',
            'total-amount'     => 'Monto Total',
            'status'           => 'Estado',
            'billing-status'   => 'Estado de Facturación',
            'receipt-status'   => 'Estado de Recepción',
            'currency'         => 'Moneda',
        ],

        'groups' => [
            'vendor'     => 'Proveedor',
            'buyer'      => 'Comprador',
            'state'      => 'Estado',
            'created-at' => 'Creado En',
            'updated-at' => 'Actualizado En',
        ],

        'filters' => [
            'status'           => 'Estado',
            'vendor-reference' => 'Referencia del Proveedor',
            'reference'        => 'Referencia',
            'untaxed-amount'   => 'Monto Sin Impuestos',
            'total-amount'     => 'Monto Total',
            'order-deadline'   => 'Fecha Límite del Pedido',
            'vendor'           => 'Proveedor',
            'buyer'            => 'Comprador',
            'company'          => 'Compañía',
            'payment-term'     => 'Plazo de Pago',
            'incoterm'         => 'Incoterm',
            'status'           => 'Estado',
            'created-at'       => 'Creado En',
            'updated-at'       => 'Actualizado En',
        ],

        'actions' => [
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

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Pedidos eliminados',
                        'body'  => 'Los pedidos han sido eliminados exitosamente.',
                    ],

                    'error' => [
                        'title' => 'Los Pedidos no pudieron ser eliminados',
                        'body'  => 'Los pedidos no pueden ser eliminados porque están actualmente en uso.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'entries' => [
                    'purchase-order'           => 'Orden de Compra',
                    'vendor'                   => 'Proveedor',
                    'vendor-reference'         => 'Referencia del Proveedor',
                    'vendor-reference-tooltip' => 'El número de referencia de la orden de venta o licitación proporcionada por el proveedor. Se utiliza para la coincidencia al recibir productos, ya que esta referencia suele estar incluida en la orden de entrega del proveedor.',
                    'agreement'                => 'Acuerdo',
                    'currency'                 => 'Moneda',
                    'confirmation-date'        => 'Fecha de Confirmación',
                    'order-deadline'           => 'Fecha Límite del Pedido',
                    'expected-arrival'         => 'Llegada Esperada',
                    'confirmed-by-vendor'      => 'Confirmado por el Proveedor',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Productos',

                'repeater' => [
                    'products' => [
                        'title'            => 'Productos',
                        'add-product-line' => 'Agregar Producto',

                        'entries' => [
                            'product'             => 'Producto',
                            'expected-arrival'    => 'Llegada Esperada',
                            'quantity'            => 'Cantidad',
                            'received'            => 'Recibido',
                            'billed'              => 'Facturado',
                            'unit'                => 'Unidad',
                            'packaging-qty'       => 'Cantidad de Empaque',
                            'packaging'           => 'Empaque',
                            'taxes'               => 'Impuestos',
                            'discount-percentage' => 'Descuento (%)',
                            'unit-price'          => 'Precio Unitario',
                            'amount'              => 'Monto',
                        ],
                    ],

                    'section' => [
                        'title' => 'Agregar Sección',
                    ],

                    'note' => [
                        'title' => 'Agregar Nota',
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Información Adicional',

                'entries' => [
                    'buyer'             => 'Comprador',
                    'company'           => 'Compañía',
                    'source-document'   => 'Documento de Origen',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'Los Términos Comerciales Internacionales (Incoterms) son un conjunto de términos estandarizados utilizados en transacciones globales para definir responsabilidades entre compradores y vendedores.',
                    'incoterm-location' => 'Ubicación Incoterm',
                    'payment-term'      => 'Plazo de Pago',
                    'fiscal-position'   => 'Posición Fiscal',
                ],
            ],

            'terms' => [
                'title' => 'Términos y Condiciones',
            ],
        ],
    ],
];
