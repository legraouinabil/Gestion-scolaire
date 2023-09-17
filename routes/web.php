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
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Formateur\FormateurProfileController;
use App\Http\Controllers\Backend\Formateur\NoteController;
use App\Http\Controllers\Backend\SettingController;
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
Route::post('/contact', [SiteController::class , 'send'])->name('front.cantact.send');
Route::get('/notfound' ,function(){
    return view('Front.notFound');
});


Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('/index' , [DashbordController ::class , 'index'])->name('back.home');
    Route::get('/chartStagaire' , [DashbordController ::class , 'chartStagaire'])->name('back.chartStagaire');
    Route::get('/profile', [ProfileController::class, 'view'])->name('admin.profile');
    Route::get('/formation', [FormationController::class, 'view'])->name('admin.formation');
    Route::get('/filier', [FilierController::class, 'view'])->name('admin.filier');
    Route::get('/blog', [BlogController::class, 'view'])->name('admin.blog');
    Route::get('/stagaire', [StagaireController::class, 'view'])->name('admin.stagaire');
    Route::get('/formateur', [FormateurController::class, 'view'])->name('admin.formateur');
    Route::get('/module', [ModuleController::class, 'view'])->name('admin.module');
    Route::get('/setting', [SettingController::class, 'view'])->name('admin.setting');
    
});

Route::prefix('formateur')->middleware('auth:formateur')->group(function(){
Route::get('/index' , [FormateurDashbordController ::class , 'view'])->name('back.formateur.home');
Route::get('/course', [CourseController::class, 'index'])->name('back.formateur.course');
Route::post('/note/{sid}', [NoteController::class, 'addNote'])->name('back.formateur.addNote');
Route::get('/note', [NoteController::class, 'index'])->name('back.formateur.note');
Route::get('/note/group/{id}', [NoteController::class, 'create'])->name('back.formateur.createnote');
Route::get('/devoire', [DevoirController::class, 'index'])->name('back.formateur.devoire');
Route::get('/devoire/{id}', [DevoirController::class, 'show'])->name('back.formateur.devoireDetail');
Route::post('/devoire/store', [DevoirController::class, 'store'])->name('back.formateur.addDevoire');
Route::get('/profile/{id}', [FormateurProfileController::class, 'view'])->name('formateur.profile');
Route::put('/profile/{id}', [FormateurProfileController::class, 'update'])->name('formateur.profile.update');
;
Route::put('/profile/update/{id}', [FormateurProfileController::class, 'changePassword'])->name('formateur.password.update');
Route::get('/course/show/{id}', [CourseController::class, 'show'])->name('formateur.course.show');
Route::get('/course/create', [CourseController::class, 'create'])->name('formateur.course.create');
Route::post('/course/store', [CourseController::class, 'store'])->name('formateur.course.store');
Route::delete('/course/delete/{id}', [CourseController::class, 'destroy'])->name('formateur.course.delete');
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