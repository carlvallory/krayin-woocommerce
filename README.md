# Krayin WooCommerce Integration

Este paquete proporciona utilidades y ajustes necesarios para la integración correcta entre WooCommerce y Krayin CRM.

## Características

### 1. Sincronización de Fechas Históricas (Backdating)
Permite la asignación masiva del atributo `created_at` en el modelo `Lead` de Krayin. Esto es esencial para que los pedidos sincronizados desde WooCommerce mantengan su fecha original de creación, en lugar de la fecha de sincronización.

El paquete utiliza un ServiceProvider para "desproteger" dinámicamente el campo `created_at` sin necesidad de modificar el núcleo de Krayin.

## Instalación

1.  Asegúrate de que el paquete esté en la carpeta `packages/CarlVallory/KrayinWoocommerce`.
2.  Registra el repositorio local en tu `composer.json` raíz (si no usas Packagist):

```json
"repositories": [
    {
        "type": "path",
        "url": "packages/CarlVallory/KrayinWoocommerce"
    }
]
```

3.  Instala el paquete:

```bash
composer require carlvallory/krayin-woocommerce
```

## Uso

Una vez instalado, el paquete funciona automáticamente a través de su ServiceProvider. No requiere configuración adicional.
