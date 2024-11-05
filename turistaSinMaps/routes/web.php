<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

route::get('/',[controladorVistas::class, 'inicio'])->name('rutainicio');
route::get('/vuelos',[controladorVistas::class, 'vuelos'])->name('rutavuelos');
route::get('/hospedajes',[controladorVistas::class, 'hospedajes'])->name('rutahospedajes');

route::get('/sesion',[controladorVistas::class, 'sesion'])->name('rutasesion');
route::get('/registro',[controladorVistas::class, 'registro'])->name('rutaregistro');

route::get('/agregarv',[controladorVistas::class, 'agregarv'])->name('rutaagregarvuelo');