<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

route::get('/depresion',[controladorVistas::class, 'depresion'])->name('rutadepresion');
route::get('/ansiedad',[controladorVistas::class, 'ansiedad'])->name('rutaansiedad');
route::get('/tdah',[controladorVistas::class, 'tdah'])->name('rutatdah');
route::get('/bipolaridad',[controladorVistas::class, 'bipolaridad'])->name('rutabipolaridad');
route::get('/crearcita',[controladorVistas::class, 'crearcita'])->name('rutacrearcita');