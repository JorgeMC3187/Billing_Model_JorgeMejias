<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //devuelve la vista que se le pasa

        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devuelve las vistas
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //hace el guardar en la base de datos
        $request->validate([           
            'cod_producto'=>'required',
            'nombre_producto'=>'required',
            'detalle_producto'=>'required'
        ]);

        
        $producto = new Producto([
            'cod_producto' => $request->get('cod_producto'),
            'nombre_producto' => $request->get('nombre_producto'),
            'detalle_producto' => $request->get('detalle_producto')
        ]);
        $producto->save();
        return redirect('/productos')->with('success', 'Producto guardado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::find($id);
        return view('productos.editar', compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //funcion para actualizar registros
        $request->validate([           
            'cod_producto'=>'required',
            'nombre_producto'=>'required',
            'detalle_producto'=>'required'
        ]);

        $producto = Producto::find($id);
        $producto->cod_producto =  $request->get('cod_producto');
        $producto->nombre_producto = $request->get('nombre_producto');
        $producto->detalle_producto = $request->get('detalle_producto');
        
        $producto->save();

        return redirect('/productos')->with('success', 'Producto Actualizado!');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //funcion que elimina registros de la base de datos

        $producto = Producto::find($id);
        $producto->delete();

        return redirect('/productos')->with('success', 'Articulo Eliminado!');

    }
}
