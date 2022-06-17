<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilpController;
use App\Http\Controllers\HijoController;
use App\Http\Controllers\PerfilaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ActividadController;

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
Route::resource('perfilp', PerfilpController::class);
Route::resource('perfila', PerfilaController::class);
Route::resource('hijo', HijoController::class);
Route::resource('curso', CursoController::class);
Route::resource('actividad', ActividadController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.main');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
