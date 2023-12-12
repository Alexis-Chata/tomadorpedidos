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
        Schema::create('comedilps', function (Blueprint $table) {
            // Lista de Precios por Artículos
            $table->id();
            $table->char('ccia', 2)->default('11'); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2)->default('07'); // Código Centro de Distribución
            $table->char('clistpr', 3); // Código Lista de Precios
            $table->string('tdeslpre', 40); // descripción de la lista de precios.
            $table->string('ccodart', 10); // Código de Artículo
            $table->double('qprecio', 9, 2); // Precio Artículo (incluye IGV)
            $table->date('finilp'); // Fecha inicio lista de precios.
            $table->date('ffinlp'); // Fecha final lista de precios.
            $table->string('cuser', 10); // Nombre de Usuario que Actualiza
            $table->string('cidpr', 12); // Nombre del Programa
            $table->date('fupgr'); // Fecha de Actualización
            $table->time('tupgr', 8); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedilps');
    }
};
