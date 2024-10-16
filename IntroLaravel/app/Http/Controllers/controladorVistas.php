<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    public function formulario(){
        return view('formulario');
    }
    
    public function consulta(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){
        // devuelve todo lo que contiene la peticion
        /* return $peticion->all(); */

        // la ruta donde se hizo la peticion
        /* return $peticion->path(); */

        //Devuelve la URL completa de la petición
        /* return $peticion->url(); */

        //
        return $peticion->ip();
    }
}
