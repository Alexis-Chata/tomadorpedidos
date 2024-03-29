<?php

namespace App\Http\Controllers;

use App\Models\Comedi36;
use App\Http\Requests\StoreComedi36Request;
use App\Http\Requests\UpdateComedi36Request;
use App\Models\Comedi31;
use Illuminate\Support\Facades\Request;

class Comedi36Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StoreComedi36Request $request)
    {
        $ccliente = new Comedi31();
        if(!is_null($request->ccliente)){
            $ccliente = Comedi31::with('comedi07')->find($request->ccliente);
        }
        return view('tomadorpedidos.tomador', compact('ccliente'));
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
    public function store(StoreComedi36Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comedi36 $comedi36)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comedi36 $comedi36)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComedi36Request $request, Comedi36 $comedi36)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comedi36 $comedi36)
    {
        //
    }
}
