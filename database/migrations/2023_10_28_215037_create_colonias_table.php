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
        Schema::create('colonias', function (Blueprint $table) {
            $table->id(); // Esto define la columna 'id' como autoincremental y clave primaria.
            $table->string('nombreColonia', 20);
            $table->string('asentamiento', 20);
            $table->string('cp',10); // Se eliminó la propiedad 'auto_increment' aquí.
            $table->string('zona', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colonias');
    }
};
