<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsuarioController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = User::all();

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $usuario)
    {
        //
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([     
            'id_usuario'=>'required',      
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $usuario = new User([
            'id_usuario' => $request->get('id_usuario'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        $usuario->save();
        return redirect('/usuarios')->with('success', 'Usuario guardado!');
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
        $usuario = User::find($id);
        return view('usuarios.editar', compact('usuario'));
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
        //
        $request->validate([ 
            'id_usuario'=>'required',          
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $usuario = User::find($id);
        $usuario ->id_usuario =  $request->get('id_usuario');
        $usuario ->name =  $request->get('name');
        $usuario ->email = $request->get('email');
        $usuario->password = $request->get('password');
        
        $usuario ->save();

        return redirect('/usuarios')->with('success', 'Usuario Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = User::find($id);
        $usuario->delete();

        return redirect('/usuarios')->with('success', 'Usuario Eliminado!');
    }
}
