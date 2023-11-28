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
        Schema::create('comedi36s', function (Blueprint $table) {
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->string('nped', 10); // Número de Pedido
            $table->char('cven', 03); // Código Prevendedor
            $table->date('fmov'); // Fecha de Pedido
            $table->char('ccli', 8); // Código de Cliente
            $table->char('crut', 3); // Código de Ruta
            $table->char('clin', 2); // Código Línea Preventista
            $table->char('cletd', 1); // | ‘ ‘: Nota Ped. | ‘F’:FE | ‘B’:BE |
            $table->char('ctip', 1); // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
            $table->char('condpag', 1); // | ‘ ’: Contado | ‘C’: Crédito |
            $table->char('cconpag', 4); // Código Política Crédito
            $table->integer('plazo'); // Plazo de pago
            $table->char('cflagst', 1); // Estatus Pedido: | ’ ’:Pendiente | ‘R’:Recibido |
            $table->char('csup', 3); // Código Supervisor
            $table->char('clistpr', 3); // Código Lista de Precios
            $table->char('noped', 1); // | ‘ ‘: Pedido | ‘N’: No Pedido |
            $table->char('cmnp', 2); // Código Motivo No Pedido
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
        Schema::dropIfExists('comedi36s');
    }
};
