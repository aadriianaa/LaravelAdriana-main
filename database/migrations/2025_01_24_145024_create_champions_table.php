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
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del campeón
            $table->string('role'); // Rol del campeón
            $table->string('lane'); // Línea o posición (Mid, ADC, Jungle, Supp, Top)
            $table->string('origin'); // Origen del campeón
            $table->date('release_date'); // Fecha de lanzamiento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions');
    }
};
