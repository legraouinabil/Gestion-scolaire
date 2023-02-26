<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FormationController;
use App\Http\Controllers\Backend\FilierController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\Formateur\CourseController;
use App\Http\Controllers\Backend\FormateurController;
use App\Http\Controllers\Backend\StagaireController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SettingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/admin/formation/index', [FormationController::class, 'index'])->name('admin.formation.index');
Route::get('/admin/formation/create', [FormationController::class, 'create'])->name('admin.formation.create');
Route::post('/admin/formation/store', [FormationController::class, 'store'])->name('admin.formation.store');
Route::delete('/admin/formation/delete/{id}', [FormationController::class, 'destroy'])->name('admin.formation.delete');
Route::put('/admin/formation/update/{f_id}', [FormationController::class, 'update'])->name('admin.formation.update');
Route::get('/admin/res-search', [FormationController::class, 'search']);



Route::get('/admin/filier/index', [FilierController::class, 'index'])->name('admin.filier.index');
Route::get('/admin/filier/create', [FilierController::class, 'create'])->name('admin.filier.create');
Route::post('/admin/filier/store', [FilierController::class, 'store'])->name('admin.filier.store');
Route::delete('/admin/filier/delete/{id}', [FilierController::class, 'destroy'])->name('admin.filier.delete');
Route::post('/admin/filier/update/{id}', [FilierController::class, 'update'])->name('admin.filier.update');


Route::get('/admin/blog/index', [BlogController::class, 'index'])->name('admin.blog.index');
Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');
Route::post('/admin/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');

Route::get('/admin/formateur/index', [FormateurController::class, 'index'])->name('admin.formateur.index');
Route::get('/admin/formateur/create', [FormateurController::class, 'create'])->name('admin.formateur.create');
Route::post('/admin/formateur/store', [FormateurController::class, 'store'])->name('admin.formateur.store');
Route::delete('/admin/formateur/delete/{id}', [FormateurController::class, 'destroy'])->name('admin.formateur.delete');
Route::post('/admin/formateur/update/{id}', [FormateurController::class, 'update'])->name('admin.formateur.update');
Route::get('/admin/formateur/getfilier/{id}', [FormateurController::class, 'droopDownfilier'])->name('admin.formateur.update');

Route::get('/admin/stagaire/index', [StagaireController::class, 'index'])->name('admin.stagaire.index');
Route::get('/admin/stagaire/create', [StagaireController::class, 'create'])->name('admin.stagaire.create');
Route::post('/admin/stagaire/store', [StagaireController::class, 'store'])->name('admin.stagaire.store');
Route::delete('/admin/stagaire/delete/{id}', [StagaireController::class, 'destroy'])->name('admin.stagaire.delete');
Route::post('/admin/stagaire/update/{id}', [StagaireController::class, 'update'])->name('admin.stagaire.update');
Route::get('/admin/stagaire/getfilier/{id}', [StagaireController::class, 'droopDownfilier'])->name('admin.stagaire.update');

Route::get('/admin/module/index', [ModuleController::class, 'index'])->name('admin.module.index');
Route::get('/admin/module/create', [ModuleController::class, 'create'])->name('admin.module.create');
Route::post('/admin/module/store', [ModuleController::class, 'store'])->name('admin.module.store');
Route::delete('/admin/module/delete/{id}', [ModuleController::class, 'destroy'])->name('admin.module.delete');
Route::put('/admin/module/update/{id}', [ModuleController::class, 'update'])->name('admin.module.update');


Route::get('/admin/module/getfilier/{id}', [FormateurController::class, 'droopDownfilier']);


//Route Formateur


Route::get('/formateur/course/index', [CourseController::class, 'index'])->name('formateur.course.index');
Route::get('/formateur/course/create', [CourseController::class, 'create'])->name('formateur.course.create');
Route::post('/formateur/course/store', [CourseController::class, 'store'])->name('formateur.course.store');
Route::delete('/formateur/course/delete/{id}', [CourseController::class, 'destroy'])->name('formateur.course.delete');
Route::put('/formateur/course/update/{id}', [CourseController::class, 'update'])->name('formateur.course.update');


//edit profile route
Route::get('/admin/profile/{id}', [ProfileController::class, 'edit'])->name('admin.profile.edit');
Route::post('/admin/profile/update/{id}', [ProfileController::class, 'update'])->name('admin.profile.update');
Route::post('/admin/profile/changepassword/{id}', [ProfileController::class, 'changepassword'])->name('admin.profile.changepassword');


//setting of weeb sssite
Route::get('/admin/setting', [SettingController::class, 'index'])->name('admin.setting');
Route::post('/admin/setting/{id}', [SettingController::class, 'update'])->name('admin.setting.update');



