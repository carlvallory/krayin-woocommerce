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
        // Registrar el modelo personalizado para permitir 'created_at' en mass assignment
        $concord = $this->app->make('concord');
        $concord->registerModel(\Webkul\Lead\Contracts\Lead::class, \CarlVallory\KrayinWoocommerce\Models\Lead::class);
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
