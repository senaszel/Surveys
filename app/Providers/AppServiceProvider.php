<?php

namespace App\Providers;

use App\Interfaces\CreateSurveysInterface;
use App\Services\CreateSurveysService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CreateSurveysInterface::class, function () {
            return new CreateSurveysService();
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
