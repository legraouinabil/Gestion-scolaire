<?php

namespace App\Providers;

use App\Models\Formateur;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class HeaderFormateurProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('Back.Formateur.layouts.master' , function($view){
            $view->with(['formateur'=> Formateur::find(auth()->id()) , 'setting'=> Setting::select('logo')->first()] );
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
