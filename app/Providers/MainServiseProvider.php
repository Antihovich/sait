<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use App\Providers\ViewComposers\SizeComposer;

class MainServiseProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		View::composer('*','App\Providers\ViewComposers\SizeComposer');
		View::composer('layouts.base', 'App\Providers\ViewComposers\CookieComposer');
      
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
