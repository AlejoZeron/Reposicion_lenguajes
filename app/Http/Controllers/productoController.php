<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class productoController extends Controller
{
    public function producto(){
        return view('producto');
    }

    public function crearproducto(){
        return view('crearproducto');
    }

    public function verproducto(){
        return view('verproductos');
    }
}
