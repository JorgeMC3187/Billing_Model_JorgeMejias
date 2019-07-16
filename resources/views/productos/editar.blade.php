@extends('plantilla') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar Productos</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('productos.update', $producto->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="cod_producto">Código de Producto:</label>
                <input type="text" class="form-control" name="cod_producto" value={{ $producto->cod_producto }} />
            </div>

            <div class="form-group">
                <label for="nombre_producto">Nombre del Producto:</label>
                <input type="text" class="form-control" name="nombre_producto" value={{ $producto->nombre_producto }} />
            </div>

            <div class="form-group">
                <label for="detalle_producto">Detalle del artículo:</label>
                <input type="text" class="form-control" name="detalle_producto" value={{ $producto->detalle_producto }} />
            </div>

            <div class="form-group">
                <label for="precio_producto">Precio del artículo:</label>
                <input type="text" class="form-control" name="precio_producto" value={{ $producto->precio_producto }} />
            </div>

            

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection