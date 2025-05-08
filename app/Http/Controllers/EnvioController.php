<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Empleado;
use App\Models\Comercio;
use App\Models\Rutas;
use App\Models\Hestado;
use Carbon\Carbon;

use Illuminate\Support\Str;
use App\Models\Ticketc;
use App\Models\User;
 
class EnvioController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $vendedores = Vendedor::all();
        return view('envios.index', compact('vendedores'));
    }
    public function cancelar($id)
    {

        //$envio = Envio::where('guia', $id)->get();
        //$comer = $envio[0]->comercio;

        $ticket = Ticketc::where('codigo', $id)->get();
        $ticketid = $ticket[0]->id;

        Ticketc::find($ticketid)->delete();

        $envios = Envio::where('ticketc', $id)->get();

        foreach($envios as $envio){
            $envioid = $envio->id;
            Envio::find($envioid)->delete();
        }
       
        
       //return route('registro-orden');
       return redirect()->route('indexcobro');
        //return view('envios.detalle', compact('envio', 'comercio', 'enviostotal', 'entregados', 'noentregados'));
    }
    public function detalle($id)
    {

        $envio = Envio::where('guia', $id)->get();
        $idhisto = $envio[0]->id;
        $comer = $envio[0]->comercio;
        $comercio = Comercio::where('comercio', $comer)->get();
        //$vendedores = Vendedor::all();
        $enviostotal = Envio::where('comercio', $comer)->get()->count();
        $entregados = Envio::where('comercio', $comer)->
                       where('estado', "Entregado")->get()->count();
        $noentregados = Envio::where('comercio', $comer)->
                       where('estado', "No entregado")->get()->count();
        $historial = Hestado::where('idenvio', $idhisto)->get();

        return view('envios.detalle', compact('envio', 'comercio', 'enviostotal', 'entregados', 'noentregados', 'historial'));
    }
    public function editardetalle($id)
    {

        $envio = Envio::where('guia', $id)->get(); 
        $comer = $envio[0]->comercio;
        $comercio = Comercio::where('comercio', $comer)->get();
        //$vendedores = Vendedor::all();
        $enviostotal = Envio::where('comercio', $comer)->get()->count();
        $entregados = Envio::where('comercio', $comer)->
                       where('estado', "Entregado")->get()->count();
        $noentregados = Envio::where('comercio', $comer)->
                       where('estado', "No entregado")->get()->count();


        return view('envios.editardetalle', compact('envio', 'comercio', 'enviostotal', 'entregados', 'noentregados'));
    }
    public function detalleeditando(Request $request)
    {
        $id = $request->get('iden');

        $envios = Envio::find($id);

        //$envio->guia = $request->get('n_guia');

        if ($envios->estado != $request->get('estado')) {
            $hesta = new Hestado();
        $hesta->idenvio = $id;
        $hesta->estado = $request->get('estado');
        $hesta->save();
         }



         $envios->destinatario = $request->get('destinatario');
         $envios->direccion = $request->get('direccion');
        //$envio->telefono = $request->get('telefonop');
         $envios->tipo = $request->get('tipo');
         $envios->precio = $request->get('precio');
         $envios->envio = $request->get('envio');
         $envios->total = $request->get('total'); 
         $envios->cobro = $request->get('cobro');
         $envios->estado = $request->get('estado');
         $envios->pago = $request->get('pago');
         $envios->cambioasi = 0;
        //$envio->punto = $request->get('punto');
         $envios->fecha_entrega = $request->get('fechae');
         $envios->nota = $request->get('nota');

         

        $envios->save();

        

        $guia = $request->get('guia');

        $envio = Envio::where('guia', $guia)->get();
        $comer = $envio[0]->comercio;
        $comercio = Comercio::where('comercio', $comer)->get();
        //$vendedores = Vendedor::all();
        $enviostotal = Envio::where('comercio', $comer)->get()->count();
        $entregados = Envio::where('comercio', $comer)->
                       where('estado', "Entregado")->get()->count();
        $noentregados = Envio::where('comercio', $comer)->
                       where('estado', "No entregado")->get()->count();

        $historial = Hestado::where('idenvio', $id)->get();
        return view('envios.detalle', compact('envio', 'comercio', 'enviostotal', 'entregados', 'noentregados', 'historial'));

    }
    public function filtrandoenvios(Request $request)
    {
        $rango = $request->input('rango'); 
        $estado = $request->input('estado');
        $rangol = $rango;
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d', strtotime($fecha2)) ;
       //return ($fechacam);
/*
       if($estado != "todo")
       {
       // $envios = $envios->intersect(Envio::whereIn('estado', "Creado")->get());    
       $envios = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->where('estado', $estado)
       ->get();

       }else{
        $envios = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])

        ->get();
 
        }
*/
        $envios = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->get();
       return view('envios.envifiltrado', compact( 'envios','rangol'));


    } 

    public function filtrandoenvios2(Request $request)
    {
        $rango = $request->input('rangolimp');
        $estado = $request->input('estado');
        $rangol = $rango;
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d', strtotime($fecha2)) ;
       //return ($fechacam);

       if($estado == "todo")
       {
        $envios = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->get();
      
       }else{
        $envios = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->where('estado', $estado)
       ->get();
 
        }    

       // $envios = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])

        //->get();

       //$comercios = Comercio::all(); 
       //$comercioset = Comercio::where('comercio', $comerset)->get();
       return view('envios.envifiltrado', compact( 'envios','rangol'));


    } 


    public function crearenvio()
    {
        $comercios = Comercio::all();
        return view('envios.crearenvio', compact('comercios'));
    }


    public function enviopd()
    {

        $comercios = Comercio::all();
        return view('envios.crearenviopd', compact('comercios'));
    }

    public function enviopf()
    {

        $comercios = Comercio::all();
        return view('envios.crearenviopf', compact('comercios'));
    }

    public function envioca()
    { 

        $comercios = Comercio::all();
        
        return view('envios.crearenvioca', compact('comercios'));
    }

    public function envioli()
    {

        //$envios = Envio::all();
        $envios = Envio::whereDate('fecha_entrega', Carbon::today())->get();
        return view('envios.envi', compact('envios'));
    }

    public function envioguardarp(Request $request)
    {
        $envio = new Envio();

        $envio->guia = $request->get('n_guia');
        $envio->destinatario = $request->get('destinatariop');
        $envio->comercio = $request->get('comercio');
        $envio->direccion = $request->get('direccionp');
        $envio->telefono = $request->get('telefonop');
        $envio->cobro = $request->get('cenvio');
        $envio->precio = $request->get('precio');
        $envio->envio = $request->get('envio');
        $envio->total = $request->get('total');
        $envio->estado = $request->get('estado_enviop');
        $envio->pago = $request->get('estado_pagop');
        $envio->tipo = $request->get('tipo_enviop');
        $envio->fecha_entrega = $request->get('fecha_entregap');
        $envio->nota = $request->get('nota');

        $envio->save();
        return redirect('/registro-orden');
    }

    public function envioguardarpd(Request $request)
    {
        $envio = new Envio();

        $envio->guia = $request->get('n_guia');
        $envio->destinatario = $request->get('destinatario');
        $envio->comercio = $request->get('comercio');
        $envio->direccion = $request->get('direccion');
        $envio->telefono = $request->get('telefono');
        $envio->cobro = $request->get('cenvio2');
        $envio->precio = $request->get('precio2');
        $envio->envio = $request->get('envio2');
        $envio->total = $request->get('total2');
        $envio->estado = $request->get('estado_envio');
        $envio->pago = $request->get('estado_pago');
        $envio->tipo = $request->get('tipo_envio');
        $envio->fecha_entrega = $request->get('fecha_entrega');
        $envio->nota = $request->get('nota');

        $envio->save();
        return redirect('/envios/lista');
    }

    public function envioguardarpf(Request $request)
    {
        $envio = new Envio();

        $envio->guia = $request->get('n_guia');
        $envio->destinatario = $request->get('destinatario');
        $envio->comercio = $request->get('comercio');
        $envio->direccion = $request->get('direccion');
        $envio->telefono = $request->get('telefono');
        $envio->cobro = $request->get('cenvio3');
        $envio->precio = $request->get('precio3');
        $envio->envio = $request->get('envio3');
        $envio->total = $request->get('total3');
        $envio->estado = $request->get('estado_envio');
        $envio->pago = $request->get('estado_pago');
        $envio->tipo = $request->get('tipo_envio');
        $envio->fecha_entrega = $request->get('fecha_entrega');
        $envio->nota = $request->get('nota');

        $envio->save();
        return redirect('/envios/lista');
    }
    public function envioguardarca(Request $request)
    {
        $envio = new Envio();

        $envio->guia = $request->get('n_guia');
        $envio->destinatario = $request->get('destinatario');
        $envio->comercio = $request->get('comercio');
        $envio->direccion = $request->get('direccion');
        $envio->telefono = $request->get('telefono');
        $envio->cobro = $request->get('cenvio4');
        $envio->precio = $request->get('precio4');
        $envio->envio = $request->get('envio4');
        $envio->total = $request->get('total4');
        $envio->estado = $request->get('estado_envio');
        $envio->pago = $request->get('estado_pago');
        $envio->tipo = $request->get('tipo_envio');
        $envio->fecha_entrega = $request->get('fecha_entrega');
        $envio->nota = $request->get('nota');

        $envio->save();
        return redirect('/envios/lista');
    }

    public function conguia(Request $request)
    {
        $puntos = Rutas::all();
        $guia= $request->get('n_guia');
        $pedido = Envio::where('guia', $guia)->get();

        $nota = " "; 
        if($pedido->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            return view('envios.registroconguia', compact('nota'));
        }

        if($pedido[0]->registro != 0 ){
            $nota = "La Guía ya ha sido registrada"; 
            return view('envios.registroconguia', compact('nota'));
        }



        return view('envios.registroconguiadatos', compact('pedido', 'puntos', 'nota'));

    }
    public function guardarconguia(Request $request, $id)
    {
        $punto = $request->get('punto');
        
        $envio = Envio::find($id);

        

        if ($punto) {
           // dd($punto);
            $rutas = Rutas::where('id', $punto)->get();
            $envio->punto = $request->get('punto');
            $envio->direccion = $rutas[0]->punto;

        }else{
            $envio->direccion = $request->get('direccionp');
        }





        //$envio->guia = $request->get('n_guia');
        $envio->destinatario = $request->get('destinatariop');
        
        $envio->telefono = $request->get('telefonop');
       // $envio->cobro = $request->get('cenvio');
        $envio->precio = $request->get('precio');
        
        $envio->envio = $request->get('envio');
        $envio->total = $request->get('total'); 
        $envio->estado = "Creado";
        $envio->pago = $request->get('estado_pago');
        $envio->punto = $request->get('punto');
        $envio->fecha_entrega = $request->get('fecha_entregap');
        $envio->nota = $request->get('nota');
        $envio->registro = 1;
        $envio->save();
       // return redirect('/envios/lista');
       $hesta = new Hestado();
       $hesta->idenvio = $envio->id;
       $hesta->estado = "Creado";
       $hesta->usuario = " ";
       $hesta->save();
        
        //$pedido = Envio::where('guia', $guia)->get();
        $nota = " ";
        return view('envios.registroconguia', compact('nota'));
        //return view('envios.registroconguia');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function indexdigitadofiltro($comercio)
    {
        //$pedidos = Pedido::all();
        //$pedidos = Pedido::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get();
        $pedidos = Envio::where('vendedor', $comercio)->get();
        $vendedores = Vendedor::all();

        $nota = ' ';
        $entrega = 0;
        $reprogra = 0;
        $noentrega = 0;
        $creado = 0;
        $ruta = 0;
        foreach ($pedidos as $pedido) {
            if ($pedido->estado == 'Entregado') {
                $entrega += 1;
            }
            if ($pedido->estado == 'Reprogramado') {
                $reprogra += 1;
            }
            if ($pedido->estado == 'No retirado') {
                $noentrega += 1;
            }
            if ($pedido->estado == 'Creado') {
                $creado += 1;
            }
            if ($pedido->estado == 'En ruta') {
                $ruta += 1;
            }
        }

        return view('envios.indexdigitadofiltro', compact('pedidos', 'vendedores', 'nota', 'entrega', 'reprogra', 'noentrega', 'creado', 'comercio', 'ruta'));
    }

    public function reporteganancias()
    { 

        $repartidores = Empleado::all();
        
        return view('envios.reporteganancias', compact('repartidores'));
    }

    public function reportegananciasdatos(Request $request)
    { 
        $desde = $request->input('desde');
        $hasta = $request->input('hasta');
        $tipo = $request->input('tipo');
        $estado = $request->input('estado');
        $repartidorsolo = $request->input('repartidor');

        $envios = Envio::whereBetween('fecha_entrega', [$desde, $hasta])
        ->get();

        //dd($estado);
        if ($estado !="Todos"){
           // $envios = $envios->intersect(Envio::whereIn('estado', $estado)->get());
           $envios = Envio::whereBetween('fecha_entrega', [$desde, $hasta])->
            where('estado', $estado)->get();

        }
        if ($tipo !="Todos"){
            // $envios = $envios->intersect(Envio::whereIn('estado', $estado)->get());
           // $envios = Envio::whereBetween('fecha_entrega', [$desde, $hasta])->
             //where('tipo', $tipo)->get();
             $envios = $envios->intersect(Envio::whereIn('tipo', [$tipo])->get());
         }
         if ($repartidorsolo !="Todos"){
            // $envios = $envios->intersect(Envio::whereIn('estado', $estado)->get());
           // $envios = Envio::whereBetween('fecha_entrega', [$desde, $hasta])->
             //where('tipo', $tipo)->get();
             $envios = $envios->intersect(Envio::whereIn('repartidor', [$repartidorsolo])->get());
         }
            
        $totalperso= 0;
        $totalfijo= 0;
        $totalcasillero= 0;
        $totalpersodepa= 0;
        $totaltodos= 0;


        foreach($envios as $envio){
            if ($envio->tipo == "Personalizado"){
                $totalperso += $envio->total;
            }
            if ($envio->tipo == "Punto fijo"){
                $totalfijo += $envio->total;
            }
            if ($envio->tipo == "Casillero"){
                $totalcasillero += $envio->total;
            }
            if ($envio->tipo == "Personalizado departamental"){
                $totalpersodepa += $envio->total;
            }
            if ($tipo == "Todos"){
                $totaltodos += $envio->total;
            }

            
           // Envio::find($envioid)->delete();
        }


        $repartidores = Empleado::all();
        
        return view('envios.reportegananciasdatos', compact('repartidores', 'desde', 'hasta', 'tipo', 'estado', 'repartidorsolo', 'totalperso', 'totalfijo', 'totalcasillero', 'totalpersodepa', 'totaltodos'));
    }

    public function reporteingresos()
    { 

        $repartidores = User::all();
        
        return view('envios.reporteingresos', compact('repartidores'));
    }

    public function reporteingresosdatos(Request $request)
    { 
        $desde = $request->input('desde');
        $hasta = $request->input('hasta');
        $usuario = $request->input('usuario');

        $envios = Envio::whereBetween('fecha_entrega', [$desde, $hasta])
        ->get();

        $totalperso= 0;
        $totalfijo= 0;
        $totalcasi= 0;
        $totalpf= 0;
        $totalguia= 0;


        foreach($envios as $envio){
            if ($envio->tipo == "Personalizado"){
                $totalperso += $envio->envio;
            }
            if ($envio->tipo == "Punto fijo"){
                $totalfijo += $envio->envio;
            }
            if ($envio->tipo == "Casillero"){
                $totalperso += $envio->envio;
            }
            if ($envio->tipo == "Personalizado departamental"){
                $totalfijo += $envio->envio;
            }
                        
           // Envio::find($envioid)->delete();
        }
        $repartidores = User::all();
        //$repartidores = Empleado::all();
        
        return view('envios.reporteingresosdatos', compact('repartidores', 'totalperso', 'totalfijo', 'totalcasi', 'totalpf'));
    }





    
}
