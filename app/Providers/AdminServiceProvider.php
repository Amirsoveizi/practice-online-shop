<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('admin.partials.sidebar', function ($view) {
            if(Auth::check()) {
                $view->with('name', Auth::user()->name);
            }else {
                $view->with('name', "Guest");
            }
        });
    }
}
