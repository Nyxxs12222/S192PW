<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;

use App\Http\Controllers\clienteController;

//controlador vistas

route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');

route::get('/clientes',[controladorVistas::class, 'consulta'])->name('rutaclientes');

Route::view('/componentes', 'componentes')->name('rutacomponentes'); 

route::post('/enviarCliente',[controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

//cotrollador cliente

route::get('/cliente/create',[clienteController::class,'create'])->name('rutaform');

route::post('/cliente',[clienteController::class,'store'])->name('enviaCliente');

