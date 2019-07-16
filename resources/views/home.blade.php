@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Menú del sistema</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="navbar-collapse collapse" id="navbarsExample01" style="">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('productos.index')}}">Registro de Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{ route('usuarios.index')}}">Edición de Usuarios</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link disabled" href="#">facturas</a>
                      </li>
              </ul>
            </div>
          </nav>     
@endsection
