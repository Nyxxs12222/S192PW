<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'inicio')->name('rutainicio');
Route::view('/form', 'formulario')->name('rutaform');
Route::view('/clientes', 'clientes')->name('rutaclientes');

Route::view('/componentes', 'componentes')->name('rutacomponentes');