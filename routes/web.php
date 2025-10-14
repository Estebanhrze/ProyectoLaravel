<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;



Route::get('/', function () {
    return redirect()->route('proyectos.index');
});

Route::resource('proyectos', ProyectosController::class);

Route::resource('proyectos', App\Http\Controllers\ProyectosController::class);

