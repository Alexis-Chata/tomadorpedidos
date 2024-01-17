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
        Schema::create('comedi22s', function (Blueprint $table) {
            // Maestro Correlativo de pedidos.
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('ctipcorr', 3); // Código tipo correlativo. ‘088’:correlativo pedidos
            $table->string('tdescorr', 40); // Descripción de correllativo. : ‘088’:Correlativo pedidos.
            $table->double('ndoc', 10)->nullable(); // Correlativo.
            $table->string('cuser', 10)->nullable(); // Usuario que actualiza.
            $table->string('cidpr', 12)->nullable(); // Nombre del Programa
            $table->date('fupgr')->nullable(); // Fecha de Actualización
            $table->time('tupgr')->nullable(); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            //$table->unique(['ccia', 'ctipcorr']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedi22s');
    }
};
