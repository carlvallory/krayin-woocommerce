<?php

namespace CarlVallory\KrayinWoocommerce\Providers;

use Illuminate\Support\ServiceProvider;

class KrayinWoocommerceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // El módulo Webkul\Lead registra el modelo base en su boot() y, por orden de
        // providers, pisa nuestro modelo custom. Registramos en app->booted() para correr
        // DESPUÉS de todos los providers y ganar el binding (preserva created_at = fecha pedido).
        $this->app->booted(function () {
            $this->app->make('concord')->registerModel(
                \Webkul\Lead\Contracts\Lead::class,
                \CarlVallory\KrayinWoocommerce\Models\Lead::class
            );
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
