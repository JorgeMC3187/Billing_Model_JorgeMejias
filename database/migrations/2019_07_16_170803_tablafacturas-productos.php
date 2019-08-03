<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablafacturasProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_facturaproducto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_factura')->unsigned();
            $table->bigInteger('cod_producto')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_facturaproducto');
    }
}
