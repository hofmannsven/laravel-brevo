<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo;

use Illuminate\Support\ServiceProvider;

class BrevoServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /*
         * Publish the config file:
         * php artisan vendor:publish --provider="Hofmannsven\Brevo\BrevoServiceProvider"
         */
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/brevo.php' => config_path('brevo.php'),
            ], 'brevo.config');
        }
    }

    public function register(): void
    {
        // Automatically apply the package configuration.
        $this->mergeConfigFrom(__DIR__.'/../config/brevo.php', 'brevo');

        // Bind the service to the container.
        $this->app->singleton('brevo', fn () => new Brevo());
    }
}
