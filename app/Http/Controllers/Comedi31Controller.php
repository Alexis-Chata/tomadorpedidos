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
        $comedi31s = Comedi31::with('comedi07')->where('cven', $cven)->get();
        return view('tomadorpedidos.clientes', compact('comedi31s'));
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
