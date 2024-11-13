<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    
    public function consulta(){
        return view('clientes');
    }

}