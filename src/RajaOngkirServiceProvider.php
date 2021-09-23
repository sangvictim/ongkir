<?php

namespace tio\RajaOngkir;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class RajaOngkirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/ongkir.php' => config_path('config/ongkir.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('rajaongkir', function () {
            return true;
        });

        App::bind('rajaongkir', function () {
            return new Ongkir;
        });
    }
}
