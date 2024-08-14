<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rutas;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutas = Rutas::all();
        return view('ruta.ajustes', compact('rutas'));
    }

    public function agregar(Request $request)
    {
        $envio = new Rutas();

        $envio->zona = $request->get('zona');
        $envio->ruta = $request->get('ruta');
        $envio->punto = $request->get('punto');
        $envio->numero = $request->get('numero');
        

        $envio->save();
        $rutas = Rutas::all();
        return view('ruta.ajustes', compact('rutas'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
