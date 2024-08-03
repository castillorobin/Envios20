<?php

namespace App\Http\Controllers;
 
use App\Models\Entrega;
use App\Models\Envio;
use Illuminate\Http\Request;
//use App\Models\Entrega;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('envios.entregas');
    }
    public function agregar(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Entrega();
        //$ticket->codigo = $request->get('codigo');
        $ticket->save();
        $actualid = Entrega::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->entrega = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('entrega', $actual)
        ->get();

        
        return view('envios.entregasagregar', compact('actual', 'pedidos'));
    }

    public function agregarparte(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('entrega') ;

        $envio = Envio::where('guia', $guia)
        ->get();
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->entrega = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('entrega', $actual)
        ->get();

        
        return view('envios.entregasagregar', compact('actual', 'pedidos'));
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
    public function show(Entrega $entrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrega $entrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrega $entrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrega $entrega)
    {
        //
    }
}
