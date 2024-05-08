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
        $comer=" ";
        $cobrodepa = Cobro::where('tipo', "Departamental")->get();
        $cobrodepa = $cobrodepa->count();
        $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
            $cobroperdepa = $cobroperdepa->count();
            $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
            $cobropfijo = $cobropfijo->count();
            $cobrocasi = Cobro::where('tipo', "Casillero")->get();
            $cobrocasi = $cobrocasi->count();
        return view('envios.registroorden', compact('comercios', 'nota', 'pedidos', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));
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
            $cobrodepa = Cobro::where('tipo', "Departamental")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
            $cobroperdepa = $cobroperdepa->count();
            $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
            $cobropfijo = $cobropfijo->count();
            $cobrocasi = Cobro::where('tipo', "Casillero")->get();
            $cobrocasi = $cobrocasi->count();
            $comer = $request->get('comerci');

            return view('envios.registroorden', compact('pedidos', 'nota','comercios', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));


        }else{

            $pedidoadd->guia = $request->get('guia');
            $pedidoadd->comercio = $request->get('comerci');
            $pedidoadd->tipo = $request->get('tipo');
            $pedidoadd->save();
            $cobrodepa = Cobro::where('tipo', "Departamental")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
            $cobroperdepa = $cobroperdepa->count();
            $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
            $cobropfijo = $cobropfijo->count();
            $cobrocasi = Cobro::where('tipo', "Casillero")->get();
            $cobrocasi = $cobrocasi->count();
            $nota=" ";
            $pedidos = Cobro::all();
            $comercios = Comercio::all();
            $comer = $request->get('comerci');
            return view('envios.registroorden', compact('pedidos', 'nota','comercios', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));


        }




    }

    public function limpiar()
    {
        $marca=Cobro::all();
        foreach($marca as $mar){
        $mar->delete();
     }
     return redirect('/registro-orden');
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
