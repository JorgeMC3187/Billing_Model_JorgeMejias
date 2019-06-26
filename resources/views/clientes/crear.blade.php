@extends('plantilla')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar Clientes</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('clientes.store') }}">
          @csrf
          <div class="form-group">
              <label for="cedula">Numero de Cedula:</label>
              <input type="text" class="form-control" name="cedula"/>
          </div>
          <div class="form-group">    
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>

          <div class="form-group">
              <label for="apellido">Apellidos:</label>
              <input type="text" class="form-control" name="apellido"/>
          </div>

          <div class="form-group">
              <label for="correo">Correo Electrónico:</label>
              <input type="text" class="form-control" name="correo"/>
          </div>
          <div class="form-group">
              <label for="direccion">Dirección:</label>
              <input type="text" class="form-control" name="direccion"/>
          </div>
          <div class="form-group">
              <label for="telefono">Número de Teléfono:</label>
              <input type="text" class="form-control" name="telefono"/>
          </div>                     
          <button type="submit" class="btn btn-primary-outline">Registrar Cliente</button>
      </form>
  </div>
</div>
</div>
@endsection
