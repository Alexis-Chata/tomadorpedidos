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
        Schema::create('comedi07s', function (Blueprint $table) {
            // Maestro de Clientes
            $table->id();
            $table->char('cter', 2)->default('11'); // código de territorio.
            $table->char('creg', 2)->default('11'); // código de región.
            $table->char('ccia', 2)->default('11'); // Código de Compañia
            $table->char('cdivi', 2); // Código de División de Negocios
            $table->char('ccendis', 2)->default('07'); // Código Centro de Distribución
            $table->char('ccli', 8); // código de cliente.
            $table->string('tnomrep', 40); // nombre del representante.
            $table->string('tdir', 50); // dirección del cliente.
            $table->string('tcli', 40); // nombre y apellidos o razón social.
            $table->string('ntel', 10); // número de teléfono.
            $table->char('le', 8); // Dni.
            $table->char('ctipneg', 3); // tabla:'013':tipo de negocio.
            $table->string('tdestneg', 40); // descripción tipo de negocio.
            $table->char('ctipcli', 1); // tabla '012': tipos de cliente '1':compartido, '2':exclusivos.
            $table->string('tdestcli', 40); // descripción de tipo de cliente.
            $table->char('ctipseg', 4); // tabla '021': segmentos de mercado '1':minorista, '2':mayoristas.
            $table->string('tdestseg', 40); // descripción segmento de mercado.
            $table->char('flagact', 1); // estado del cliente '1':activo, '2':inactivo.
            $table->string('tdesescl', 40); // descripción estado del cliente.
            $table->string('cruc', 11); // ruc del cliente.
            $table->date('fnac'); // fecha de nacimiento del cliente.
            $table->char('crub', 2); // tabla '049':rubros de negocio.
            $table->string('tdesrubr', 40); // descripción rubro de negocio.
            $table->char('crutd', 2); // tabla '097':tipos agente Sunat.
            $table->string('tdesrutd', 40); // descripción tipo agente Sunat.
            $table->char('ctipco', 2); // Tabla:’083’:Tipo documento Contribuyente. ‘01’:DNI, ‘06’:RUC.
            $table->string('tdestico', 40); // descripción Tipo documento Contribuyente.
            $table->char('fligv', 1); // condición IGV, '1':exonerado de IGV, '2':no exonerado de IGV.
            $table->string('tdesfigv', 40); // descripción condición IGV.
            $table->char('tdocid', 2); // tabla '089':tipo de contribuyente, '01':persona natural, '02':persona jurídica.
            $table->string('tdestdoc', 40); // descripción tipo de contribuyente.
            $table->char('clistpr', 3); // tabla '055': lista de precios.
            $table->string('tdeslpre', 40); // descripción lista de precios.
            $table->string('cuser', 10); // Nombre de Usuario
            $table->string('cidpr', 12); // Nombre del Programa
            $table->date('fupgr'); // Fecha de Actualización
            $table->time('tupgr', 8); // Hora de Actualización
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
        Schema::dropIfExists('comedi07s');
    }
};
