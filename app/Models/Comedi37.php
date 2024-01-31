<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comedi37 extends Model
{
    use HasFactory;

    protected $fillable = [
        // Detalle de Pedido
        // $table->id();
        'ccia', // Código de Compañia
        'cdivi', // Código de División de Negocios
        'ccendis', // Código Centro de Distribución
        'nped', // Número de Pedido
        'citem', // Item del detalle
        'fmov', //Fecha de Pedido
        'cequiv', // Código Equivalencia Artículo (cód.corto)
        'ccodart', // Código de Artículo
        'ctransa', // Código transacción: ‘01’:Venta, ‘02’: Promoción
        'clistpr', // Código Lista de Precios
        'qcanped', // Cantidad de pedido
        'qcanprom', // Cantidad Promoción
        'qpreuni', // Precio de artículo
        'qimp', // Importe
        'prom', // ‘S’: Es una promoción
        'qdesc', // Importe de descuento
        'qpordes', // Porcentaje de descuento
        'qdesisc', // Importe de ISC(Impuesto Selectivo al consumo)
        'cprom', // Código de Promoción
        'cuser', // Nombre de Usuario
        'cidpr', // Nombre del Programa
        'fupgr', // Fecha de Actualización
        'tupgr', // Hora de Actualización
        //$table->timestamp('created_at')->useCurrent();
        //$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        //$table->unique(['nped', 'citem']);
    ];
}
