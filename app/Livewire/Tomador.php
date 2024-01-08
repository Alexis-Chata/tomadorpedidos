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

        $this->validate(
            [
                'producto' => 'required',
                'cantidad' => 'required|min:0.01',
            ],
            [
                'required' => 'Campo requerido',
            ]
        );

        $producto = $this->producto;
        $cantidad = $this->cantidad;
        $items = $this->items;

        $codProducto = substr(trim($producto), 0, 3);
        $comedi01 = Comedi01::where('cequiv', $codProducto)->first();
        $mensaje = 'Articulo ya fue ingresado anteriormente';
        $items->contains('codProducto', $codProducto) ? $comedi01 = null : $mensaje = 'Articulo No Existe';
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

        $unidades = explode(localeconv()['decimal_point'], number_format($cantidad, 2))[1];
        // dd($unidades, $comedi01->qfaccon, $unidades < $comedi01->qfaccon);
        if ($unidades >= $comedi01->qfaccon) {
            Validator::make(
                [
                    'cantidad' => null,
                ],
                [
                    'cantidad' => 'required',
                ],
                [
                    'required' => 'Cantidad no permitida (presentacion de '.$comedi01->qfaccon.' unidades)',
                ]
            )->validated();
        }

        $precio = $comedi01->comedilps->where('clistpr', '001')->first()->qprecio;

        $item = collect();
        $item->put('codProducto', $codProducto);
        $item->put('producto', $comedi01->tcor);
        $item->put('qfaccon', $comedi01->qfaccon);
        $item->put('cantidad', $cantidad);
        $item->put('precio', $precio);
        $item->put('importe', $precio * $cantidad);

        $items->push($item);
        $items = $items->sortBy('codProducto');
        // Agregar el número de orden a cada elemento
        $items = $items->values()->map(function ($item, $index) {
            $item['numero_orden'] = str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            return $item;
        });

        $this->items = $items;
        $this->reset(['producto', 'cantidad']);
        // dd($items, $items->pluck('codProducto'));
    }
    public function render()
    {
        $comedi01s = Comedi01::with('comedi02', 'comedilps')->get();
        return view('livewire.tomador', compact('comedi01s'));
    }
}
