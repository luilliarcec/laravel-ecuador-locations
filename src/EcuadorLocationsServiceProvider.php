<?php

namespace Luilliarcec\EcuadorLocations;

use Illuminate\Support\ServiceProvider;

class EcuadorLocationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            if (! class_exists('CreateEcuadorLocationTables')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_ecuador_location_tables.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_ecuador_location_tables.php'),
                ], 'migrations');
            }
        }
    }
}
