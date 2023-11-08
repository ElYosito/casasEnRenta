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
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 20);
            $table->string('descripcion', 20);
            $table->date('fechaPub');
            $table->char('habitaciones', 10);
            $table->string('tipoCasa');
            $table->string('tipoA');
            $table->string('tipoPropiedad');
            $table->json('ubicacion');
            $table->json('servicios')->nullable();
            $table->decimal('precio');
            $table->string('edoPropiedad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedads');
    }
};
