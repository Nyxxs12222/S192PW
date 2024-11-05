<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    
    public function inicio(){
        return view('inicio');
    }

    public function vuelos(){
        return view('vuelos');
    }

    public function sesion(){
        return view('sesion');
    }

    public function registro(){
        return view('registro');
    }

    public function hospedajes(){
        return view('hospedajes');
    }

    public function agregarVuelos(){
        return view('agregarVuelos');
    }

    public function agregarHoteles(){
        return view('agregarHoteles');
    }

}
