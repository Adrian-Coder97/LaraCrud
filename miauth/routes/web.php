<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

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
    return view('welcome');
});

Auth::routes();

Route::resource('notas', NotaController::class);

Route::get('editar/{id}', [NotaController::class, 'editar'])->name('editar');; 

Route::put('/editar/{id}', [NotaController::class, 'update'])->name("update");

Route::delete('eliminar/{id}', [NotaController::class, 'eliminar'])->name("eliminar");


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
