<?php

namespace App\Http\Controllers;

use App\Models\Comedi01;
use App\Http\Requests\StoreComedi01Request;
use App\Http\Requests\UpdateComedi01Request;

class Comedi01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comedi01s = Comedi01::all();
        //dd($comedi01s[0]);
        return view('tomadorpedidos.lista-precios', compact('comedi01s'));
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
    public function store(StoreComedi01Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comedi01 $comedi01)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comedi01 $comedi01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComedi01Request $request, Comedi01 $comedi01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comedi01 $comedi01)
    {
        //
    }
}
