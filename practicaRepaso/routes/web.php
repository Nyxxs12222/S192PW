<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
route::get('/repaso1',[controladorVistas::class, 'repaso1'])->name('rutarepaso1');

Route::post('/convert', [controladorVistas::class, 'convert'])->name('convert');