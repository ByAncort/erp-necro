# Módulo Ventas (Sales) — Resumen en Español

Este documento describe la implementación y el flujo funcional del módulo de Ventas (sales) dentro del ERP.

## 1. Estructura principal

Ruta base del paquete: `plugins/webkul/sales`

Estructura relevante:

- `routes/api.php` (API REST)
- `src/Models/` (Order, OrderLine, Quotation, Invoice, etc.)
- `src/Enums/` (OrderState, InvoiceStatus, DeliveryStatus, etc.)
- `src/Filament/Clusters/Orders/Resources/` (Recursos Filament para cotizaciones, entregas, facturas)
- `src/SaleManager.php` (lógica de negocio central)
- `src/Http/Controllers/API/V1/` (endpoints REST para órdenes, líneas, entregas, facturas)

## 2. Modelos centrales

1) Order (`sales_orders`)
- Campos clave: `partner_id`, `warehouse_id`, `state`, `invoice_status`, `delivery_status`, `amount_untaxed`, `amount_tax`, `amount_total`, `user_id`, `company_id`, `currency_id`, `payment_term_id`.
- Relaciones: `lines()`, `invoices()`, `operations()` (relación con inventario), `accountMoves()` (relación con contabilidad).
- Casts: `state` -> `OrderState`, `invoice_status` -> `InvoiceStatus`, `delivery_status` -> `OrderDeliveryStatus`.

2) OrderLine (`sales_order_lines`)
- Campos clave: `order_id`, `product_id`, `product_uom_qty`, `price_unit`, `discount`, `qty_delivered`, `qty_invoiced`, `qty_to_invoice`, `warehouse_id`, `route_id`.
- Relaciones: `product()`, `taxes()` (pivot), `inventoryMoves()` (movimientos de stock), `accountMoveLines()` (líneas contables asociadas).

3) Invoice (extiende del módulo accounts)
- Las facturas de venta están representadas por `accounts_account_moves` con `move_type = out_invoice`.
- La entidad `Invoice` en ventas añade relación inversa a `sales_orders` mediante `sales_order_invoices`.

## 3. Enums y estados (resumen)

- OrderState: `draft`, `sent`, `sale` (o `sale`/`confirmed`), `cancel`.
- OrderDeliveryStatus: `no`, `pending`, `partial`, `full`.
- InvoiceStatus: `no`, `to_invoice`, `invoiced`, `up_selling`.
- QtyDeliveredMethod: `manual`, `stock_move`.

## 4. Máquina de estados (flujo de pedido)

Resumen simplificado:

```
draft -> sent -> sale -> (cancel)
```

- `draft`: cotización borrador.
- `sent`: cotización enviada (email).
- `sale`: pedido confirmado (se generan reservaciones/movimientos de inventario).
- `cancel`: pedido cancelado.

Acciones típicas que cambian estados: `sendByEmail()`, `confirmSaleOrder()`, `cancelSaleOrder()`, `backToQuotation()`.

## 5. Lógica de negocio clave (`SaleManager`)

`SaleManager` es el núcleo. Funciones principales:

- `computeSaleOrder(Order $order)`: recalcula totales del pedido (subtotal, impuestos, totales), estado de entrega e facturación.
- `computeSaleOrderLine(OrderLine $line)`: calcula `qty_to_invoice`, `qty_delivered`, importes y aplica impuestos.
- `applyInventoryRules($lines, $previousQty)`: genera procuramientos y movimientos de inventario al confirmar la venta.
- `createInvoice(Order $order, array $data)`: crea la factura de cliente (account move tipo `out_invoice`) y las líneas contables asociadas.

Notas:
- El cálculo de `qty_to_invoice` respeta la política de facturación: por `ORDER` (según cantidad pedida) o por `DELIVERY` (según cantidad entregada).
- Al confirmar un pedido, se llama a `applyInventoryRules()` para crear `ProcurementGroup` y generar movimientos/operaciones.

## 6. Integración con Inventario

- `Order.warehouse_id` y `OrderLine.warehouse_id` determinan dónde se reserva el stock.
- `applyInventoryRules()` genera movimientos de salida (deliveries) y operaciones en `inventories_operations`.
- Cuando una entrega se marca `done`, se actualiza `qty_delivered` en `OrderLine` y se recalcula el pedido (`ComputeSaleOrderListener` escucha eventos de inventario).

## 7. Integración con Contabilidad

- Al crear factura de venta (`createInvoice`), se genera un `Account Move` con `move_type = out_invoice`.
- Las líneas de factura se vinculan a líneas de pedido mediante pivots (`sales_order_line_invoices`).
- Pago y conciliación: `accounts_account_payments`, `accounts_partial_reconciles`, `accounts_full_reconciles`.

## 8. Recursos Filament (UI)

Cluster principal: `Orders` / `Quotations` con acciones comunes:

- Confirmar pedido (ConfirmAction)
- Enviar por email (SendByEmailAction)
- Crear factura desde pedido (CreateInvoiceAction)
- Administrar entregas (ManageDeliveries)
- Administrar facturas/pagos (ManageInvoices)
- Lock/Unlock (bloquear órdenes confirmadas)

Otros recursos: `Products`, `ToInvoice` (pedidos por facturar), `ToUpsell`.

## 9. Endpoints API (resumen)

Base: `/admin/api/v1/sales`

- `GET/POST /orders` — listar/crear órdenes
- `GET/PUT/DELETE /orders/{id}` — ver/editar/eliminar
- `POST /orders/{id}/confirm` — confirmar pedido
- `POST /orders/{id}/cancel` — cancelar pedido
- `GET /orders/{id}/lines` — líneas del pedido
- `GET /orders/{id}/deliveries` — entregas asociadas
- `GET /orders/{id}/invoices` — facturas asociadas

## 10. Eventos y listeners

- `OrderConfirmed` — disparado al confirmar pedido.
- `OrderCanceled` — disparado al cancelar.
- `ComputeSaleOrderListener` — escucha eventos de operación de inventario (`OperationDone`) para recomputar cantidades entregadas.
- `MovePaid` / listeners para notificaciones (SMS/email) cuando una factura se paga.

## 11. Ajustes y políticas importantes

- Política de facturación (`invoice_policy`): `ORDER` o `DELIVERY` — afecta `qty_to_invoice`.
- `enable_lock_confirm_sales`: si se activa, los pedidos confirmados pueden bloquearse contra edición.
- Ajustes de pago, condiciones por cliente (plazo, descuentos por pronto pago).

## 12. Flujo completo resumido (puntos clave)

1. Crear cotización → `draft`.
2. Enviar cotización (`sent`) si aplica.
3. Confirmar cotización → `sale`: genera reservaciones y operaciones de inventario.
4. Preparar y despachar (deliveries) → al completar, `qty_delivered` se actualiza.
5. Crear factura (según política) → `out_invoice` en contabilidad.
6. Registrar cobro → conciliar pagos.

## 13. Archivos/clases a revisar (ubicación)

- `plugins/webkul/sales/src/Models/Order.php`
- `plugins/webkul/sales/src/Models/OrderLine.php`
- `plugins/webkul/sales/src/SaleManager.php`
- `plugins/webkul/sales/src/Filament/Clusters/Orders/Resources/QuotationResource.php`
- `plugins/webkul/sales/routes/api.php`

---

Si quieres, genero un archivo .md en el repositorio con este contenido (lo guardo en `docs/`) o lo adapto a un manual de usuario paso a paso para vendedores en tienda.
