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
            $table->string('titulo',100);
            $table->string('descripcion',500);
            $table->decimal('precio',10,2);
            $table->string('imagen',500);
            $table->date('fechaPub');
            $table->string('edoPropiedad',20);
            $table->string('tipoPropiedad',20);
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
