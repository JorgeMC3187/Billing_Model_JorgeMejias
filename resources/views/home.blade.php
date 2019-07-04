@extends('layouts.app')

@section('content')



<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mi Dashboard</div>

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado Sesión!
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
  <h2>Nuestro Menú de opciones</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1">Clientes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu2">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu3">Facturas</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>INICIO</h3>
      <p>Página inicial de nuestro sitio con información de interés</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Clientes</h3>
      <p>En esta sección podrá visualizar la lista de clientes, agregar editar o eliminar sus registros</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Productos</h3>
      <p>En esta sección podrá visualizar la lista de productos, agregar editar o eliminar sus registros</p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Facturas</h3>
      <p>En esta sección podrá visualizar los registros dela tabla de facturación, en construcción</p>
    </div>
  </div>
</div>

@endsection
