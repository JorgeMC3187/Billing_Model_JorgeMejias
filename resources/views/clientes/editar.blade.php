@extends('plantilla') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar un Cliente</h1>

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
        <form method="post" action="{{ route('clientes.update', $cliente->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="cedula">Número de Cédula:</label>
                <input type="text" class="form-control" name="cedula" value={{ $cliente->cedula }} />
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value={{ $cliente->nombre }} />
            </div>

            <div class="form-group">
                <label for="apellido">Apellidos:</label>
                <input type="text" class="form-control" name="apellido" value={{ $cliente->apellido }} />
            </div>
            <div class="form-group">
                <label for="correo">Correo Electronico:</label>
                <input type="text" class="form-control" name="correo" value={{ $cliente->correo }} />
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" value={{ $cliente->direccion }} />
            </div>
            <div class="form-group">
                <label for="telefono">Número de Teléfono:</label>
                <input type="text" class="form-control" name="telefono" value={{ $cliente->telefono }} />
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection