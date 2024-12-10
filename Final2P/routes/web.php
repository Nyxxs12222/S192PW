<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\soyControlador;

route::get('/',[soyControlador::class, 'inicio'])->name('rutaInicio');
route::get('/list',[soyControlador::class, 'lista'])->name('rutaList');
route::get('/form',[soyControlador::class, 'formulario'])->name('rutaForm');
route::post('/sendForm',[soyControlador::class, 'store'])->name('sendForm');
