<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;

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

Route::get('/', function () {
    return view('menu');
});

Route::get('listprofesores', [ProfesorController::class,'listprofesores'])->name('listprofesores');
Route::get('crearprofesores', [ProfesorController::class,'crearprofesores'])->name('crearprofesores');
Route::post('guardarprofesor', [ProfesorController::class,'guardarprofesor'])->name('guardarprofesor');
Route::get('actualizarprofesor/{idp}', [ProfesorController::class,'actualizarprofesor'])->name('actualizarprofesor');
Route::post('guardarcambio', [ProfesorController::class,'guardarcambio'])->name('guardarcambio');
Route::get('borrarprofesor/{idp}', [ProfesorController::class,'borrarprofesor'])->name('borrarprofesor');

