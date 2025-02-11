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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

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
            return view('stocks.seleccionarpunto', compact('nota'));

        }

        $idpunto = $envio[0]->punto;
        $punto = Rutas::where('id', $idpunto)->get();
        $nota = " ";
        return view('stocks.puntodatos', compact('envio', 'punto', 'nota'));
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

        
        return view('stocks.asignardatos', compact('pedidos', 'actual', 'nota' ));
    }

    public function agregarmasguia(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('asignum') ;

        $envio = Envio::where('guia', $guia)
        ->get();
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->asignado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('asignado', $actual)
        ->get();

        
        return view('stocks.asignardatos', compact('pedidos', 'actual' ));
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
            $envio->agencia = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 

            if($cajasuelto=="suelto"){
            $envio->rack = $racks;
            $envio->nivel = $nivels;
            //$envio->caja = $caja;
            $envio->tarima = $tarimas;
            $envio->agencia = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 
            

            $envio->save();
        }


        return view('stocks.asignar');



        
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

        

        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual' ));
    }
    public function agregarmascambiarguia(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('asignum') ;

        $envio = Envio::where('guia', $guia)
        ->get();
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cambiando', $actual)
        ->get();

        
        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual' ));
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
        $id = $request->get('asignum2');

        $envio = Envio::find($id);
        //$envio->cambiando = $actual;
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

        $envio->save();
        
        return view('stocks.cambiarasignar');
    }

    public function asignarrepartidor()
    {
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

        $pedidos = Envio::where('guia', $guia)
        ->get();

        $empleados = Empleado::all(); 

        return view('stocks.asignarrepartidordatos', compact('pedidos', 'actual', 'empleados' ));
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
 
        
        $empleados = Empleado::all(); 

        return view('stocks.asignarrepartidorcajadatos', compact('pedidos', 'empleados' ));
    }

    public function guardarasignarrepartidor(Request $request)
    {
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $repartidor = $request->get('repartidor');
        $guia = $request->get('guia2');


        $envios = Envio::where('guia', $guia)
        ->get();


        foreach($envios as $envio){

            $envio->repartidor = $repartidor;
            $envio->estado = "En ruta";

            $envio->save();
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


        $envios = Envio::where('caja', $caja)
        ->get();


        foreach($envios as $envio){

            $envio->repartidor = $repartidor;
            $envio->estado = "En ruta";

            $envio->save();
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
        return view('stocks.asignarestado');
    }

    public function asignarestadodatos(Request $request)
    {
        $guia = $request->get('guia') ;

        $envio = Envio::where('guia', $guia)
        ->get();
        $actual = Str::slug(time());
 //dd($actual);
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cestado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cestado', $actual)
        ->get();

        //$empleados = Empleado::all(); 

        return view('stocks.asignarestadodatos', compact('pedidos', 'actual' ));
    }

    public function agregarestado(Request $request)
    {
        $guia = $request->get('guia') ;

        $envio = Envio::where('guia', $guia)
        ->get();
        $actual = $request->get('actual') ;
 //dd($actual);
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cestado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cestado', $actual)
        ->get();

        //$empleados = Empleado::all(); 

        return view('stocks.asignarestadodatos', compact('pedidos', 'actual' ));
    }

    public function guardarestado(Request $request)
    {
       
        $agencia = $request->get('agencia');
        $cajasuelto = $request->get('cajasuelto');
        $caja = $request->get('caja');
        $rack = $request->get('rack');
        $nivel = $request->get('nivel');
        $tarima = $request->get('tarima');
        //$id = $request->get('asignum2');

        //$envio = Envio::find($id);
        //$envio->cambiando = $actual;
        
       
        $estado = $request->get('estado') ;
        $actual = $request->get('actual2') ;
        $envios = Envio::where('cestado', $actual)
        ->get();
        
        foreach($envios as $envio){

            $envio->estado = $estado;
            //$envio->estado = "En ruta";
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

            $envio->save();
        }

       

        return view('stocks.asignarestado');
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
