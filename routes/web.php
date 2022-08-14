<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Backend\DashbordController;
use App\Http\Controllers\Backend\FormationController;

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



Route::get('/admin/index' , [DashbordController ::class , 'index'])->name('back.home');
Route::get('/admin/formation' , [FormationController ::class , 'index'])->name('back.formation');
Route::get('/admin/formation/list' , [FormationController ::class , 'getFormation'])->name('back.formation.list');