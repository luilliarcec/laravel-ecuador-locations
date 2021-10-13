<?php

namespace Luilliarcec\EcuadorLocations;

use Illuminate\Support\ServiceProvider;

class EcuadorLocationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            if (!class_exists('CreateProvinciasTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_provincias_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_provincias_table.php'),
                ], 'migrations');
            }

            if (!class_exists('CreateCantonesTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_cantones_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_cantones_table.php'),
                ], 'migrations');
            }
        }
    }
}
