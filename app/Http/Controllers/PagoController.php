<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Cobro;
use App\Models\Ticketc;
use Carbon\Carbon;
use App\Models\Envio;
use App\Models\Ticktpago; 
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
        $nota = " ";
        return view('envios.pagoslista', compact('nota','comercios'));
    }
    public function listadoticket()
    {
       // $pedidos = Cobro::all(); 
       // $tickets = Ticketc::all(); 
        return view('envios.listadoticket');
    }

    public function ticketdatos(Request $request)
    {
       
        $rango = $request->input('rango');

        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d', strtotime($fecha2)) ;

        $tickets = Ticketc::whereBetween('created_at', [$fechacam1, $fechacam2])
        ->get();

        return view('envios.listadoticketdatos', compact('tickets'));
    }

    public function reportepago()
    {
       // $pedidos = Cobro::all(); 
       // $tickets = Ticketc::all(); 
        return view('envios.reportepago');
    }

    public function rpagodatos(Request $request)
    {
        $rango = $request->input('rango');

        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d', strtotime($fecha2)) ;

        $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
        ->get();

        return view('envios.rpagodatos', compact('tickets'));
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
        $nota = " ";
        return view('envios.pagoslistanombre', compact('comercios', 'pedidos', 'comercioset', 'nota'));
    }

    public function listaticket()
    {
       // $pedidos = Cobro::all();
        //$comercios = Comercio::all(); 
        $nota = " ";
        return view('envios.pagoslistaticket', compact('nota'));
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
       $nota = " ";
       if($estado == "todos")
       {
        $pedidos = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->where('comercio', $comerset)->get();

       }else{
        $pedidos = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
       ->where('estado', $estado)
       ->where('comercio', $comerset)

       ->get();
       }
       if(empty($pedidos[0]->comercio)){
        
        $nota = "No hay envios con el estado seleccionado";

      

    }

 

       $comercios = Comercio::all(); 
       $comercioset = Comercio::where('comercio', $comerset)->get();
       return view('envios.pagoslistanombre', compact('comercios', 'pedidos', 'comercioset', 'nota'));


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
       $nota = " ";
        if(empty($pedidos[0]->comercio)){
            $pedidos = Envio::where('ticketc', $ticketc)->get();
            $nota = "No hay envios con el estado seleccionado";

            return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset', 'nota'));

        }else{
            return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset', 'nota'));
        }
      

       
      // return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset'));


    } 

    public function conticket(Request $request)
    { 
       // $pedidos = Cobro::all();
       $comercio = $request->get('ticket') ;

       $pedidos = Envio::where('ticketc', $comercio)->get();
      
     //  return ($pedidos[0]->comercio);
       
        $comercios = Comercio::all(); 
        $nota = " ";
        if(empty($pedidos[0]->comercio)){
            $comer = $comercios[0]->comercio;
            $comercioset = Comercio::where('comercio', $comer)->get();
            $nota = "El ticket no existe";
            return view('envios.pagoslistaticket', compact('nota'));
        }else{
            $comer = $pedidos[0]->comercio;
            $comercioset = Comercio::where('comercio', $comer)->get();
        }
        

        return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset', 'nota'));
        
    }

    public function pagoticket(Request $request)
    {
        $identrega = $request->get('entrega');
        $cajero = $request->get('cajero');
        $metodo = $request->get('metodo');
        $descu = $request->get('descuento');
        $sutota = $request->get('stota');
        $nota = $request->get('nota');
        $tota = $request->get('tota');
        $comercio = $request->get('comercio');



        $pedido = new Ticktpago();
        $pedido->comercio = $comercio;
        $pedido->descuento = $descu;
        $pedido->subtotal = $sutota;
        $pedido->total = $tota;
        $pedido->metodo = $metodo;
        $pedido->entrega = $request->get('entrega');
        $pedido->cambio = $request->get('cambio');
        $pedido->cajero = $cajero;
        $pedido->nota = $nota;
        $pedido->save();

        $ticketact = Ticktpago::latest('id')->first();


        $checked = $request->input('checked');
       $envios = Envio::query()->find($checked);

       if($envios){
        foreach($envios as $envio){
            
            $envio->pagoticket = $ticketact->id;
            $envio->pago = "Pagado";
            $envio->save();

            }
       }

        $pdf = PDF::loadView('envios.pagoticket', ['ticketact'=>$ticketact, 'envios'=>$envios]);
       
        $customPaper = array(0,0,360,750);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();
    }
    public function pagoticket2(Request $request)
    {
        $identrega = $request->get('entrega');
        $cajero = $request->get('cajero');
        $metodo = $request->get('metodo');
        $descu = $request->get('descuento');
        $sutota = $request->get('stota');
        $nota = $request->get('nota');
        $tota = $request->get('tota');
        $comercio = $request->get('comercio');


        $pedido = new Ticktpago();
        $pedido->comercio = $comercio;
        $pedido->descuento = $descu;
        $pedido->subtotal = $sutota;
        $pedido->total = $tota;
        $pedido->metodo = $metodo;
        $pedido->entrega = $request->get('entrega');
        $pedido->cambio = $request->get('cambio');
        $pedido->cajero = $cajero;
        $pedido->nota = $nota;
        $pedido->save();

        $ticketact = Ticktpago::latest('id')->first();


        $checked = $request->input('checked');
       $envios = Envio::query()->find($checked);

       if($envios){
        foreach($envios as $envio){
            
            $envio->pagoticket = $ticketact->id;
            $envio->pago = "Pagado";
            $envio->save();

            }
       }

       

        $pdf = PDF::loadView('envios.pagoticketnombre', ['ticketact'=>$ticketact, 'envios'=>$envios]);
       
        $customPaper = array(0,0,360,750);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();
    }

    public function exportarticket( $ticketc)
    {
        //Alert::message('Mensaje', 'Título opcional');

        $pedidos = Envio::where('ticketc', $ticketc)->get();
        $comercio = $pedidos[0]->comercio;
        $total = 0;
        $cantidad = 0;

        foreach($pedidos as $pedido){
            
            $total = $total + $pedido->total  ;
            
            $cantidad = $cantidad + 1;
            }

        $comerset = Comercio::where('comercio', $comercio)->get();
        $pdf = PDF::loadView('envios.exportarpagarticket', ['pedidos'=>$pedidos, 'comerset'=>$comerset, 'total'=>$total, 'cantidad'=>$cantidad]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();


    }

    public function exportarcomercio( $ticketc)
    {
        
        //Alert::message('Mensaje', 'Título opcional');

        //$pedidos = Envio::where('ticketc', $ticketc)->get();
        $pedidos = Envio::where('comercio', $ticketc)->get();
       // $comercio = $pedidos[0]->comercio;
        $total = 0;
        $cantidad = 0;

        foreach($pedidos as $pedido){
            
            $total = $total + $pedido->total  ;
            
            $cantidad = $cantidad + 1;
            }

        //$comerset = Comercio::where('comercio', $comercio)->get();
        $pdf = PDF::loadView('envios.exportarpagarcomercio', ['pedidos'=>$pedidos, 'total'=>$total, 'cantidad'=>$cantidad]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();


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
