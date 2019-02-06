<?php

namespace ColoredCow\LaravelMobileAPI;

use ColoredCow\LaravelMobileAPI\Commands\SetupMobileAPI;
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

    public function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SetupMobileAPI::class,
            ]);
        }
    }
}
