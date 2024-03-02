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
        Schema::create('comedi07', function (Blueprint $table) {
            // Maestro de Clientes
            $table->id();
            $table->char('cter', 2); // código de territorio.
            $table->char('creg', 2); // código de región.
            $table->char('ccia', 2); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2); // Código Centro de Distribución
            $table->char('ccli', 8); // código de cliente.
            $table->string('tnomrep', 40); // nombre del representante.
            $table->string('tdir', 50); // dirección del cliente.
            $table->string('tcli', 40); // nombre y apellidos o razón social.
            $table->string('ntel', 10)->nullable(); // número de teléfono.
            $table->char('le', 8)->nullable(); // Dni.
            $table->char('ctipneg', 3); // tabla:'013':tipo de negocio.
            $table->string('tdestneg', 40); // descripción tipo de negocio.
            $table->char('ctipcli', 1)->nullable(); // tabla '012': tipos de cliente '1':compartido, '2':exclusivos.
            $table->string('tdestcli', 40)->nullable(); // descripción de tipo de cliente.
            $table->char('ctipseg', 4)->nullable(); // tabla '021': segmentos de mercado '1':minorista, '2':mayoristas.
            $table->string('tdestseg', 40)->nullable(); // descripción segmento de mercado.
            $table->char('flagact', 1)->nullable(); // estado del cliente '1':activo, '2':inactivo.
            $table->string('tdesescl', 40)->nullable(); // descripción estado del cliente.
            $table->string('cruc', 11)->nullable(); // ruc del cliente.
            $table->date('fnac')->nullable(); // fecha de nacimiento del cliente.
            $table->char('crub', 2)->nullable(); // tabla '049':rubros de negocio.
            $table->string('tdesrubr', 40)->nullable(); // descripción rubro de negocio.
            $table->char('crutd', 2)->nullable(); // tabla '097':tipos agente Sunat.
            $table->string('tdesrutd', 40)->nullable(); // descripción tipo agente Sunat.
            $table->char('ctipco', 2)->nullable(); // Tabla:’083’:Tipo documento Contribuyente. ‘01’:DNI, ‘06’:RUC.
            $table->string('tdestico', 40)->nullable(); // descripción Tipo documento Contribuyente.
            $table->char('fligv', 1)->nullable(); // condición IGV, '1':exonerado de IGV, '2':no exonerado de IGV.
            $table->string('tdesfigv', 40)->nullable(); // descripción condición IGV.
            $table->char('tdocid', 2)->nullable(); // tabla '089':tipo de contribuyente, '01':persona natural, '02':persona jurídica.
            $table->string('tdestdoc', 40)->nullable(); // descripción tipo de contribuyente.
            $table->char('clistpr', 3)->nullable(); // tabla '055': lista de precios.
            $table->string('tdeslpre', 40)->nullable(); // descripción lista de precios.
            $table->string('cuser', 10)->nullable(); // Nombre de Usuario
            $table->string('cidpr', 12)->nullable(); // Nombre del Programa
            $table->date('fupgr')->nullable(); // Fecha de Actualización
            $table->time('tupgr')->nullable(); // Hora de Actualización
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['ccli']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedi07');
    }
};
