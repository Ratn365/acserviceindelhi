<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
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
        //
         $jsonPath = public_path('data/client.json');
        $client = [];

        if (File::exists($jsonPath)) {
            $client = json_decode(File::get($jsonPath), true);
        }

        // Share with all Blade views
        View::share('clientData', $client);
    }
}


 
