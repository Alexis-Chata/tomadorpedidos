<?php

namespace App\Livewire;

use App\Models\Comedi01;
use App\Models\Comedi37;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Tomador extends Component
{
    public $items;
    public $producto;
    public $cantidad;

    public function mount()
    {
        $this->items = collect();
    }

    public function guardarPedido()
    {
        $ccia = '11';
        $cdivi = '00';
        $ccendis = '07';
        $cidpr = 'cidpr';
        $fupgr = now()->format('Y-m-d');
        $tupgr = now()->format('h:i:s');
        $username = substr(auth()->user()->name, 0, 10);

        $items = $this->items;
        $qdesipm = '18.00';
        $qimpvta = number_format($items->sum('qimp'), 2, '.', '');
        $qdesigv = number_format(($qimpvta * $qdesipm) / 100, 2, '.', '');
        $qimptot = number_format($qimpvta - $qdesigv, 2, '.', '');

        $nped = '1234567890';

        $comedi36y37dataExtra = [
            'ccia' => $ccia,
            'cdivi' => $cdivi,
            'ccendis' => $ccendis,
            'cidpr' => $cidpr,
            'fupgr' => $fupgr,      // 10/02/2023
            'tupgr' => $tupgr,      // 15:05:49
            'cuser' => $username,
            'fmov' => $fupgr,       // 10/02/2023
            'nped' => $nped,        // Generar nped (10)
        ];

        $comedi36 = [
            'cven' => 'cven', // Código Prevendedor
            'ccli' => 'ccli', // Código de Cliente
            'crut' => 'crut', // Código de Ruta
            'clin' => '00', // Código Línea Preventista
            'cletd' => 'cletd', // | ‘ ‘: Nota Ped. | ‘F’:FE | ‘B’:BE |
            'ctip' => 'ctip', // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
            'condpag' => ' ', // | ‘ ’: Contado | ‘C’: Crédito |
            'cconpag' => ' ', // Código Política Crédito
            'plazo' => '0', // Plazo de pago
            'cflagst' => ' ', // Estatus Pedido: | ’ ’:Pendiente | ‘R’:Recibido |
            'csup' => '000', // Código Supervisor
            'clistpr' => 'clistpr', // Código Lista de Precios
            'noped' => ' ', // | ‘ ‘: Pedido | ‘N’: No Pedido |
            'cmnp' => '00', // Código Motivo No Pedido
            'qdescom' => '0.00', // importe descuento comercial.
            'qdesigv' => $qdesigv, // importe descuento IGV.
            'qdesipm' => $qdesipm, // porcentaje IGV.
            'qdesisc' => '0.00', // importe descuento ISC.
            'qimptot' => $qimptot, // importe total sin impuestos.
            'qimpvta' => $qimpvta, // importe total venta incluye impuestos.
        ];

        foreach ($items as $item) {
            $comedi37 = new Comedi37(array_merge($item->except(['producto', 'qfaccon'])->all(), $comedi36y37dataExtra));
            $comedi37->save();
        }

        $this->reset();
    }

    public function comedi36()
    {
    }

    public function agregar()
    {
        $this->validandoCampos();

        $producto = $this->producto;
        $cantidad = number_format($this->cantidad, 2, '.', '');
        $items = $this->items;

        $ctransa = '01'; // Código transacción: ‘01’:Venta, ‘02’: Promoción
        $clistpr = '001'; // Código Lista de Precios
        $prom = ' '; // ‘S’: Es una promoción

        $codProducto = substr(trim($producto), 0, 3);
        $comedi01 = Comedi01::where('cequiv', $codProducto)->first();

        $mensaje = 'Articulo No Existe';

        if ($items->contains('cequiv', $codProducto)) {
            $comedi01 = null;
            $mensaje = 'Articulo ya fue ingresado anteriormente';
        }

        if ($comedi01 != null  && $comedi01->flagcre == 1) {
            $comedi01 = null;
            $mensaje = 'Articulo no esta activo';
        }

        if ($comedi01 != null  && $cantidad >= $comedi01->comedi02->qsaldis) {
            $comedi01 = null;
            $mensaje = 'Stock insuficiente';
        }

        $this->validandoArticulo($comedi01, $mensaje);

        $this->validandoUnidadesxPresentacion($cantidad, $comedi01->qfaccon);

        $precio = number_format($comedi01->comedilps->where('clistpr', $clistpr)->first()->qprecio, 2, '.', '');

        $importe = $this->calculoImporte($cantidad, $precio, $comedi01->qfaccon);

        $item = collect();
        $item->put('cequiv', $codProducto); // Código Equivalencia Artículo (cód.corto)
        $item->put('ccodart', $comedi01->ccodart); // Código de Artículo
        $item->put('ctransa', $ctransa); // Código transacción: ‘01’:Venta, ‘02’: Promoción
        $item->put('clistpr', $clistpr); // Código Lista de Precios
        $item->put('qcanped', $cantidad); // Cantidad de pedido
        // $item->put('qcanprom', $cantidad2); // Cantidad Promoción
        $item->put('qpreuni', $precio); // Precio de artículo
        $item->put('qimp', $importe); // Importe
        $item->put('prom', $prom); // ‘S’: Es una promoción
        $item->put('qdesc', '0.00'); // Importe de descuento
        $item->put('qpordes', '0.00'); // Porcentaje de descuento
        $item->put('qdesisc', '0.00'); // Importe de ISC(Impuesto Selectivo al consumo)
        // $item->put('cprom', $cprom); // Código de Promoción

        $item->put('producto', $comedi01->tcor);
        $item->put('qfaccon', $comedi01->qfaccon);

        $items->push($item);
        $items = $items->sortBy('cequiv');

        // Agregar el número de orden a cada elemento
        $items = $this->numeroOrdenItem($items);

        $this->items = $items;
        $this->reset(['producto', 'cantidad']);
        //dd($items);
    }

    public function eliminarItem($cequiv)
    {
        $items = $this->items;
        $items = $items->reject(function ($item) use ($cequiv) {
            return $item->get('cequiv') === $cequiv;
        });
        $items = $this->numeroOrdenItem($items);
        $this->items = $items;
    }

    public function numeroOrdenItem($items)
    {
        return $items->values()->map(function ($item, $index) {
            $item['citem'] = str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            return $item;
        });
    }

    public function calculoImporte($cantidad, $precio, $qfaccon)
    {
        $cantidadBultos = explode(localeconv()['decimal_point'], $cantidad)[0];
        $cantidadUnidades = explode(localeconv()['decimal_point'], $cantidad)[1];

        $importeXbultos = $cantidadBultos * $precio;
        $importeXunidades = ($cantidadUnidades * $precio) / $qfaccon;
        return number_format($importeXbultos + $importeXunidades, 2, '.', '');
    }

    public function validandoUnidadesxPresentacion($cantidad, $qfaccon)
    {
        $unidades = explode(localeconv()['decimal_point'], $cantidad)[1];

        if ($unidades >= $qfaccon) {
            Validator::make(
                [
                    'cantidad' => null,
                ],
                [
                    'cantidad' => 'required',
                ],
                [
                    'required' => 'Cantidad no permitida (presentacion de ' . $qfaccon . ' unidades)',
                ]
            )->validated();
        }
    }

    public function validandoArticulo($comedi01, $mensaje)
    {
        Validator::make(
            [
                'producto' => $comedi01,
            ],
            [
                'producto' => 'required',
            ],
            [
                'required' => $mensaje,
            ]
        )->validated();
    }

    public function validandoCampos()
    {
        $this->validate(
            [
                'producto' => 'required',
                'cantidad' => 'required|min:0.01',
            ],
            [
                'required' => 'Campo requerido',
            ]
        );
    }

    public function render()
    {
        $comedi01s = Comedi01::all();
        return view('livewire.tomador', compact('comedi01s'));
    }
}
