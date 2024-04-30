<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empleadoController extends Controller
{
    public function empleado(){
        return view('empleado');
    }

    public function crearempleado(){
        return view('crearempleado');
    }

    public function verempleados(){
        return view('verempleados');
    }
}
