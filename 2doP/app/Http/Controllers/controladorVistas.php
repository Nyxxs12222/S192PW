<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorP;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function procesarCliente(validadorP $peticionValidada){

        $usuario = $peticionValidada->input('txtcorreo');

        session()->flash('exito','se guardo el correo '.$usuario);

        return view('formUsuarios');
    }

}