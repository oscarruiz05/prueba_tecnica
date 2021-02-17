<?php

use App\Http\Controllers\DatosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('home');
Route::post('datos', [DatosController::class, 'store'])->name('store');
Route::get('datos/{datos}', [DatosController::class, 'show'])->name('show');
Route::put('datos/{datos}', [DatosController::class, 'update'])->name('editar');
Route::get('datos/delete/{datos}', [DatosController::class, 'delete'])->name('delete');