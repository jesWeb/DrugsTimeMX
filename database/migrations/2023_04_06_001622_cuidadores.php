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
        Schema::create('cuidadores',function (Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->date('fechaN');
            $table->char('sexo');
            $table->string('parentesco',20);
            $table->string('lugarTrabajo');
            $table->string('matricula');
            $table->string('Telefono',12);
            $table->string('email')->unique();
            //llaves fr
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('idCliente')->on('clientes');

            $table->unsignedBigInteger('idTratamiento');
            $table->foreign('idTratamiento')->references('idTratamiento')->on('tratamientos');
            //$table->integer('imagenP');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('cuidadores');
    }
};
