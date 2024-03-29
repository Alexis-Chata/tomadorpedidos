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
        Schema::create('comedi02', function (Blueprint $table) {
            // Stock Disponible por artículo
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->char('calm', 4); // Código de Almacén
            $table->string('ccodart', 10); // Código de Artículo
            $table->double('qsalfis', 9, 2)->nullable(); // Cantidad Saldo Físico
            $table->double('qsaldis', 9, 2)->nullable(); // Cantidad Saldo disponible
            $table->string('cuser', 10)->nullable(); // Nombre de Usuario
            $table->char('cidpr', 12)->nullable(); // Nombre del Programa
            $table->date('fupgr')->nullable(); // Fecha de Actualización
            $table->time('tupgr')->nullable(); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['ccia', 'cdivi', 'ccendis', 'calm', 'ccodart']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedi02');
    }
};
