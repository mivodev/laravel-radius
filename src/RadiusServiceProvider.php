<?php

namespace Mivo\LaravelRadius;

use Illuminate\Support\ServiceProvider;

class RadiusServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/radius.php', 'radius'
        );

        $this->app->singleton('radius', function ($app) {
            return new RadiusManager($app);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/radius.php' => config_path('radius.php'),
            ], 'radius-config');
        }
    }
}
