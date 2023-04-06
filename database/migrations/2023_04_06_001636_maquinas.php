<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('maquinas', function (Blueprint $table)  {
            $table->id();
            $table->string('nombre');
            $table->string('Modelo');
            $table->string('Humedad');
            $table->timestamps();
             //llave foranea
             $table->unsignedBigInteger('idCliente');
             $table->foreign('idCliente')->references('idCliente')->on('clientes');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('maquinas');
    }
};
