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
            // Cabecera de Pedido
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->string('nped', 10); // Número de Pedido
            $table->char('cven', 3); // Código Prevendedor
            $table->date('fmov'); // Fecha de Pedido
            $table->char('ccli', 8); // Código de Cliente
            $table->char('crut', 3); // Código de Ruta
            $table->char('clin', 2); // Código Línea Preventista
            $table->char('cletd', 1)->default(' '); // | ‘ ‘: Nota Ped. | ‘F’:FE | ‘B’:BE |
            $table->char('ctip', 1); // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
            $table->char('condpag', 1)->default(' '); // | ‘ ’: Contado | ‘C’: Crédito |
            $table->char('cconpag', 4)->nullable(); // Código Política Crédito
            $table->smallInteger('plazo')->nullable(); // Plazo de pago
            $table->char('cflagst', 1)->default(' '); // Estatus Pedido: | ’ ’:Pendiente | ‘R’:Recibido |
            $table->char('csup', 3)->nullable(); // Código Supervisor
            $table->char('clistpr', 3); // Código Lista de Precios
            $table->char('noped', 1)->default(); // | ‘ ‘: Pedido | ‘N’: No Pedido |
            $table->char('cmnp', 2)->nullable(); // Código Motivo No Pedido
            $table->double('qdescom', 9, 2)->nullable(); // importe descuento comercial.
            $table->double('qdesigv', 9, 2)->nullable(); // importe descuento IGV.
            $table->double('qdesipm', 9, 2)->nullable(); // porcentaje IGV.
            $table->double('qdesisc', 9, 2)->nullable(); // importe descuento ISC.
            $table->double('qimptot', 9, 2)->nullable(); // importe total sin impuestos.
            $table->double('qimpvta', 9, 2)->nullable(); // importe total venta incluye impuestos.
            $table->char('cuser', 10)->nullable(); // Nombre de Usuario
            $table->char('cidpr', 12)->nullable(); // Nombre del Programa
            $table->date('fupgr')->nullable(); // Fecha de Actualización
            $table->char('tupgr')->nullable(); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['nped']);
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
