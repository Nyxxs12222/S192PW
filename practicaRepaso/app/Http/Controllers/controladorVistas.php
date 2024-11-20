<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function depresion(){
        return view('depresion');
    }
    public function ansiedad(){
        return view('ansiedad');
    }
    public function tdah(){
        return view('tdah');
    }
    public function bipolaridad(){
        return view('bipolaridad');
    }
    public function crearcita(){
        return view('crearcita');
    }

    

}
