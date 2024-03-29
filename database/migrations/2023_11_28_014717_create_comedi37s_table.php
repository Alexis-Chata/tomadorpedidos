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
        Schema::create('comedi37', function (Blueprint $table) {
            // Detalle de Pedido
            $table->id();
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->string('nped', 10); // Número de Pedido
            $table->char('citem', 3); // Item del detalle
            $table->date('fmov'); // Fecha de Pedido
            $table->char('cequiv', 3); // Código Equivalencia Artículo (cód.corto)
            $table->char('ccodart', 10); // Código de Artículo
            $table->char('ctransa', 2); // Código transacción: ‘01’:Venta, ‘02’: Promoción
            $table->char('clistpr', 3); // Código Lista de Precios
            $table->double('qcanped', 8, 2)->nullable(); // Cantidad de pedido
            $table->double('qcanprom', 8, 2)->nullable(); // Cantidad Promoción
            $table->double('qpreuni', 8, 2)->nullable(); // Precio de artículo
            $table->double('qimp', 12, 2)->nullable(); // Importe
            $table->char('prom', 1)->default(' '); // ‘S’: Es una promoción
            $table->double('qdesc', 8, 2)->nullable(); // Importe de descuento
            $table->double('qpordes', 7, 3)->nullable(); // Porcentaje de descuento
            $table->double('qdesisc', 9, 2)->nullable(); // Importe de ISC(Impuesto Selectivo al consumo)
            $table->char('cprom', 3)->nullable(); // Código de Promoción
            $table->char('cuser', 10)->nullable(); // Nombre de Usuario
            $table->char('cidpr', 12)->nullable(); // Nombre del Programa
            $table->date('fupgr')->nullable(); // Fecha de Actualización
            $table->char('tupgr')->nullable(); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['nped', 'citem']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedi37');
    }
};
