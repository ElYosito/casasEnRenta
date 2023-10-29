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
            $table->string('titulo',10);
            $table->string('descripcion',20);
            $table->decimal('precio',10,2);
            $table->string('imagen',500);
            $table->date('fechaPub');
            $table->string('edoPropiedad');
            $table->string('tipoPropiedad');
            $table->char('habitaciones',10);
            $table->foreignId('colonia_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
