<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Backend\DashbordController;
use App\Http\Controllers\Backend\FormationController;
use App\Http\Controllers\Backend\FilierController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\Formateur\CourseController;
use App\Http\Controllers\Backend\Formateur\DevoirController;
use App\Http\Controllers\Backend\Formateur\DashbordController as FormateurDashbordController;
use App\Http\Controllers\Backend\StagaireController;
use App\Http\Controllers\Backend\FormateurController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\Stagaire\CourseController as StagaireCourseController;
use App\Http\Controllers\Backend\Stagaire\DashbordController as StagaireDashbordController;
use App\Http\Controllers\Backend\Stagaire\DevoirController as StagaireDevoirController;
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




Route::get('/' , [SiteController ::class , 'index'])->name('front.home');
Route::get('/formation/{id}' , [SiteController ::class , 'formation'])->name('front.filier');
Route::get('/formation/{id}/filier/{f_id}' , [SiteController ::class , 'showFilier'])->name('front.filierDetail');
Route::get('/blog/{id}' , [SiteController ::class , 'blogdetail'])->name('front.blogDetail');
Route::get('/blog' , [SiteController ::class , 'blog'])->name('front.blog');
Route::get('/cantact' , [SiteController ::class , 'cantact'])->name('front.cantact');
Route::get('/notfound' ,function(){
    return view('Front.notFound');
});


Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('/index' , [DashbordController ::class , 'index'])->name('back.home');
    Route::get('/chartStagaire' , [DashbordController ::class , 'chartStagaire'])->name('back.chartStagaire');

    Route::get('/formation', [FormationController::class, 'view'])->name('admin.formation');
    Route::get('/filier', [FilierController::class, 'view'])->name('admin.filier');
    Route::get('/blog', [BlogController::class, 'view'])->name('admin.blog');
    Route::get('/stagaire', [StagaireController::class, 'view'])->name('admin.stagaire');
    Route::get('/formateur', [FormateurController::class, 'view'])->name('admin.formateur');
    Route::get('/module', [ModuleController::class, 'view'])->name('admin.module');
    
});

Route::prefix('formateur')->middleware('auth:formateur')->group(function(){
Route::get('/index' , [FormateurDashbordController ::class , 'view'])->name('back.formateur.home');
Route::get('/course', [CourseController::class, 'index'])->name('back.formateur.course');
Route::get('/note', [CourseController::class, 'index'])->name('back.formateur.note');
Route::get('/devoire', [DevoirController::class, 'index'])->name('back.formateur.devoire');
Route::get('/devoire/{id}', [DevoirController::class, 'show'])->name('back.formateur.devoireDetail');
Route::post('/devoire/store', [DevoirController::class, 'store'])->name('back.formateur.addDevoire');

Route::get('/course/create', [CourseController::class, 'create'])->name('formateur.course.create');
Route::delete('/devoire/{id}', [DevoirController::class, 'delete'])->name('back.formateur.deleteDevoire');
});

Route::middleware('auth:stagaire')->group(function(){
Route::get('/stagaire' , [StagaireDashbordController ::class , 'view'])->name('back.stagaire.home');
Route::get('/stagaire/course' , [StagaireCourseController ::class , 'index'])->name('back.stagaire.course');
Route::get('/stagaire/note' , [StagaireCourseController ::class , 'index'])->name('back.stagaire.note');
Route::get('/stagaire/service' , [StagaireCourseController ::class , 'index'])->name('back.stagaire.service');
Route::get('/stagaire/devoire' , [StagaireDevoirController ::class , 'index'])->name('back.stagaire.devoire');
Route::get('/stagaire/devoire/{id}' , [StagaireDevoirController ::class , 'show'])->name('back.stagaire.devoireShow');
Route::post('/stagaire/devoire/{id}' , [StagaireDevoirController ::class , 'reponseDevoire'])->name('back.stagaire.devoireReponse');
});