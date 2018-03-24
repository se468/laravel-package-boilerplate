<?php
namespace se468\PackageBoilerplate; //Change namespace here

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider //Change class name here
{
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__."/routes/web.php");

        // Change PackageBoilerplate to your package name
        $this->loadViewsFrom(__DIR__."/resources/views", "PackageBoilerplate"); 

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        //Change vendor path to your package name
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/se468/laravel-package-boilderplate'), 
        ], 'public');
    }

    public function register()
    {

    }
}
