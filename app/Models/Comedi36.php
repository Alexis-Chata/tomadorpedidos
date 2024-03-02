<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comedi36 extends Model
{
    use HasFactory;

    protected $table = 'comedi36';

    protected $fillable = [
        // Cabecera de Pedido
        //$table->id();
        'ccia', // Código de Compañia
        'cdivi', // Código de División de Negocios
        'ccendis', // Código Centro de Distribución
        'nped', // Número de Pedido
        'cven', // Código Prevendedor
        'fmov', //Fecha de Pedido
        'ccli', // Código de Cliente
        'crut', // Código de Ruta
        'clin', // Código Línea Preventista
        'cletd', // | ‘ ‘: Nota Ped. | ‘F’:FE | ‘B’:BE |
        'ctip', // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
        'condpag', // | ‘ ’: Contado | ‘C’: Crédito |
        'cconpag', // Código Política Crédito
        'plazo', // Plazo de pago
        'cflagst', // Estatus Pedido: | ’ ’:Pendiente | ‘R’:Recibido |
        'csup', // Código Supervisor
        'clistpr', // Código Lista de Precios
        'noped', // | ‘ ‘: Pedido | ‘N’: No Pedido |
        'cmnp', // Código Motivo No Pedido
        'qdescom', // importe descuento comercial.
        'qdesigv', // importe descuento IGV.
        'qdesipm', // porcentaje IGV.
        'qdesisc', // importe descuento ISC.
        'qimptot', // importe total sin impuestos.
        'qimpvta', // importe total venta incluye impuestos.
        'cuser', // Nombre de Usuario
        'cidpr', // Nombre del Programa
        'fupgr', // Fecha de Actualización
        'tupgr', // Hora de Actualización
        //$table->timestamp('created_at')->useCurrent();
        //$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        //$table->unique(['nped']);
    ];
}
