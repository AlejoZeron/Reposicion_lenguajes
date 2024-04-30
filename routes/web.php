<?php

use App\Http\Controllers\empleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoController;
use App\Http\Controllers\proveedoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/producto', function(){
//    return view('producto');
//});

Route::get('producto', [productoController::class, 'producto']);

Route::get('crearproducto', [productoController::class, 'crearproducto']);

Route::get('verproductos', [productoController::class, 'verproducto']);

Route::get('empleado', [empleadoController::class, 'empleado']);

Route::get('crearempleado', [empleadoController::class, 'crearempleado']);

Route::get('verempleados', [empleadoController::class, 'verempleados']);

Route::get('proveedores', [proveedoresController::class, 'proveedores']);

Route::get('crearproveedor', [proveedoresController::class, 'crearproveedor']);

Route::get('verproveedores', [proveedoresController::class, 'verproveedores']);