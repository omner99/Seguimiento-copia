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
        Schema::create('especificos', function (Blueprint $table) {
            $table->id();
            $table->string('orden');
            $table->string('texto');
            $table->foreignId('proyecto_id')->nullable()->default(null)->constrained('proyectos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especificos');
    }
};
