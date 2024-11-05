<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',function(){return view('FormUsuarios');});

route::post('/enviarCliente',[controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');




















