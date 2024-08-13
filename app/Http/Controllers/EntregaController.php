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
    
    public function listadoentregas()
    {
        $tickets = Entrega::all();
        
        return view('envios.listadoentregas', compact('tickets'));
    }


    
    public function agregar(Request $request)

    
    {
        $guia = $request->get('guia') ;

        //return ($guia);

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
    public function limpiar($id)
    {
        $pedido = Envio::find($id);
        $pedido->entrega = "";
        $pedido->save();
        return redirect()->back();
        //return view('envios.departamentalticket', compact('pedidos'));
    }

    public function ticketentrega(Request $request)
    {
        $identrega = $request->get('entrega2');
        $cajero = $request->get('cajero');
        $metodo = $request->get('metodo');
        $descu = $request->get('descu');
        $sutota = $request->get('sutota');
        $nota = $request->get('nota');
        $tota = $request->get('tota');


        $pedido = Entrega::find($identrega);
        $pedido->cajero = $cajero;
        $pedido->metodo = $metodo;
        $pedido->desceunto = $descu;
        $pedido->nota = $nota;
        $pedido->subtotal = $sutota;
        $pedido->total = $tota;
        $pedido->save();


        $ticketact = Entrega::where('id', $identrega)
        ->get();

        $pdf = PDF::loadView('envios.ticketentrega', ['ticketact'=>$ticketact]);
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,550);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

        //return view('envios.entregas');
        //return redirect()->back();
        //return view('envios.departamentalticket', compact('pedidos'));
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
