<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comedi31 extends Model
{
    use HasFactory;

    protected $fillable = [
        // Relación: Prevendedor-Clientes-Ruta-Día visita
        // $table->id();
        'ccia', // Código de Compañia
        'cdivi', // Código de División de Negocios
        'ccendis', // Código Centro de Distribución
        'ccli', // Código de Cliente
        'crut', // Código de Ruta
        'nsecprev', // Secuencia de visita en la ruta
        'cven', // Código de Prevendedor
        'cdiavis', // Día de Visita:1:Lunes, 2:Martes, 3:Miércoles, 4:Jueves, 5:Viernes, 6:Sábado, 7:Domingo
        'ctipmod', // tabla '037':tipo de módulo.
        'tdestmod', // Descripción tipo de módulo.
        'cmod', // código de módulo.
        'tdesmod', // descripción de módulo.
        'nsecmod', // secuencia del módulo en la ruta.
        'ctipfv', // frecuencia de visita.
        'qimpvta', // Importe Venta Total de último dia de visita
        'femi', // Fecha de emisión última visita
        'cmrp', // Código Motivo Rechazo Pedido (si tiene dato este campor es porque el último pedido fue rechazado por el cliente)
        'cuser', // Nombre de Usuario
        'cidpr', // Nombre del Programa
        'fupgr', // Fecha de Actualización
        'tupgr', // Hora de Actualización
        //$table->timestamp('created_at')->useCurrent();
        //$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        //$table->unique(['ccia', 'cdivi', 'ccendis', 'crut', 'ccli'])
    ];

    public function comedi07(): HasOne
    {
        return $this->hasOne(Comedi07::class, 'ccli', 'ccli');
    }

    public function comedi36s()
    {
        return $this->hasMany(Comedi36::class);
    }

    public function comedi36snow()
    {
        return $this->hasMany(Comedi36::class, 'ccli', 'ccli')->whereDate('fmov', today());
    }
}
