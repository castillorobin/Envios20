<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Cobro;

class CobroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Cobro::all();
        $comercios = Comercio::all();
        $nota=" ";
        return view('envios.registroorden', compact('comercios', 'nota', 'pedidos'));
    }

    public function agregar(Request $request)
    {
        $guia = $request->get('guia') ;
        $pedidoesta = Cobro::find($guia);
        $pedidos = new Cobro();
        $pedidoadd = new Cobro(); 

        if(Cobro::where('guia', $guia )->exists()){
            $nota="Guía Duplicada";
            $pedidos = Cobro::all();
            $comercios = Comercio::all();
            return view('envios.registroorden', compact('pedidos', 'nota','comercios'));

        }else{

            $pedidoadd->guia = $request->get('guia');
            $pedidoadd->comercio = "comercio prueba";
            $pedidoadd->tipo = $request->get('tipo');
            $pedidoadd->save();

            $nota=" ";
            $pedidos = Cobro::all();
            $comercios = Comercio::all();
            return view('envios.registroorden', compact('pedidos', 'nota','comercios'));


        }




    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
