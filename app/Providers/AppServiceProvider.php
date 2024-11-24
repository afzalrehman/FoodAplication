<?php

namespace App\Providers;

use App;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(\Ladumor\LaravelPwa\PWAServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        App::alias('PWA', \Ladumor\LaravelPwa\Facades\PWA::class);
    }
}
