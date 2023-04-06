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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->integer('estado_id');
            $table->char('clave');
            $table->char('nombre');
            $table->integer('activo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('municipios');
    }
};
