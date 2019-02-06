<?php

namespace ColoredCow\LaravelMobileAPI\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupMobileAPI extends Command
{
    protected $signature = 'mobile-api:setup';
    protected $description = 'Setup MobileAPI';

    public function handle()
    {
        Artisan::call('passport:install');
    }
}
