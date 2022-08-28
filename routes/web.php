<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Backend\DashbordController;
use App\Http\Controllers\Backend\FormationController;
use App\Http\Controllers\Backend\FilierController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\Formateur\DashbordController as FormateurDashbordController;
use App\Http\Controllers\Backend\StagaireController;
use App\Http\Controllers\Backend\FormateurController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\Stagaire\DashbordController as StagaireDashbordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/' , [SiteController ::class , 'index'])->name('front.home');
Route::get('/formation/{id}' , [SiteController ::class , 'formation'])->name('front.filier');
Route::get('/formation/{id}/filier/{f_id}' , [SiteController ::class , 'showFilier'])->name('front.filierDetail');
Route::get('/blog/{id}' , [SiteController ::class , 'blogdetail'])->name('front.blogDetail');
Route::get('/blog' , [SiteController ::class , 'blog'])->name('front.blog');
Route::get('/cantact' , [SiteController ::class , 'cantact'])->name('front.cantact');
Route::get('/notfound' ,function(){
    return view('Front.notFound');
});


Route::middleware('auth:admin')->group(function(){
    Route::get('/admin/index' , [DashbordController ::class , 'index'])->name('back.home');


    Route::get('/admin/formation', [FormationController::class, 'view'])->name('admin.formation');
    Route::get('/admin/filier', [FilierController::class, 'view'])->name('admin.filier');
    Route::get('/admin/blog', [BlogController::class, 'view'])->name('admin.blog');
    Route::get('/admin/stagaire', [StagaireController::class, 'view'])->name('admin.stagaire');
    Route::get('/admin/formateur', [FormateurController::class, 'view'])->name('admin.formateur');
    Route::get('/admin/module', [ModuleController::class, 'view'])->name('admin.module');
    
});

Route::middleware('auth:formateur')->group(function(){
Route::get('/formateur/index' , [FormateurDashbordController ::class , 'view'])->name('back.formateur.home');
});

Route::middleware('auth:stagaire')->group(function(){
Route::get('/stagaire/index' , [StagaireDashbordController ::class , 'view'])->name('back.stagaire.home');
});