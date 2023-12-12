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
        Schema::create('comedi01s', function (Blueprint $table) {
            // Maestro de Artículos
            $table->id();
            $table->char('ccia', 2)->default('11'); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2)->default('07'); // Código Centro de Distribución
            $table->char('cequiv', 3); // Código Equivalencia Artículo (cód.corto)
            $table->string('ccodart', 10); // Código de Artículo
            $table->string('tcor', 40); // Nombre de Artículo
            $table->integer('qfaccon'); // Unidades x presentación del artículo.
            $table->char('flagcre', 1); // ‘ ‘:Activo, ‘1’: Anulado
            $table->char('cuni', 2); // Código Presentación del Artículo
            $table->char('cpreuni', 2); // Código Presentación de la unidad
            $table->double('qpisc', 8, 2); // Porcentaje ISC
            $table->double('qpigv', 8); // Porcentaje IGV
            $table->string('cuser', 10); // Nombre de Usuario
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
        Schema::dropIfExists('comedi01s');
    }
};
