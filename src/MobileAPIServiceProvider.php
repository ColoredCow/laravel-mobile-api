<?php

namespace ColoredCow\LaravelMobileAPI;

use ColoredCow\LaravelMobileAPI\Commands\SetupMobileAPi;
use Illuminate\Support\ServiceProvider;

class MobileAPIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommands();
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

    public function registerRoutes()
    {

    }

    public function registerPublishes()
    {

    }

    public function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SetupMobileAPi::class,
            ]);
        }
    }

    public function registerProviders()
    {

    }
}
