<?php

namespace App\Http\Controllers;

use App\Models\Comedi31;
use App\Http\Requests\StoreComedi31Request;
use App\Http\Requests\UpdateComedi31Request;

class Comedi31Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cven = auth()->user()->codVendedorAsignadosMain()->cven;
        $comedi31s = Comedi31::with(['comedi07', 'comedi36snow'])->where('cven', $cven)->get();
        $comedi31s->load('comedi36snow');

        $totalQimpvta = $comedi31s->sum(function ($comedi31) {
            return $comedi31->comedi36snow->sum('qimpvta');
        });

        $countComedi31sWithComedi36Snow = $comedi31s->filter(function ($comedi31) {
            return $comedi31->comedi36snow->isNotEmpty();
        })->count();

        return view('tomadorpedidos.clientes', compact('comedi31s', 'totalQimpvta', 'countComedi31sWithComedi36Snow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComedi31Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comedi31 $comedi31)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comedi31 $comedi31)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComedi31Request $request, Comedi31 $comedi31)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comedi31 $comedi31)
    {
        //
    }
}
