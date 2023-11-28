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
        Schema::create('comedi10s', function (Blueprint $table) {
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->char('cven', 3); // Código de Prevendedor
            $table->string('tven'); // Nombre del Prevendedor
            $table->char('password', 6); // Clave del Prevendedor
            $table->char('user', 15); // Usuario relacionado
            $table->string('nfon'); // Número de teléfono/celular
            $table->char('clin', 2); // Código Línea Preventista
            $table->char('ccargo', 1); // Cargo 1:Prevendedor, 2:Supervisor, 3:Jefe de Ventas, 4: Administrador.
            $table->char('csup', 3); // Código de Supervisor/mesa
            $table->char('csisven', 3); // Código Sistema de Preventa
            $table->char('cind', 1); // ‘ ‘:Activo, ‘I’:Inactivo
            $table->char('cjefv', 3); // Código de Jefe de Ventas
            $table->char('cadm', 3); // Código de Administrador
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
        Schema::dropIfExists('comedi10s');
    }
};
