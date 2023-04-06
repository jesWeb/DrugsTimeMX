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
        Schema::create('tratamientos',function (Blueprint $table){
            $table->id('idTratamiento');
            $table->string('nombre');
            $table->integer('dosis');
            $table->time('horario');
            $table->string('dias');
            $table->timestamps();
            $table->softDeletes();
            //llave foranea
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('idCliente')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tratamientos');
    }
};
