<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'principal')->name('rutaInicio');
Route::view('/form', 'formularioContacto')->name('rutaForm');
Route::view('/list', 'ListadoContactos')->name('rutaList');