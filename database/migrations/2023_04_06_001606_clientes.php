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
        Schema::create('clientes',function (Blueprint $table){
            $table->id('idCliente');
            $table->string('nombre')->nullable();
            $table->date('fechaN')->nullable();
            $table->char('sexo')->nullable();
            $table->integer('peso')->nullable();
            $table->char('alergias')->nullable();
            $table->string('enfermedades')->nullable();
            $table->string('telefono')->nullable();
            $table->integer('imagenU')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
             //llave foranea
            //type user
            $table->unsignedBigInteger('idTUsuario')->nullable();
            $table->foreign('idTUsuario')->references('idTUsuario')->on('tiposUsuarios');

            $table->unsignedBigInteger('idEstado')->nullable();
            $table->foreign('idEstado')->references('idEstados')->on('estados');
            //municipios
            $table->unsignedBigInteger('idMunicipio')->nullable();
            $table->foreign('idMunicipio')->references('id')->on('municipios');
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
