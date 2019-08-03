<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Producto;
class VentasController extends Controller
{
    //

    public function index()
    {
        $productos = Producto::all();

        return view('ventas.index', compact('productos'));
    }

    public function sumaFactura()
    {

        
    }

    public function cajero()
    {

    }

}
