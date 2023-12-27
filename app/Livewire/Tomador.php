<?php

namespace App\Livewire;

use App\Models\Comedi01;
use Livewire\Component;

class Tomador extends Component
{
    public $items;
    public $producto;
    public $cantidad;

    public function mount(){
        $this->items = collect();
    }

    public function agregar(){
        $producto = $this->producto;
        $cantidad = $this->cantidad;
        $items = $this->items;

        $codProducto = substr(trim($producto), 0, 3);
        $comedi01 = Comedi01::where('cequiv', $codProducto)->first();
        $precio = $comedi01->comedilps->where('clistpr', '001')->first()->qprecio;

        $item = collect();
        $item->put('codProducto', $codProducto);
        $item->put('producto', $producto);
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

        $this->items = $items->sortBy('codProducto');
        $this->reset(['producto', 'cantidad']);
    }
    public function render()
    {
        $comedi01s = Comedi01::with('comedi02', 'comedilps')->get();
        return view('livewire.tomador', compact('comedi01s'));
    }
}
