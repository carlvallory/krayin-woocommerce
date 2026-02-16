# Krayin WooCommerce Integration

Este paquete proporciona utilidades y ajustes necesarios para la integración correcta entre WooCommerce y Krayin CRM.

## Características

### 1. Sincronización de Fechas Históricas (Backdating)
Permite la asignación masiva del atributo `created_at` en el modelo `Lead` de Krayin. Esto es esencial para que los pedidos sincronizados desde WooCommerce mantengan su fecha original de creación, en lugar de la fecha de sincronización.

El paquete utiliza un modelo personalizado (`CarlVallory\KrayinWoocommerce\Models\Lead`) que extiende el modelo base de Krayin y añade `created_at` a la lista de atributos permitidos (`$fillable`).

Se registra automáticamente mediante Concord en el ServiceProvider, sustituyendo al modelo original de forma transparente.

## Instalación

1.  Asegúrate de que el paquete esté en la carpeta `packages/CarlVallory/KrayinWoocommerce`.
2.  Registra el repositorio local en tu `composer.json` raíz (si no usas Packagist):

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/carlvallory/krayin-woocommerce"
    }
]
```

3.  Instala el paquete:

```bash
composer require carlvallory/krayin-woocommerce
```

## Uso

Una vez instalado, el paquete funciona automáticamente a través de su ServiceProvider. No requiere configuración adicional.
