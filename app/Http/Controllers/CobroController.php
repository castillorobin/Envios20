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

            $ultimoid = Ticketc::latest('id')->first();
            $idcompr = $ultimoid->id + 1;
     
            $date = Carbon::now();
            $date = $date->format('Y');
            $factura = "$date".$idcompr;
     
        return view('envios.registroorden', compact('comercios','idcompr', 'factura', 'nota', 'pedidos', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));
    }

    public function imprimir(Request $request)
    {
        $pdf = PDF::loadView('envios.ticketpagos');
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,550);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

    }

    public function ticket(Request $request)
    {
        $pdf = PDF::loadView('envios.ticketpagos');
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,550);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

    }

    public function ticketcabeza(Request $request)
    {
        $codigo= $request->get('codigo');
        $comercios = Comercio::all(); 
        $nota=" ";
        $comercio = $request->get('comercio') ;
 
        $ticket = new Ticketc();
        $ticket->codigo = $request->get('codigo');
        $ticket->comercio = $request->get('comercio');
        $ticket->correo = $request->get('correo');
        $ticket->telefono = $request->get('telefono');
        $ticket->save();

        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        $precio1= $request->get('precio1');
        $precio2= $request->get('precio2');
        $precio3= $request->get('precio3');
        $precio4= $request->get('precio4');
        $precio5= $request->get('precio5');


        if ($request->filled('guia')) {
        
        $envio = new Envio();
        $envio->tipo = $request->get('tipo1');
        $envio->guia = $request->get('guia');
        $envio->cobro = "Pendiente";
        $envio->ticketc = $codigo;
        $envio->comercio = $request->get('comercio');
        $envio->save();

        $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();


        return view('envios.registroordenlista', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }

        if ($request->filled('guia2')) {
            $envio = new Envio();
            $envio->tipo = $request->get('tipo2');
            $envio->guia = $request->get('guia2');
            $envio->cobro = "Cobrado";
            $envio->ticketc = $codigo;
            $envio->comercio = $request->get('comercio');
            $envio->save();

            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();


        return view('envios.registroordenlistadepa', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

    
            }

            if ($request->filled('guia3')) {
                $envio = new Envio();
                $envio->tipo = $request->get('tipo3');
                $envio->guia = $request->get('guia3');
                $envio->cobro = "Cobrado";
                $envio->ticketc = $codigo;
                $envio->comercio = $request->get('comercio');
                $envio->save();

                
            $cobroperso = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado")
            ->get();
            $cobroperso = $cobroperso->count();
    
            $cobroperdepa = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado departamental")
            ->get();
            $cobroperdepa =  $cobroperdepa->count();
    
            $cobropfijo = Envio::where('ticketc', $codigo)
            ->where('tipo', "Punto fijo")
            ->get();
            $cobropfijo =  $cobropfijo->count();
    
            $cobrocasi = Envio::where('ticketc', $codigo)
            ->where('tipo', "Casillero")
            ->get();
            $cobrocasi =  $cobrocasi->count();
    
    
            return view('envios.registroordenlistapunto', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
        
                }
            
            if ($request->filled('guia4')) {
                    $envio = new Envio();
                    $envio->tipo = $request->get('tipo4');
                    $envio->guia = $request->get('guia4');
                    $envio->cobro = "Cobrado";
                    $envio->ticketc = $codigo;
                    $envio->comercio = $request->get('comercio');
                    $envio->save();

                    $cobroperso = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado")
                ->get();
                $cobroperso = $cobroperso->count();
        
                $cobroperdepa = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado departamental")
                ->get();
                $cobroperdepa =  $cobroperdepa->count();
        
                $cobropfijo = Envio::where('ticketc', $codigo)
                ->where('tipo', "Punto fijo")
                ->get();
                $cobropfijo =  $cobropfijo->count();
        
                $cobrocasi = Envio::where('ticketc', $codigo)
                ->where('tipo', "Casillero")
                ->get();
                $cobrocasi =  $cobrocasi->count();
        
        
                return view('envios.registroordenlistacasi', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
            
                    }

        

    }

    public function ticketpartes(Request $request)
    {
        $codigo= $request->get('codigo');
        $comercios = Comercio::all(); 
        $nota=" ";
        $comercio = $request->get('comercio') ;

     
        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        $precio1= $request->get('precio1');
        $precio2= $request->get('precio2');
        $precio3= $request->get('precio3');
        $precio4= $request->get('precio4');
        $precio5= $request->get('precio5');

        if ($request->filled('guia')) {
        $envio = new Envio();
        $envio->tipo = $request->get('tipo1');
        $envio->guia = $request->get('guia');
        $envio->cobro = "Pendiente";
        $envio->ticketc = $codigo;
        $envio->comercio = $request->get('comercio');
        $envio->save();

        
        $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();


        return view('envios.registroordenlista', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }

        if ($request->filled('guia2')) {
            $envio = new Envio();
            $envio->tipo = $request->get('tipo2');
            $envio->guia = $request->get('guia2');
            $envio->cobro = "Cobrado";
            $envio->ticketc = $codigo;
            $envio->comercio = $request->get('comercio');
            $envio->save();

            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();


        return view('envios.registroordenlistadepa', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
    
            }

            if ($request->filled('guia3')) {
                $envio = new Envio();
                $envio->tipo = $request->get('tipo3');
                $envio->guia = $request->get('guia3');
                $envio->cobro = "Cobrado";
                $envio->ticketc = $codigo;
                $envio->comercio = $request->get('comercio');
                $envio->save();

                $cobroperso = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado")
            ->get();
            $cobroperso = $cobroperso->count();
    
            $cobroperdepa = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado departamental")
            ->get();
            $cobroperdepa =  $cobroperdepa->count();
    
            $cobropfijo = Envio::where('ticketc', $codigo)
            ->where('tipo', "Punto fijo")
            ->get();
            $cobropfijo =  $cobropfijo->count();
    
            $cobrocasi = Envio::where('ticketc', $codigo)
            ->where('tipo', "Casillero")
            ->get();
            $cobrocasi =  $cobrocasi->count();
    
    
            return view('envios.registroordenlistapunto', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
        
                }
            
            if ($request->filled('guia4')) {
                    $envio = new Envio();
                    $envio->tipo = $request->get('tipo4');
                    $envio->guia = $request->get('guia4');
                    $envio->cobro = "Cobrado";
                    $envio->ticketc = $codigo;
                    $envio->comercio = $request->get('comercio');
                    $envio->save();

                    
                $cobroperso = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado")
                ->get();
                $cobroperso = $cobroperso->count();
        
                $cobroperdepa = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado departamental")
                ->get();
                $cobroperdepa =  $cobroperdepa->count();
        
                $cobropfijo = Envio::where('ticketc', $codigo)
                ->where('tipo', "Punto fijo")
                ->get();
                $cobropfijo =  $cobropfijo->count();
        
                $cobrocasi = Envio::where('ticketc', $codigo)
                ->where('tipo', "Casillero")
                ->get();
                $cobrocasi =  $cobrocasi->count();
        
        
                return view('envios.registroordenlistacasi', compact('comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

            
                    }
/*
        $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();


        return view('envios.registroordenlista', compact('comercios', 'ticketactual', 'nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi'));
*/
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
