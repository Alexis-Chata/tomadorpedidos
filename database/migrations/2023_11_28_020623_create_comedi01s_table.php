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
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->char('cequiv', 3); // Código Equivalencia Artículo (cód.corto)
            $table->char('ccodart', 10); // Código de Artículo
            $table->string('tcor'); // Nombre de Artículo
            $table->integer('qfaccon'); // Unidades x presentación del artículo.
            $table->char('flagcre', 1); // ‘ ‘:Activo, ‘1’: Anulado
            $table->char('cprom', 3); // Código de Promoción
            $table->char('cuni', 2); // Código Presentación del Artículo
            $table->char('cpreuni', 2); // Código Presentación de la unidad
            $table->double('qpisc', 8, 2); // Porcentaje ISC
            $table->integer('qpigv'); // Porcentaje IGV
            $table->char('cuser', 10); // Nombre de Usuario
            $table->char('cidpr', 12); // Nombre del Programa
            $table->date('fupgr'); // Fecha de Actualización
            $table->char('tupgr', 8); // Hora de Actualización
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
