<?php

namespace Bakr\Smsmisr;

use Illuminate\Support\ServiceProvider;

class SmsmisrServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/smsmisr.php', 'smsmisr');

        $this->app->singleton('smsmisr', function () {
            return new Smsmisr();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/smsmisr.php' => config_path('smsmisr.php'),
        ], 'config');
    }
}
