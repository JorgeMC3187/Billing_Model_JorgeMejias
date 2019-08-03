@extends('plantilla')

@section('main')

<div class="container">    
    <br />
    <h3> FACTURAS POR USUARIO</h3>
    <div>
        <a style="margin: 27px;" href="/facturas" class="btn btn-primary">Volver al atras</a>
    </div> 
    <br />
  <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Cajero</th>
                    <th>Nombre Cajero</th>
                    <th>Total a Facturado</th>

                </tr>
            </thead>
            <tbody>
                @foreach($billsuser as $billUsr)
                    <tr>
                        
                        <td>{{ $billUsr->id }}</td>
                        <td>{{ $billUsr->id_usuario }}</td>
                        <td>{{ $billUsr->name }}</td>
                        <td>{{ $billUsr->preciototal }}</td>
                    </tr>
                @endforeach

       

            </tbody>
        </table>
  </div>
</div>


 @endsection