<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements("idCompra");
            $table->double("total");
            $table->bigInteger('idUsuario')->unsigned();
            $table->bigInteger('idProducto')->unsigned();
            $table->foreign('idUsuario')->references('idUsuario')->on('users');
            $table->foreign('idProducto')->references('idProducto')->on('productos');
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
        Schema::dropIfExists('compra');
    }
}
