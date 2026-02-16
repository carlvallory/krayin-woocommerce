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
        // Permitir la asignación masiva de 'created_at' en el modelo Lead para sincronización externa
        if (class_exists(\Webkul\Lead\Models\Lead::class)) {
            \Webkul\Lead\Models\Lead::mergeFillable(['created_at']);
        }
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
