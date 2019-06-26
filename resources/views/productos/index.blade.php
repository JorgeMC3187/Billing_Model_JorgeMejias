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
    <h1 class="display-3">Lista de Productos</h1>  
    
    <div>
    <a style="margin: 19px;" href="{{ route('productos.create')}}" class="btn btn-primary">Nuevo Producto</a>
    </div>  

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Id</td>
          <td>Código Producto</td>
          <td>Nombre del Producto</td>
          <td>Detalle del Artículo</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->cod_producto}}</td>
            <td>{{$producto->nombre_producto}}</td>
            <td>{{$producto->detalle_producto}}</td>
            <td>
                <a href="{{ route('productos.edit',$producto->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id)}}" method="post">
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