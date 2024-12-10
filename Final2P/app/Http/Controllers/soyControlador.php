<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm;

class soyControlador extends Controller
{
    public function inicio()
    {
        return view('principal');
    }

    public function lista()
    {
        return view('ListadoContactos');
    }

    public function formulario()
    {
        return view('formularioContacto');
    }

    public function store(validadorForm $request)
    {
        session()->flash('exito','Se registro exitosamente el contacto');
        return to_route('rutaForm');
    }
}