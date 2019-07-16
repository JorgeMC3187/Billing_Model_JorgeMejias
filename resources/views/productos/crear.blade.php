@extends('plantilla')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar Productos</h1>
  <div>
      <div class="d-flex flex-row-reverse">
          <a href="{{ route('productos.index')}}" class="btn btn-primary">Volver a la lista de productos</a>
        </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('productos.store') }}">
          @csrf
          <div class="form-group">    
              <label for="cod_producto">Código del Producto:</label>
              <input type="text" class="form-control" name="cod_producto"/>
          </div>

          <div class="form-group">
              <label for="nombre_producto">Nombre del Producto:</label>
              <input type="text" class="form-control" name="nombre_producto"/>
          </div>

          <div class="form-group">
              <label for="detalle_producto">Detalle del Artículo:</label>
              <input type="text" class="form-control" name="detalle_producto"/>
          </div>

          <div class="form-group">
            <label for="precio_producto">Precio del Artículo:</label>
            <input type="text" class="form-control" name="precio_producto"/>
        </div>
                               
          <button type="submit" class="btn btn-primary">Registrar Producto</button>
      </form>
  </div>
</div>
</div>

@endsection
