<?php

namespace App\Helpers\Flash;

use Carbon\Laravel\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('flash', function ()
        {
            return $this->app->make('App\Helpers\Flash\NotificadorFlash');
        });
    }
}
