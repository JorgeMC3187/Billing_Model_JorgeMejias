<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected  $table = 'tbl_facturas';

    protected $fillable = [       
        'id_factura',
        'id_usuario'
    ];
}
