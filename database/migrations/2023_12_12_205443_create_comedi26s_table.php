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
        Schema::create('comedi26s', function (Blueprint $table) {
            // Maestro de Promociones
            $table->id();
            $table->char('ccia', 2)->default('11'); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2)->default('07'); // Código Centro de Distribución
            $table->char('cprom', 3); // Código de Promoción
            $table->string('tprom', 50); // Nombre de la Promoción
            $table->char('clin', 2)->default('03'); // tabla '011':Línea preventista.
            $table->string('tdesclin', 40); // descripción línea preventista.
            $table->double('qprecio', 9, 2); // Precio Artículo
            $table->double('qpordes', 6, 2); // Porcentaje de Descuento de la Promoción.
            $table->date('finipro'); // Fecha Inicio de la Promoción.
            $table->date('ffinpro'); // Fecha Final de la Promoción.
            $table->char('ctipneg', 2)->default('00'); // tabla:'013':tipo de negocio.
            $table->string('tdestneg', 40); // descripción tipo de negocio.
            $table->char('ctipro', 2)->default('00'); // tabla:'078':tipo promoción.
            $table->string('tdestpro', 40); // descripción tipo promoción. '01':obsequios promocionales, '02':bonificación horizontal.
            $table->string('ccodart1', 10); // código artículo venta.
            $table->double('qprod1', 9, 2); // cantidad exigida de venta.
            $table->char('cescom', 1)->default('2'); // '1':comisionable, '2':no comisionable.
            $table->string('tdesccom', 40); // descripción tipo comisionable.
            $table->string('ccodart2', 10); // código artículo regalo.
            $table->double('qprod2', 9, 2); // cantidad de regalo.
            $table->string('cuser', 10); // Nombre de Usuario
            $table->string('cidpr', 12); // Nombre del Programa
            $table->date('fupgr'); // Fecha de Actualización
            $table->time('tupgr', 8); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['ccia', 'cdivi', 'ccendis', 'cprom']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedi26s');
    }
};
