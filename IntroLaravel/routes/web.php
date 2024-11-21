<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;

use App\Http\Controllers\clienteController;

//controlador vistas

route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');

Route::view('/componentes', 'componentes')->name('rutacomponentes'); 

route::post('/enviarCliente',[controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

//cotrollador cliente

route::get('/cliente/create',[clienteController::class,'create'])->name('rutaform');

route::post('/cliente',[clienteController::class,'store'])->name('enviaCliente');

route::get('/cliente',[clienteController::class, 'index'])->name('rutaclientes');

//acciones BD

Route::get('/cliente/{id}', [clienteController::class, 'edit'])->name('editarCliente');

Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('actualizarCliente');

Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('eliminarCliente');
