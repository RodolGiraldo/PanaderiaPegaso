<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('nombreCliente');
            $table->string('apellidoCliente');
            $table->string('telefonoCliente');
            $table->string('generoCliente');
            $table->unsignedBigInteger('idTipoIdentificacion');
            $table->id('cedulaCliente');
            $table->string('emailCliente')->unique();
            $table->string('passwordCliente');
            $table->foreign('idTipoIdentificacion')->references('idTipoIdentificacion')->on('tipo_identificacions');
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
        Schema::dropIfExists('clientes');
    }
}
