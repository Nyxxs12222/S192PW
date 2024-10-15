

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
route::get('/form.',[controladorVistas::class, 'formulario'])->name('rutaform');
route::get('/clientes',[controladorVistas::class, 'consulta'])->name('rutaclientes');

/* Route::get('/', function () {
    return view('welcome');
}); *//* 

Route::view('/', 'inicio')->name('rutainicio');
Route::view('/form', 'formulario')->name('rutaform');
Route::view('/clientes', 'clientes')->name('rutaclientes');

Route::view('/componentes', 'componentes')->name('rutacomponentes'); */

Route::view('/componentes', 'componentes')->name('rutacomponentes'); 

route::post('/enviarCliente',[controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');
/* Nueva ruta para el envio de formulario */

