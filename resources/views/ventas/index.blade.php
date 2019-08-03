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
        <h1 class="display-3">Carrito de compras</h1>  
        
        <div>
            <a style="margin: 27px;" href="/home" class="btn btn-primary">Volver al Menu</a>
        </div> 
      
      <table class="table table-striped">
          <thead>
              <tr>
                <td>Nombre del Producto</td>
                <td>Detalle del Artículo</td>
                <td>Precio del Artículo</td>
                <td>Acciones</td>
              </tr>
          </thead>
          <tbody>
              @foreach($productos as $producto)
              <tr>
                  <td>{{$producto->nombre_producto}}</td>
                  <td>{{$producto->detalle_producto}}</td>
                  <td>{{$producto->precio_producto}}</td>
                  <td>
                      <a href="#" class="btn btn-primary">Agregar al carrito</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
</div>
@endsection