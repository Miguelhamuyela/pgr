<?php

namespace App\Providers;

use App\Models\Configuration;
use App\Models\Election;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Paginator::useBootstrap();

       /* $response['configuration'] = Configuration::first();
        $response['elections'] = Election::orderBy('date', 'desc')->get();

        view()->share($response);*/
    }
}
