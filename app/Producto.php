<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = [
        'cod_producto',
        'nombre_producto',
        'detalle_producto',
    ];
}
