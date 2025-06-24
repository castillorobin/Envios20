<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

class ComercioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comercios = Comercio::all();
        return view('comercio.index', compact('comercios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comercio.crearcomercio');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comercio = new Comercio();
        $comercio->comercio = $request->input('fname');
        $comercio->direccion = $request->input('direccion');
        $comercio->telefono = $request->input('telefono');
        $comercio->whatsapp = $request->input('whatsapp');
        $comercio->f_alta = $request->input('fecha_alta');
        $comercio->f_baja = $request->input('fecha_baja');
        $comercio->tipo = $request->input('tipo');
        $comercio->estado = $request->input('estado');
        $comercio->agencia = $request->input('agencia_registro');
        $comercio->correo = $request->input('email');
        $comercio->nota = $request->input('nota');
        $comercio->titular = $request->input('ftitu');
        $comercio->banco = $request->input('banco');
        $comercio->cuenta = $request->input('cuenta');
        $comercio->dui = $request->input('dui');
        $comercio->tipo_cuenta = $request->input('tipo_cuenta');
        $comercio->chivo = $request->input('chivo');
        $comercio->tigo = $request->input('tigo');
        $comercio->empresa = $request->input('empresa');
        $comercio->tipo_contri = $request->input('tipo_contribuyente');
        $comercio->giro = $request->input('giro');
        $comercio->iva = $request->input('nit');
        $comercio->nrc = $request->input('ncr');
        $comercio->d_fiscal = $request->input('direccionf');
        //$comercio-> = $request->input('');
        $comercio->save();
        return redirect('/comercio');

    }

     public function vercomercio($id)
    {
        $comercio = Comercio::find($id);
        return view('comercio.vercomercio', compact('comercio'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comercio $comercio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comercio $comercio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comercio $comercio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comercio $comercio)
    {
        //
    }
}
