<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proveedoresController extends Controller
{
    public function proveedores(){
        return view('proveedores');
    }

    public function crearproveedor(){
        return view('crearproveedor');
    }

    public function verproveedores(){
        return view('verproveedores');
    }
}
