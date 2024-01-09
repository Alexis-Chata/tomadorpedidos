<?php

namespace App\Livewire;

use App\Models\Comedi01;
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

    public function agregar()
    {
        $this->validandoCampos();

        $producto = $this->producto;
        $cantidad = number_format($this->cantidad, 2);
        $items = $this->items;

        $codProducto = substr(trim($producto), 0, 3);
        $comedi01 = Comedi01::where('cequiv', $codProducto)->first();

        $mensaje = 'Articulo ya fue ingresado anteriormente';
        $items->contains('codProducto', $codProducto) ? $comedi01 = null : $mensaje = 'Articulo No Existe';

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

        $precio = $comedi01->comedilps->where('clistpr', '001')->first()->qprecio;

        $importe = $this->calculoImporte($cantidad, $precio, $comedi01->qfaccon);

        $item = collect();
        $item->put('codProducto', $codProducto);
        $item->put('producto', $comedi01->tcor);
        $item->put('qfaccon', $comedi01->qfaccon);
        $item->put('cantidad', $cantidad);
        $item->put('precio', $precio);
        $item->put('importe', $importe);

        $items->push($item);
        $items = $items->sortBy('codProducto');

        // Agregar el número de orden a cada elemento
        $items = $this->numeroOrdenItem($items);

        $this->items = $items;
        $this->reset(['producto', 'cantidad']);
    }

    public function eliminarItem($cequiv)
    {
        $items = $this->items;
        $items = $items->reject(function ($item) use ($cequiv) {
            return $item['codProducto'] === $cequiv;
        });
        $items = $this->numeroOrdenItem($items);
        $this->items = $items;
    }

    public function numeroOrdenItem($items)
    {
        return $items->values()->map(function ($item, $index) {
            $item['numero_orden'] = str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            return $item;
        });
    }

    public function calculoImporte($cantidad, $precio, $qfaccon)
    {
        $cantidadBultos = explode(localeconv()['decimal_point'], $cantidad)[0];
        $cantidadUnidades = explode(localeconv()['decimal_point'], $cantidad)[1];

        $importeXbultos = $cantidadBultos * $precio;
        $importeXunidades = ($cantidadUnidades * $precio) / $qfaccon;
        return number_format($importeXbultos + $importeXunidades, 2);
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
        $comedi01s = Comedi01::with('comedi02', 'comedilps')->get();
        return view('livewire.tomador', compact('comedi01s'));
    }
}
