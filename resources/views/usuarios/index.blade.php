@extends('plantilla')

@section('main')

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de Usuarios</h1>  
    
    <div>
        <a style="margin: 27px;" href="/home" class="btn btn-primary">volver al Menu</a>
    </div> 
   
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Id</td>
          <td>Nombre de usuario</td>
          <td>Correo usuario</td>
          <td>Contraseña</td>
          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->password}}</td>
            <td>
                <a href="{{ route('usuarios.edit',$usuario->id)}}" class="btn btn-primary d-flex flex-row-reverse">Editar</a>
            </td>
            <td>
                <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection