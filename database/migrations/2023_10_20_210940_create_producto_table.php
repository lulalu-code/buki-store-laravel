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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('nombreAutor');
            $table->string('material');
            $table->string('categoria');
            $table->decimal('medidasAlto', 8, 2);
            $table->decimal('medidasAncho', 8, 2);
            $table->decimal('medidasFondo', 8, 2);
            $table->boolean('esPersonalizable');
            $table->string('imagenURL');
            $table->date('fechaSubida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
