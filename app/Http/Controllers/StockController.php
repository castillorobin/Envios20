<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Request;
use App\Models\Stock;
use App\Models\Envio;
use App\Models\Rutas;
use App\Models\Asignar;
use App\Models\Empleado;
use App\Models\Hestado;
use App\Models\User;
use App\Models\devolucion;
use App\Models\Orden;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Agencia;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $envios = Envio::all(); 
        $nota = " ";
        return view('stocks.seleccionarzona', compact('nota')); 
    }
    public function buscarcaja() 
    {
       
        $nota = " ";
        return view('stocks.buscarcaja'); 
    }

    public function paquetesasignados() 
    {
       
        $nota = " ";
        $empleados = Empleado::all(); 
        return view('stocks.paquetesasignados', compact('empleados')); 
    }

    public function paquetesasignadosdatos(Request $request) 
    {
        $rango = $request->input('rango');
       // $desde = $request->input('desde');
       // $hasta = $request->input('hasta');
       $rangol = $rango;
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d', strtotime($fecha2)) ;
        $repartidorsolo = $request->input('repartidor');

        //$envios = Envio::whereBetween('fechaasigna', [$desde, $hasta])
        //->get();

        if ($repartidorsolo !="todos"){
            // $envios = $envios->intersect(Envio::whereIn('estado', $estado)->get());
           // $envios = Envio::whereBetween('fechaasigna', [$desde, $hasta])
            $envios = Envio::whereBetween('fechaasigna', [$fechacam1, $fechacam2])->
             where('repartidor', $repartidorsolo)->get();
            // dd($repartidorsolo);
            // $envios = $envios->intersect(Envio::whereIn('repartidor', [$repartidorsolo])->get());
         }else{
            $envios = Envio::whereBetween('fechaasigna', [$fechacam1, $fechacam2])
        ->get();
         }
       
        $nota = " ";
        $empleados = Empleado::all(); 
        return view('stocks.paquetesasignadosdatos', compact('empleados', 'envios')); 
    }
    
    public function buscarcajadatos(Request $request) 
    {
        $id = $request->get('guia') ;
        $pedidos = Envio::where('caja', $id)->get();
       
        $nota = " ";
        return view('stocks.buscarcajadatos', compact('pedidos')); 
    }
    public function zonadatos(Request $request)
    {
        $id = $request->get('guia') ;
        $envio = Envio::where('guia', $id)->get();
        
        if($envio->isEmpty()){
            //dd("no hay envio");
            $nota = "La Guía que se ingreso no existe"; 
            return view('stocks.seleccionarzona', compact('nota')); 

        }
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
        if($envio->isEmpty()){
            //dd("no hay envio"); 
            $nota = "La Guía que se ingreso no existe"; 
            return view('ruta.listapuntos', compact('nota'));

        }

        $idpunto = $envio[0]->punto;
        $pedidos = Rutas::where('id', $idpunto)->get();
        $nota = " ";
        return view('ruta.listapuntosdatos', compact('envio', 'pedidos', 'nota'));

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

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.asignar', compact('nota',));
        }
            

        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->asignado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('guia', $guia)
        ->get();
        $agencias = Agencia::all();
        
        return view('stocks.asignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function agregarmasguia(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('asignum') ;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            $pedidos = Envio::where('asignado', $actual)
        ->get();

        
        return view('stocks.asignardatos', compact('pedidos', 'actual', 'nota' ));
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->asignado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('asignado', $actual)
        ->get();

        $agencias = Agencia::all();
        return view('stocks.asignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function guardarasignar(Request $request)
    {
       
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $cajasuelto = $request->get('cajasuelto');
        $caja = $request->get('caja');
        $rack = $request->get('rack');
        $nivel = $request->get('nivel');
        $tarima = $request->get('tarima');
//dd($tarima);
        $racks = $request->get('racks');
        $nivels = $request->get('nivels');
        $tarimas = $request->get('tarimas');

        $actual = $request->get('asignum2');

        $envios = Envio::where('asignado', $actual)->get();
        foreach($envios as $envio){

            $envio->ubicacion = $cajasuelto; 

            if($cajasuelto=="caja"){
                $envio->rack = $rack;
            $envio->nivel = $nivel;
            $envio->caja = $caja;
            $envio->tarima = $tarima;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 

            if($cajasuelto=="suelto"){
            $envio->rack = $racks;
            $envio->nivel = $nivels;
            $envio->caja = NULL;
            $envio->tarima = $tarimas;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 
            

            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Asignado";
            $hesta->usuario = $usuario;
            $hesta->save();


        }
        $nota = " "; 

        return view('stocks.asignar', compact('nota' ));



        
    }

    public function cambiar()
    {
        $nota = " "; 
        return view('stocks.cambiarasignar', compact('nota' ));
    }

    public function cambiarguia(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Asignar();
        $ticket->save();

        $actualid = Asignar::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.cambiarasignar', compact('nota',));
        }
 
        $envioid= $envio[0]->id ;
 
        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('guia', $guia)
        ->get();

        $agencias = Agencia::all();

        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }
    public function agregarmascambiarguia(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('asignum') ;

        $envio = Envio::where('guia', $guia)
        ->get();

         $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $agencias = Agencia::all();
        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual', 'nota', 'agencias' ));
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $agencias = Agencia::all();
        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }
    public function guardarcambiarguia(Request $request)
    {
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $cajasuelto = $request->get('cajasuelto');

        
        $caja = $request->get('caja');
        $rack = $request->get('rack');
        $nivel = $request->get('nivel');
        $tarima = $request->get('tarima');

        $racks = $request->get('racks');
        $nivels = $request->get('nivels');
        $tarimas = $request->get('tarimas');

        $id = $request->get('asignum2');

        //dd($id);

        $envios = Envio::where('cambiando', $id)
        ->get();


        foreach ($envios as $envio) {
            # code...
      
        //$envio->cambiando = $actual;
        if($caja){
            $envio->caja = $caja;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
           
        }
        if($rack){
            $envio->rack = $rack;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
           
        }

        if($nivel){
            $envio->nivel = $nivel;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
        }

        if($tarima){
            $envio->tarima = $tarima;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
           // dd($cajasuelto);
        }

/*suelto*/////////
        if($racks){
            $envio->rack = $racks;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            $envio->caja = NULL;
        }

        if($nivels){
            $envio->nivel = $nivels;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            $envio->caja = NULL;
        }

        if($tarimas){
            $envio->tarima = $tarimas;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
          //  dd($cajasuelto);
          $envio->caja = NULL;
        }

        $envio->save();

        $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Cambiada";
            $hesta->usuario = $usuario;
            $hesta->save();

  }





        $nota = " "; 
        
        return view('stocks.cambiarasignar', compact('nota' ));
    }

    public function asignarrepartidor()
    {
       // dd( Carbon::today());
        $nota = " "; 
        return view('stocks.asignarrepartidor', compact('nota')); 
    }
    public function agregarrepartidor(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Asignar();
        $ticket->save();

        $actualid = Asignar::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            return view('stocks.asignarrepartidor', compact('nota'));
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $empleados = Empleado::all(); 
        $agencias = Agencia::all();
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('stocks.asignarrepartidordatos', compact('pedidos', 'actual', 'empleados', 'nota', 'agencias', 'empleado'));
    }

    public function agregarrepartidorlote(Request $request)
    {
        $guia = $request->get('guia') ;
        
        $actual = $request->get('asignum') ;;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 

            $pedidos = Envio::where('cambiando', $actual)
        ->get();
        $empleados = Empleado::all(); 
            //return view('stocks.asignarrepartidor', compact('nota'));
            $agencias = Agencia::all();
            $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('stocks.asignarrepartidordatos', compact('pedidos', 'actual', 'empleados', 'nota', 'agencias', 'empleado'));
            
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $empleados = Empleado::all(); 
  $agencias = Agencia::all();
  $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('stocks.asignarrepartidordatos', compact('pedidos', 'actual', 'empleados', 'nota', 'agencias', 'empleado'));
    }


    public function asignarrepartidorcaja()
    {
        return view('stocks.asignarrepartidorcaja');
    }

    public function agregarrepartidorcaja(Request $request)
    {
        $guia = $request->get('guia') ;

        $pedidos = Envio::where('caja', $guia)
        ->get();
        
        if($pedidos->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.asignarrepartidorcaja');
        }
        
        $empleados = Empleado::all(); 
$agencias = Agencia::all();
        return view('stocks.asignarrepartidorcajadatos', compact('pedidos', 'empleados', 'agencias'));
    }

    public function guardarasignarrepartidor(Request $request)
    {
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $repartidor = $request->get('repartidor');
        $guia = $request->get('guia2');
        $ruta = $request->get('ruta');

        $envios = Envio::where('cambiando', $guia)
        ->get();


        foreach($envios as $envio){

            $envio->repartidor = $repartidor;
            $envio->estado = "En ruta";
            $envio->cambioasi = 0;
            $envio->ruta = $ruta;
           // dd( Carbon::today());
            $envio->fechaasigna = Carbon::today();
            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "En ruta";
            $hesta->nombre = $repartidor;
            $hesta->usuario = $usuario;
            $hesta->save();

        }
        
       // return view('stocks.asignarrepartidorcaja');

       $nota = " "; 
        return view('stocks.asignarrepartidor', compact('nota'));
    }
    public function guardarasignarrepartidorcaja(Request $request)
    {
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $repartidor = $request->get('repartidor');
        $caja = $request->get('caja6');
//dd($caja);

        $envios = Envio::where('caja', $caja)
        ->get();


        foreach($envios as $envio){
             $envio->empleados()->sync($request->repartidor);
           // $envio->repartidor = $repartidor;
            $envio->estado = "En ruta";
            $envio->cambioasi = 0;
            $envio->fechaasigna = Carbon::today();

            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "En ruta";
            $hesta->save();
        }
        
        return view('stocks.asignarrepartidorcaja');
    }

    public function agregarfoto() 
    {
        //$envios = Envio::all(); 
        $nota = " ";
        return view('stocks.agregarfoto', compact('nota'));
    }

    public function agregarguiafoto(Request $request) 
    {
        //$envios = Envio::all(); 
        $guia = $request->get('guia') ;
        $envio = Envio::where('guia', $guia)
        ->get();
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.agregarfoto', compact('nota',));
        }
        $nota = " ";
        return view('stocks.agregarfotodatos', compact('nota', 'envio'));
    }
 
    public function guardandofoto23(Request $request) 
    {
        $foto1 = $request->file("foto1");
        dd($foto1);
    }
    

    public function guardandofoto(Request $request) 
    {
        $guia = $request->get('guia2') ;    
        $foto1 = $request->file("foto1");
        //dd($foto1);
        if ($request->hasFile('foto1')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto1");
            $nombreimagen = "foto1" . Str::slug(time()) . "." . $imagen->guessExtension();
            //dd($request->all());
            //dd($envio);
            $envio->foto1 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        }   
        //dd($request->file("foto2"));
        if ($request->hasFile('foto2')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto2");
            $nombreimagen = "foto2" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto2 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        }   
        if ($request->hasFile('foto3')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto3");
            $nombreimagen = "foto3" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto3 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        } 
        if ($request->hasFile('foto4')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto4");
            $nombreimagen = "foto4" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto4 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        } 
        if ($request->hasFile('foto5')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto5");
            $nombreimagen = "foto5" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto5 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        } 
    
        
       $nota = " ";
        return view('stocks.agregarfoto', compact('nota'));
    }

    public function asignarestado()
    {
         $nota = " "; 
        
        return view('stocks.asignarestado', compact('nota'));
    }

    public function asignarestadodatos(Request $request)
    {
        $guia = $request->get('guia') ;

        $envio = Envio::where('guia', $guia)
        ->get();
        $actual = Str::slug(time());
        
        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 

            $pedidos = Envio::where('cestado', $actual)
        ->get();
            //return view('stocks.asignarrepartidor', compact('nota'));
            $agencias = Agencia::all();
            return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
            
        }
 //dd($actual);
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cestado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cestado', $actual)
        ->get();

        //$empleados = Empleado::all(); 
$agencias = Agencia::all();
        return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function agregarestado(Request $request)
    {
        $guia = $request->get('guia') ;

        $envio = Envio::where('guia', $guia)
        ->get();
        $actual = $request->get('actual') ;

         $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 

            $pedidos = Envio::where('cestado', $actual)
        ->get();
            //return view('stocks.asignarrepartidor', compact('nota'));
            $agencias = Agencia::all();
            return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
            
        }
 //dd($actual);
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cestado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cestado', $actual)
        ->get();

        //$empleados = Empleado::all(); 
$agencias = Agencia::all();
        return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function guardarestado(Request $request)
    {
       // dd("Aqui entro");
       
        $agencia = $request->get('agencia');
        $cajasuelto = $request->get('cajasuelto');
        $caja = $request->get('caja');
        $rack = $request->get('rack');
        $nivel = $request->get('nivel');
        $tarima = $request->get('tarima');
        //$id = $request->get('asignum2');

        //$envio = Envio::find($id);
        //$envio->cambiando = $actual;
        
        $racks = $request->get('racks');
        $nivels = $request->get('nivels');
        $tarimas = $request->get('tarimas');
       
        $estado = $request->get('estado') ;
        $actual = $request->get('actual2') ;
        $envios = Envio::where('cestado', $actual)
        ->get();
        
        foreach($envios as $envio){



             $envio->ubicacion = $cajasuelto;

            if($cajasuelto=="caja"){
                $envio->rack = $rack;
            $envio->nivel = $nivel;
            $envio->caja = $caja;
            $envio->tarima = $tarima;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 

            if($cajasuelto=="suelto"){
            $envio->rack = $racks;
            $envio->nivel = $nivels;
            $envio->caja = NULL;
            $envio->tarima = $tarimas;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 






            $envio->estado = $estado;
            $envio->ordenado = 0;

            /*
            
            if($caja){
                $envio->caja = $caja;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
            if($rack){
                $envio->rack = $rack;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
    
            if($nivel){
                $envio->nivel = $nivel;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
    
            if($tarima){
                $envio->tarima = $tarima;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
*/
            $envio->save();
        }

       $nota = " ";

        return view('stocks.asignarestado', compact('nota'));
    }

    public function entreganoret()
    {
        $nota = " ";
         return view('stocks.entreganoret', compact('nota'));
    }

    public function entreganoretdatos(Request $request)
    {
        $nota = " ";

        $guia = $request->get('guia') ;
        $pedidos = Envio::where('ticketc', $guia)
        ->where('estado', "No entregado")
        ->get();

         if($pedidos->isEmpty()){ 
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.entreganoret', compact('nota'));

        }

         return view('stocks.entreganoretdatos', compact('pedidos', 'nota'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function guardarentrega(Request $request)
    {
        $tickets = $request->get('selec') ;
        $idtic = $request->input('idtic');
       //dd($ticket);

        $usuario = $request->get('usuario') ;
        $nota = $request->get('nota') ;
        $nombre = $request->get('nombre') ;


foreach ($tickets as $ticket) {
    //dd($ticket);


        $pedidos = Envio::where('id', $ticket)
        ->get();

        $entrega = new devolucion();
        $entrega->comercio = $pedidos[0]->comercio;
        $entrega->usuario = $usuario;
        $entrega->agenciaubi = $pedidos[0]->agencia;
        $entrega->nombre = $nombre;
        $entrega->nota = $nota;
        $entrega->idenvio = $ticket;
        $entrega->save();

        $ultimoid = devolucion::latest('id')->first();
        $iddevo = $ultimoid->id;

        
            $pedidos[0]->devo = $iddevo;
            $pedidos[0]->estado = "Devuelto al comercio";

            $pedidos[0]->save();
        
            

        $hesta = new Hestado();
            $hesta->idenvio = $ticket;
            $hesta->estado = "Devuelto al comercio";
            $hesta->usuario = $usuario;
            $hesta->nota = $nota;
            $hesta->nombre = $nombre;
            $hesta->save();

            }
$nota = " ";

$numti = $request->input('idtic');

 $pedidos = Envio::where('ticketc', $idtic)
        ->where('estado', "No entregado")
        ->get();

if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "No hay envios con el estado seleccionado"; 

            return view('stocks.entreganoretdatos2', compact('numti', 'nota')); 

        }


         return view('stocks.entreganoretdatos', compact('pedidos', 'nota'));
        
    }

     public function reportedevo()
    {
         $repartidores = User::all();
        return view('reportes.reportedevo', compact('repartidores'));
    }

    public function reportedevodatos(Request $request)
    { 

        
        $rango = $request->input('rango');
        $usuario = $request->input('usuario');
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d H:i:s', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d 23:59:50', strtotime($fecha2)) ;

        if($usuario == "todos")
        {
            $tickets = devolucion::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->get();
 
        }else{
            $tickets = devolucion::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->where('usuario', $usuario)
            ->get();
        }

       

       
         $repartidores = User::all();
        return view('reportes.reportedevodatos', compact('repartidores', 'tickets', 'rango', 'usuario'));
    }


    public function filtrarnotre(Request $request)
    {
        $estado = $request->input('estado');
        $ticket = $request->input('ticketc');
        

         if ($estado !="todos"){
            $pedidos = Envio::where('ticketc', $ticket)
        ->where('estado', $estado)
        ->get();
         }else{
            $pedidos = Envio::where('ticketc', $ticket)
       
        ->get();
         }

$numti = $ticket;

if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "No hay envios con el estado seleccionado"; 

            return view('stocks.entreganoretdatos2', compact('numti', 'nota')); 

        }


        $nota = " ";

         return view('stocks.entreganoretdatos', compact('pedidos', 'nota'));
        
    }

     public function generarp()
    {
        $nota = " ";
         return view('stocks.generarp', compact('nota'));
    }

    public function generarpdatos(Request $request)
    {
        $nota = " ";

        $guia = $request->get('guia') ;

        $pedidos = Envio::where('ticketc', $guia)
        ->where('estado', "No entregado")
        ->where('ordenado', 0)
        ->get();

         if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.generarp', compact('nota'));

        }

         return view('stocks.generarpdatos', compact('pedidos', 'nota'));
    }


    public function guardarreenvio(Request $request)
    {
        $usuario = $request->get('usuario') ;
        $reenvi = $request->get('reenvi') ;
        $nota = $request->get('nota') ;
        $idenvio = $request->get('idenvio') ;
        $reenvi = $request->get('reenvi') ;

        //dd($idenvio);

        $envio = Envio::find($idenvio);
        $envio->ordenado = 1;
        $envio->save();

       // dd($envio->comercio);

        $ticketc = Orden::where('guia', $envio->guia)
        ->get();

        foreach ($ticketc as $tick) {
          $tickid = $tick->id;
            Orden::find($tickid)->delete();
        }

        $entrega = new Orden();
        $entrega->comercio = $envio->comercio;
        $entrega->guia = $envio->guia;
        $entrega->destinatario = $envio->destinatario;
        $entrega->tipo = "Reenvio";
        $entrega->fecha_pro = $reenvi;
        $entrega->ubicacion = $envio->agenciaubi;
        $entrega->estado = "Pendiente";
        $entrega->nota = $nota;
        $entrega->save();

$nota = " ";

        $tick = $envio->ticketc ;

        $pedidos = Envio::where('ticketc', $tick)
        ->where('estado', "No entregado")
        ->where('ordenado', 0)
        ->get();

         if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.generarp', compact('nota'));

        }

            $hesta = new Hestado();
            $hesta->idenvio = $idenvio;
            $hesta->estado = "Reenvio";
            $hesta->usuario = $usuario;
            $hesta->nota = $nota;
            $hesta->freprogra = $reenvi;
            $hesta->save();


         return view('stocks.generarpdatos', compact('pedidos', 'nota'));

    }

     public function guardardevol(Request $request)
    {
        $usuario = $request->get('usuario') ;
        $reenvi = $request->get('reenvi') ;
        $nota = $request->get('nota') ;
        $idenvio = $request->get('idenvio2') ;
        $reenvi = $request->get('devolucion') ;
        $lugar = $request->get('lugar') ;

        //dd($idenvio);

        $envio = Envio::find($idenvio);
        $envio->ordenado = 1;
        $envio->save();
       // dd($envio->comercio);

 $ticketc = Orden::where('guia', $envio->guia)
        ->get();

        foreach ($ticketc as $tick) {
          $tickid = $tick->id;
            Orden::find($tickid)->delete();
        }

        $entrega = new Orden();
        $entrega->comercio = $envio->comercio;
        $entrega->guia = $envio->guia;
        $entrega->destinatario = $envio->destinatario;
        $entrega->tipo = "Devolucion";
        $entrega->fecha_pro = $reenvi;
        $entrega->ubicacion = $envio->agenciaubi;
        $entrega->estado = "Pendiente";
        $entrega->nota = $nota;
        $entrega->lugar = $lugar;
        $entrega->save();

$nota = " ";

        $tick = $envio->ticketc ;

        $pedidos = Envio::where('ticketc', $tick)
        ->where('estado', "No entregado")
        ->where('ordenado', 0)
        ->get();

         if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.generarp', compact('nota'));

        }


            $hesta = new Hestado();
            $hesta->idenvio = $idenvio;
            $hesta->estado = "Devolucion";
            $hesta->usuario = $usuario;
            $hesta->nota = $nota;
            $hesta->freprogra = $reenvi;
            $hesta->save();

         return view('stocks.generarpdatos', compact('pedidos', 'nota'));

    }


    public function listapi()
    {
        $nota = " ";
         $envios = Orden::whereDate('fecha_pro', Carbon::tomorrow())->get();

         return view('stocks.listapi', compact('envios', 'nota'));
    }

     public function detallepick($guia)
    {
      $pedidos = Orden::where('guia', $guia)
        
        ->get();

        $envio = Envio::where('guia', $guia)
        
        ->get();



         return view('stocks.detallepick', compact('pedidos', 'envio'));
    }

     public function realizado($guia)
    {

     
         $ticketc = Orden::find($guia);
        $ticketc->estado = "Realizado";
        $ticketc->save();

        $idguia = $ticketc->guia;
        $pedido = Envio::where('guia', $idguia)->get();
        $pedidoid = $pedido[0]->id;
        //dd($pedidoid);
        $envi = Envio::find($pedidoid);
        if ($ticketc->tipo == "Reenvio") {
           $envi->estado = "Reenvio";
        }else {
            $envi->estado = "Devolucion";
        }

        $envi->save();

            $hesta = new Hestado();
            $hesta->idenvio = $pedidoid;
            if ($ticketc->tipo == "Reenvio") {
           $hesta->estado = "Reenvio";
        }else {
            
            $hesta->estado = "Devolucion";
        }
            
            $hesta->usuario = $ticketc->usuario;
            $hesta->save();

        $nota = " ";
         $envios = Orden::whereDate('fecha_pro', Carbon::tomorrow())->get();

         return view('stocks.listapi', compact('envios', 'nota'));

      //   return view('stocks.detallepick', compact('pedidos'));
    }


    public function filtrarpicking(Request $request)
    {
        $estado = $request->input('estado');
        $ticket = $request->input('ticketc');
        

         if ($estado !="todos"){
            $pedidos = Envio::where('ticketc', $ticket)
        ->where('estado', $estado)
        ->get();
         }else{
            $pedidos = Envio::where('ticketc', $ticket)
       
        ->get();
         }

$numti = $ticket;

if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "No hay envios con el estado seleccionado"; 

            return view('stocks.generarpdatos2', compact('numti', 'nota')); 

        }


        $nota = " ";

         return view('stocks.generarpdatos', compact('pedidos', 'nota'));
        
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
