<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Cobro;
use App\Models\Ticketc;
use Carbon\Carbon;
use App\Models\Envio;
use PDF;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $pedidos = Cobro::all();
        $comercios = Comercio::all(); 
        return view('envios.pagoslista', compact('comercios'));
    }
    public function connombre(Request $request)
    {
       // $pedidos = Cobro::all();
       $comercio = $request->get('comercio') ;
       $pedidos = Envio::where('comercio', $comercio)->get();
        $comercios = Comercio::all(); 
        return view('envios.pagoslistanombre', compact('comercios', 'pedidos'));
    }

    public function listaticket()
    {
       // $pedidos = Cobro::all();
        //$comercios = Comercio::all(); 
        return view('envios.pagoslistaticket');
    }

    public function conticket(Request $request)
    {
       // $pedidos = Cobro::all();
       $comercio = $request->get('ticket') ;
       $pedidos = Envio::where('ticketc', $comercio)->get();
        $comercios = Comercio::all(); 
        return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos'));
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
