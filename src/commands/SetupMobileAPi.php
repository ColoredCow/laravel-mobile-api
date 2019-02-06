<?php

namespace ColoredCow\LaravelMobileAPI\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupMobileAPi extends Command
{
    protected $signature = 'mobileApi:setup';
    protected $description = 'Setup mobileApi';

    public function handle()
    {
        Artisan::call('passport:install');
    }
}
