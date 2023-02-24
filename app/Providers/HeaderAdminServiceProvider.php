<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class HeaderAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('Back.Admin.layouts.master' , function($view){
            $view->with(['admin'=> Admin::find(auth()->id()) , 'setting'=> Setting::select('logo')->first()] );
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
