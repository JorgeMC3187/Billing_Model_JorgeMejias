@extends('plantilla')

@section('main')

<div class="container">    
    <br />
    <h3>FACTURAS POR PRODUCTO</h3>
    <div>
        <a style="margin: 27px;" href="/facturas" class="btn btn-primary">Volver al atras</a>
    </div> 
    <br />
  <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    
                    <th>Código Producto</th>
                    <th>Nombre</th>
                    <th>Detalle</th>
                    <th>Total facturado</th>
                    <th>N° de Factura</th>

                </tr>
            </thead>
            <tbody>
                @foreach($billsprod as $billsproducto)
                    <tr>
                        
                        <td>{{ $billsproducto->cod_producto }}</td>
                        <td>{{ $billsproducto->nombre_producto }}</td>
                        <td>{{ $billsproducto->detalle_producto }}</td>
                        <td>{{ $billsproducto->preciototal }}</td>
                        <td>{{ $billsproducto->id_factura }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
 @endsection
