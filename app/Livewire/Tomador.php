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
        $codProducto = substr(trim($this->producto), 0, 3);
        $comedi01 = Comedi01::where('cequiv', $codProducto)->first();

        $item = collect();
        $item->producto = $this->producto;
        $item->cantidad = $this->cantidad;
        $item->importe = $comedi01->comedilps->where('clistpr', '001')->first()->qprecio  * $this->cantidad;

        //dd($item, $item->producto);
        $this->items->add($item);
        //dd($this->items, $this->items[0]);
        //dd($this->items, $this->items[0], $this->items[0]->producto);
        $this->reset(['producto', 'cantidad']);
    }
    public function render()
    {
        $comedi01s = Comedi01::with('comedi02', 'comedilps')->get();
        return view('livewire.tomador', compact('comedi01s'));
    }
}
