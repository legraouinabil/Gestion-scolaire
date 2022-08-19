<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FormationController;
use App\Http\Controllers\Backend\FilierController;
use App\Http\Controllers\Backend\BlogController;
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



Route::get('/admin/filier/index', [FilierController::class, 'index'])->name('admin.filier.index');
Route::get('/admin/filier/create', [FilierController::class, 'create'])->name('admin.filier.create');
Route::post('/admin/filier/store', [FilierController::class, 'store'])->name('admin.filier.store');
Route::delete('/admin/filier/delete/{id}', [FilierController::class, 'destroy'])->name('admin.filier.delete');
Route::put('/admin/filier/update/{f_id}', [FilierController::class, 'update'])->name('admin.filier.update');


Route::get('/admin/blog/index', [BlogController::class, 'index'])->name('admin.blog.index');
Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');
Route::put('/admin/blog/update/{f_id}', [BlogController::class, 'update'])->name('admin.blog.update');

Route::get('/admin/formateur/index', [FormateurController::class, 'index'])->name('admin.formateur.index');
Route::get('/admin/formateur/create', [FormateurController::class, 'create'])->name('admin.formateur.create');
Route::post('/admin/formateur/store', [FormateurController::class, 'store'])->name('admin.formateur.store');
Route::delete('/admin/formateur/delete/{id}', [FormateurController::class, 'destroy'])->name('admin.formateur.delete');
Route::put('/admin/formateur/update/{f_id}', [FormateurController::class, 'update'])->name('admin.formateur.update');

Route::get('/admin/stagaire/index', [StagaireController::class, 'index'])->name('admin.stagaire.index');
Route::get('/admin/stagaire/create', [StagaireController::class, 'create'])->name('admin.stagaire.create');
Route::post('/admin/stagaire/store', [StagaireController::class, 'store'])->name('admin.stagaire.store');
Route::delete('/admin/stagaire/delete/{id}', [StagaireController::class, 'destroy'])->name('admin.stagaire.delete');
Route::put('/admin/stagaire/update/{f_id}', [StagaireController::class, 'update'])->name('admin.stagaire.update');
