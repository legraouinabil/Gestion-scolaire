<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FormationController;

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
