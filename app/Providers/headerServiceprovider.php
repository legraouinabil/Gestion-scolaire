<?php

namespace App\Providers;

use App\Models\Formation;
use Illuminate\Support\ServiceProvider;

class headerServiceprovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('Front.partiel.navbar' , function($view){
            $view->with('formations', Formation::select('id', 'name')->get());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
