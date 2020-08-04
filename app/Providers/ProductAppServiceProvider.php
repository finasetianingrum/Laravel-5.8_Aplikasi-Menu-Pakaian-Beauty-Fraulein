<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductAppServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';

        if (request()->segment(1) == 'homepage') {
            $halaman = 'homepage';
        }

        if (request()->segment(1) == 'product') {
            $halaman = 'product';
        }

        if (request()->segment(1) == 'about') {
            $halaman = 'about';
        }

        if (request()->segment(1) == 'brand') {
            $halaman = 'brand';
        }

        if (request()->segment(1) == 'macam') {
            $halaman = 'macam';
        }

        if (request()->segment(1) == 'user') {
            $halaman = 'user';
        }

        view()->share('halaman', $halaman);
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
