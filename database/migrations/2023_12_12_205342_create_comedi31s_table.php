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
        Schema::create('comedi31s', function (Blueprint $table) {
            // Relación: Prevendedor-Clientes-Ruta-Día visita
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->char('ccli', 8); // Código de Cliente
            $table->char('crut', 3); // Código de Ruta
            $table->char('nsecprev', 4); // Secuencia de visita en la ruta
            $table->char('cven', 3); // Código de Prevendedor
            $table->char('cdiavis', 1); // Día de Visita:1:Lunes, 2:Martes, 3:Miércoles, 4:Jueves, 5:Viernes, 6:Sábado, 7:Domingo
            $table->char('ctipmod', 5); // tabla '037':tipo de módulo.
            $table->string('tdestmod', 40); // Descripción tipo de módulo.
            $table->char('cmod', 5); // código de módulo.
            $table->string('tdesmod', 40); // descripción de módulo.
            $table->char('nsecmod', 5); // secuencia del módulo en la ruta.
            $table->char('ctipfv', 1); // frecuencia de visita.
            $table->double('qimpvta', 12, 2)->nullable(); // Importe Venta de última visita
            $table->date('femi')->nullable(); // Fecha de emisión última visita
            $table->char('cmrp', 2)->nullable(); // Código Motivo Rechazo Pedido (si tiene dato este campor es porque el último pedido fue rechazado por el cliente)
            $table->string('cuser', 10)->nullable(); // Nombre de Usuario
            $table->string('cidpr', 12)->nullable(); // Nombre del Programa
            $table->date('fupgr')->nullable(); // Fecha de Actualización
            $table->time('tupgr')->nullable(); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['ccia', 'cdivi', 'ccendis', 'crut', 'ccli']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedi31s');
    }
};
