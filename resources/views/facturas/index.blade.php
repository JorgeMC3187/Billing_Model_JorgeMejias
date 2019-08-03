@extends('plantilla')

@section('main')

<h1>REPORTE DE FACTURAS</h1>
  <br/>
    <div>
        <a style="margin: 27px;" href="/home" class="btn btn-primary">Volver al Menú</a>
    </div> 
  <br/>
    <div class="jumbotron">
        <h3>
           Ver todas Facturas
        </h3>
        <p> Muestra la lista de todas las Facturas del Sistema</p>
        <a href="/facturas/listafactura" class="btn btn-primary">Ir</a>
        
      </div>
      <br/>
      <div class="jumbotron">
          <h3>
             Facturas por usuario
          </h3>
          <p> Muestra la lista de todas las Facturas generadas por un Usuario</p>
          <a href="/facturas/usuariosfactura" class="btn btn-primary">Ir</a>
        </div>
        <br/>
        <div class="jumbotron">
            <h3>
               Ver  Facturas por Producto
            </h3>
            <p> Muestra la lista de todas las Facturas por tipo de Producto vendido</p>
            <a href="/facturas/productosfactura" class="btn btn-primary">Ir</a>
          </div>
          <br/>

@endsection