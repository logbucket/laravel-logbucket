<?php

namespace LogBucket\LaravelLogBucket;

use Illuminate\Support\ServiceProvider;

class LaravelLogBucketServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-logbucket');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-logbucket');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . "/../config/config.php" => config_path(
                        "laravel-logbucket.php"
                    ),
                ],
                "config"
            );

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-logbucket'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-logbucket'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-logbucket'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(
            __DIR__ . "/../config/config.php",
            "laravel-logbucket"
        );

        // Register the main class to use with the facade
        $this->app->singleton("LogBucketDriver", function () {
            return new LogBucketDriver();
        });
    }
}
