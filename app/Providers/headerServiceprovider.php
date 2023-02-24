<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Formation;
use App\Models\Setting;
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
            $view->with(['formations'=> Formation::select('id', 'name')->get() , 'setting'=> Setting ::select('logo' , 'email' , 'phone' )->first()]);
        });
        view()->composer('Front.partiel.footer' , function($view){
            $view->with(['blogs'=> Blog::select('title', 'image')->orderBy('id' , 'desc')->take(2)->get() , 'setting'=> Setting ::select('facebook' , 'email' , 'phone' , 'adresse' ,'twiter' , 'insta' )->first()]);
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
