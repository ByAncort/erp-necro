<?php

return [
    'inventory-manager' => [
        'check-availability' => [
            'no-moves' => 'Nada para verificar la disponibilidad.',
        ],

        'cancel-move' => [
            'already-done' => 'No puede cancelar un movimiento de stock que ha sido establecido como \'Completado\'. Cree una devolución para revertir los movimientos realizados.',
        ],

        'unreserve-move' => [
            'already-done' => "No puede anular la reserva de un movimiento de stock que ha sido establecido como 'Completado'.",
        ],

        'validate' => [
            'quantity-rounding-mismatch' => 'La cantidad realizada para el producto ":product" no respeta la precisión de redondeo definida en la unidad de medida ":unit". Cambie la cantidad realizada o la precisión de redondeo de su unidad de medida.',
            'no-negative-quantities'     => 'No se permiten cantidades negativas',
            'missing-lot-serial-number'  => "Debe proporcionar un Número de Lote/Serie para el producto:\n:products",
        ],

        'run-procurement' => [
            'no-rule-found'      => "No se ha encontrado ninguna regla para reabastecer \":product\" en \":location\".\nVerifique la configuración de rutas en el producto.",
            'no-source-location' => '¡No hay ubicación de origen definida en la regla de stock: :name!',
            'no-vendor-price'    => 'No hay un precio de proveedor que coincida para generar la orden de compra del producto :product (sin proveedor definido, cantidad mínima no alcanzada, fechas no válidas...). Vaya al formulario del producto y complete la lista de proveedores.',
        ],

        'return' => [
            'origin' => 'Devolución de :operation_name',
        ],
    ],

    'move-line' => [
        'negative-quantity-not-allowed' => 'No se permite reservar una cantidad negativa.',
    ],

    'product-quantity' => [
        'quantity-not-set'                 => 'La cantidad o la cantidad reservada debe estar establecida.',
        'removal-strategy-not-implemented' => 'La estrategia de eliminación :strategy no está implementada.',
        'unreserve-more-than-stock'        => 'No es posible anular la reserva de más productos de :name de los que tiene en stock.',
    ],

    'product' => [
        'endless-loop-rule' => 'Configuración de regla no válida, la siguiente regla causa un bucle infinito: :name',
    ],

    'move' => [
        'quantity-rounding-mismatch' => 'La cantidad realizada para el producto :product no respeta la precisión de redondeo definida en la unidad de medida :unit. Cambie la cantidad realizada o la precisión de redondeo de su unidad de medida.',
        'split-done-or-cancel'       => 'No puede dividir un movimiento de stock que ha sido establecido como \'Completado\' o \'Cancelado\'.',
        'split-draft'                => 'No puede dividir un movimiento en borrador. Primero debe ser confirmado.',
    ],

    'rule' => [
        'delay-on'     => 'Retraso en :name',
        'days'         => '+ :days día(s)',
        'time-horizon' => 'Horizonte de Tiempo',
    ],
];
