<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Envio;
use App\Models\Rutas;
use App\Models\Asignar;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $envios = Envio::all(); 
        return view('stocks.seleccionarzona');
    }
    public function zonadatos(Request $request)
    {
        $id = $request->get('guia') ;
        $envio = Envio::where('guia', $id)->get();
        $idpunto = $envio[0]->punto;
        $punto = Rutas::where('id', $idpunto)->get();
        return view('stocks.zonadatos', compact('envio', 'punto'));
/*
        if($envio[0]->punto != NULL){
        
        return view('stocks.zonadatos', compact('envio', 'punto'));
        }else{

            $punto[0]->id = 1;
            $punto[0]->zona = " "; 
            $punto[0]->ruta = " ";
            $punto[0]->punto = " ";
            $punto[0]->numero = " ";

            return view('stocks.zonadatos', compact('envio', 'punto'));
        }

*/
    } 

    public function puntodatos(Request $request)
    {
        $id = $request->get('guia') ;
        $envio = Envio::where('guia', $id)->get();
        $idpunto = $envio[0]->punto;
        $punto = Rutas::where('id', $idpunto)->get();
        return view('stocks.puntodatos', compact('envio', 'punto'));
/*
        if($envio[0]->punto != NULL){
        
        return view('stocks.zonadatos', compact('envio', 'punto'));
        }else{

            $punto[0]->id = 1;
            $punto[0]->zona = " "; 
            $punto[0]->ruta = " ";
            $punto[0]->punto = " ";
            $punto[0]->numero = " ";

            return view('stocks.zonadatos', compact('envio', 'punto'));
        }

*/
    }

    public function agregarguia(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Asignar();
        $ticket->save();

        $actualid = Asignar::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();
 
        //$pedido = Envio::where('guia', $guia)->get();
/*
        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
           
        }
            */
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->asignado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('guia', $guia)
        ->get();

        
        return view('stocks.asignardatos', compact('pedidos', 'actual' ));
    }

    public function agregarmasguia(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('asignum') ;
/*
        $ticket = new Asignar();
        $ticket->save();

        $actualid = Asignar::latest('id')->first();
        $actual = $actualid->id;
*/
        $envio = Envio::where('guia', $guia)
        ->get();
 
        //$pedido = Envio::where('guia', $guia)->get();
/*
        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
           
        }
            */
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->asignado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('asignado', $actual)
        ->get();

        
        return view('stocks.asignardatos', compact('pedidos', 'actual' ));
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
