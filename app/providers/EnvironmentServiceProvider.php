<?php

namespace App\Providers;

use App\Http\Controllers\EnvironmentController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class EnvironmentServiceProvider extends ServiceProvider //implements DeferrableProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //echo 1;
        $this->app->singleton('environment', function () {
            return new EnvironmentController();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}