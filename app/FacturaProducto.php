<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaProducto extends Model
{
    //
    protected  $table = 'tbl_facturaproducto';
    
    protected $fillable = [
        'id_factura',
        'cod_producto'
    ];
}
