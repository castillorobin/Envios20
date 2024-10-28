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
use Illuminate\Support\Str;

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
    public function listadoticket()
    {
       // $pedidos = Cobro::all();
        $tickets = Ticketc::all(); 
        return view('envios.listadoticket', compact('tickets'));
    }

    public function detalleticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        $pedidos = Ticketc::where('codigo', $id)->get();
        return view('envios.detalleticket', compact('pedidos'));
    }
    public function personalizadoticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Personalizado")
        ->get();
        return view('envios.personalizadoticket', compact('pedidos'));
    }

    public function puntoticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Punto fijo")
        ->get();
        return view('envios.puntoticket', compact('pedidos'));
    }
    public function departamentalticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Personalizado departamental")
        ->get();
        return view('envios.departamentalticket', compact('pedidos'));
    }

    public function casilleroticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Casillero")
        ->get();
        return view('envios.casilleroticket', compact('pedidos'));
    }




    public function connombre(Request $request)
    {
       // $pedidos = Cobro::all();
       $comercio = $request->get('comercio') ;
       $pedidos = Envio::where('comercio', $comercio)->get();
       $comercioset = Comercio::where('comercio', $comercio)->get();
        $comercios = Comercio::all(); 
        return view('envios.pagoslistanombre', compact('comercios', 'pedidos', 'comercioset'));
    }

    public function listaticket()
    {
       // $pedidos = Cobro::all();
        //$comercios = Comercio::all(); 
        return view('envios.pagoslistaticket');
    }

    public function enviosdeticket()
    {
       // $pedidos = Cobro::all();
        //$comercios = Comercio::all(); 
        return view('envios.enviosdeticket');
    }

    public function enviosdeticketdatos(Request $request)
    {
        $comercio = $request->get('ticket') ;

        $envios = Envio::where('ticketc', $comercio)->get();

        return view('envios.enviosdeticketdatos', compact('envios', 'comercio'));
    }



    public function limpiarticket($comercio)
    {
        //$comercio = $request->get('ticket') ;

        $envios = Envio::where('ticketc', $comercio)->get();

        return view('envios.enviosdeticketdatos', compact('envios', 'comercio'));
    }



    public function enviosdeticketfiltro(Request $request)
    {
        $comercio = $request->get('ticketn') ;
        $estado = $request->get('filtro') ;

        $envios = Envio::where('ticketc', $comercio)
        ->where('estado', $estado)->get();

       // $enviop = Envio::where('ticketc', $comercio)
      //  ->where('estado', $estado)->exists();
/*
        if($enviop == 0){
            return view('envios.enviosdeticket');

        }else{
            return view('envios.enviosdeticketdatos', compact('envios'));
        }
            */
            return view('envios.enviosdeticketdatos', compact('envios', 'comercio'));
        
    }
 
    

    public function filtrandonombre(Request $request)
    {
        
        //$pedidos = Pedido::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get();
        //$repartidores = Repartidor::all();
        //$vendedores = Vendedor::all()
        $comerset = $request->input('comerset');
        $rango = $request->input('rango');
        $estado = $request->input('estado');

        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d', strtotime($fecha2)) ;
       //return ($fechacam);

       $pedidos = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])

       ->get();

       $comercios = Comercio::all(); 
       $comercioset = Comercio::where('comercio', $comerset)->get();
       return view('envios.pagoslistanombre', compact('comercios', 'pedidos', 'comercioset'));


    } 

    public function filtrandonombre2(Request $request)
    {
        
     
        $comerset = $request->input('comerset');
      
        $estado = $request->input('estado');
        $ticketc = $request->input('ticketc');

        if($estado=="todos"){
            $pedidos = Envio::where('ticketc', $ticketc)
                 
            ->get();
        }
        else{
            $pedidos = Envio::where('ticketc', $ticketc)
            ->where('estado', $estado)
     
            ->get();
        }

      

       $comercios = Comercio::all(); 
       $comercioset = Comercio::where('comercio', $comerset)->get();
       return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset'));


    } 

    public function conticket(Request $request)
    { 
       // $pedidos = Cobro::all();
       $comercio = $request->get('ticket') ;

       $pedidos = Envio::where('ticketc', $comercio)->get();
      
     //  return ($pedidos[0]->comercio);
       
        $comercios = Comercio::all(); 

        if(empty($pedidos[0]->comercio)){
            $comer = $comercios[0]->comercio;
            $comercioset = Comercio::where('comercio', $comer)->get();
        }else{
            $comer = $pedidos[0]->comercio;
            $comercioset = Comercio::where('comercio', $comer)->get();
        }
        

        return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset'));
        
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
