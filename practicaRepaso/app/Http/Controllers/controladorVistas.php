<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function repaso1(){
        return view('repaso1');
    }

    public function convert(Request $request)
    {
        $unit = $request->input('unit');
        $value = $request->input('value');
        $result = '';

        switch ($unit) {
            case 'MBtoGB':
                $result = $value . ' MB = ' . ($value / 1024) . ' GB';
                break;
            case 'GBtoMB':
                $result = $value . ' GB = ' . ($value * 1024) . ' MB';
                break;
            case 'GBtoTB':
                $result = $value . ' GB = ' . ($value / 1024) . ' TB';
                break;
            case 'TBtoGB':
                $result = $value . ' TB = ' . ($value * 1024) . ' GB';
                break;
            default:
                $result = 'Unidad no válida';
        }

        return view('repaso1', ['result' => $result]);
    }

}
