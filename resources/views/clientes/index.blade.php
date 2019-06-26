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
    <h1 class="display-3">Lista Clientes</h1>   
    
    <div>
    <a style="margin: 19px;" href="{{ route('clientes.create')}}" class="btn btn-primary">Nuevo Cliente</a>
    </div>  

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Id</td>
          <td>N° Cedula</td>
          <td>Nombre</td>
          <td>Apellidos</td>
          <td>Correo</td>
          <td>Direccion</td>
          <td>Telefono</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->cedula}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->correo}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>

                <a href="{{ route('clientes.edit',$cliente->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('clientes.destroy', $cliente->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>


@endsection