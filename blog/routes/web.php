<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'inicio'])->name("inicio");

Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->name("detalle");

Route::post('/', [PagesController::class, 'crear'])->name("crear");

Route::get('/editar/{id}', [PagesController::class, 'editar'])->name("editar");

Route::put('/editar/{id}', [PagesController::class, 'update'])->name("update");

Route::delete('eliminar/{id}', [PagesController::class, 'eliminar'])->name("eliminar");


Route::get("fotos", [PagesController::class, 'fotos'])->name("fotos");

Route::get("blog", [PagesController::class, 'blog'])->name("blog");

Route::get("nosotros/{nombre?}", [PagesController::class, 'nosotros'])->name("nosotros");

