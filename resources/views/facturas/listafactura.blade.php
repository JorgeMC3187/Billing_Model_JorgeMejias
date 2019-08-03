@extends('plantilla')

@section('main')

<div class="container">    
    <br />
    <h3>REPORTE DE FACTURAS</h3>
    <div>
        <a style="margin: 27px;" href="/facturas" class="btn btn-primary">Volver al atras</a>
    </div> 
    <br />
  <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N° de Factura</th>
                    <th>Código Producto</th>
                    <th>ID Cajero</th>
                    <th>Total a Facturar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($bills as $bill)
                    <tr>
                        
                        <td>{{ $bill->id_factura }}</td>
                        <td>{{ $bill->cod_producto }}</td>
                        <td>{{ $bill->id_user }}</td>
                        <td>{{ $bill->preciototal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>

   

 @endsection