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
        Schema::create('medicamentos',function (Blueprint $table){
            $table->id();
            $table->text('nombre');
            $table->string('descripcion');
            $table->text('tipo');
            //$table->Integer('imagenM');
            $table->timestamps();
            //llaves foraneas
            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('tratamientos_id')->references('idTratamiento')->on('tratamientos');
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
        Schema::dropIfExists('medicamentos');
    }
};
