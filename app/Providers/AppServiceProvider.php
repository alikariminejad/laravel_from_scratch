<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    //    View::share('users_count', rand( 1000,9999));
    $users_c = rand(0, 1000);
    View::composer(['views.*'], function($view) use($users_c) {
        $view->with('users_count', $users_c);
        $view->with('right_sidebar', view('_partials._right-sidebar', compact('users_c')));
    });
    }
}
