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
        Schema::create('comedi10', function (Blueprint $table) {
            // Maestro de Prevendedores.
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->char('cven', 3); // Código de Prevendedor
            $table->string('tven', 40); // Nombre del Prevendedor
            $table->char('passven', 6); // Clave del Prevendedor
            $table->string('userrel', 15); // Usuario relacionado
            $table->string('nfon', 10)->nullable(); // Número de teléfono/celular
            $table->char('clin', 2); // tabla '011':Línea preventista.
            $table->string('tdesclin', 40); // descripción línea preventista.
            $table->char('ccargo', 1)->nullable(); // Tabla:’036’:Lineas preventista. // Cargo 1:Prevendedor, 2:Supervisor, 3:Jefe de Ventas, 4: Administrador.
            $table->string('tdescarg', 40)->nullable(); // descripción cargo. '1':Prevendedor,'2':Supervisor,'3':Jefe Ventas,'4':Administrador.
            $table->char('csup', 3)->nullable(); // Código de Supervisor/mesa
            $table->char('csisven', 3)->nullable(); // tabla:'035'sistema de ventas.
            $table->string('tdessven', 40)->nullable(); // descripción sistema de ventas.
            $table->char('cind', 1)->nullable(); // ‘ ‘:Activo, ‘I’:Inactivo
            $table->char('cjefv', 3)->nullable(); // Código de Jefe de Ventas
            $table->char('cadm', 3)->nullable(); // Código de Administrador
            $table->string('cuser', 10)->nullable(); // Nombre de Usuario
            $table->string('cidpr', 12)->nullable(); // Nombre del Programa
            $table->date('fupgr')->nullable(); // Fecha de Actualización
            $table->time('tupgr')->nullable(); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['ccia', 'cdivi', 'ccendis', 'cven']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedi10');
    }
};
