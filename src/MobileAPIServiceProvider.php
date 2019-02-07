<?php

namespace ColoredCow\LaravelMobileAPI;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class MobileAPIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::routes();
    }

    /**
     * Register services.
     *
     * @return void
     */
}
