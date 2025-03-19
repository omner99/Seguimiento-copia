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
        Schema::create('asesores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('correo_electronico');
            $table->string('profesion');
            $table->string('carrera');
            $table->bigInteger('numero_cedula');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesores');
    }
};
