<?php

namespace Codexshaper\Woocommerce;

use Illuminate\Support\ServiceProvider;

class WooCommerceServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->mergeConfigFrom(
            __DIR__.'/config/woocommerce.php', 'laravel-woocommerce'
        );
        $this->publishes([
            __DIR__.'/config/woocommerce.php' => config_path('woocommerce.php'),
        ],'laravel-woocommerce');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
