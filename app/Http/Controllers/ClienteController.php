<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna la vista que se le indica

        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devuelve las vistas
        return view('clientes.crear');
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
            'cedula'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required',
            'direccion'=>'required',
            'telefono'=>'required' 
        ]);

        $cliente = new Cliente([
            'cedula' => $request->get('cedula'),
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'correo' => $request->get('correo'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono')
        ]);
        $cliente->save();
        return redirect('/clientes')->with('success', 'Cliente Registrado!');


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
        $cliente = Cliente::find($id);
        return view('clientes.editar', compact('clientes'));  

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
                'cedula'=>'required',
                'nombre'=>'required',
                'apellido'=>'required',
                'correo'=>'required',
                'direccion'=>'required',
                'telefono'=>'required' 
            ]);
    
            $cliente = Cliente::find($id);
            $cliente->cedula =  $request->get('cedula');
            $cliente->nombre = $request->get('nombre');
            $cliente->apellido = $request->get('apellido');
            $cliente->correo = $request->get('correo');
            $cliente->direccion = $request->get('direccion');
            $cliente->telefono = $request->get('telefono');
            $cliente->save();
    
            return redirect('/clientes')->with('success', 'Cliente Actualizado!');
        
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

        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes')->with('success', 'Cliente Eliminado!');

    }
}
