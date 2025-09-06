<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rutas;
use App\Models\Agencia;
use Illuminate\Support\Facades\Auth;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutas = Rutas::all();
        return view('ruta.ajustes', compact('rutas'));
    }

    public function agregar(Request $request)
    {
        $envio = new Rutas();

        $envio->zona = $request->get('zona');
        $envio->ruta = $request->get('ruta');
        $envio->punto = $request->get('punto');
        $envio->nfijo = $request->get('nfijo');
        $envio->nruta = $request->get('nruta');
        $envio->color = $request->get('color');
        

        $envio->save();
        $rutas = Rutas::all();
        return view('ruta.ajustes', compact('rutas'));
    }

    public function editarruta($id)
    {
        $ruta = Rutas::find($id);

        return view('ruta.editarajustes', compact('ruta'));
    }
    
    public function editandoruta(Request $request)
    {
        $id = $request->get('id');
        $ruta = Rutas::find($id);
        
        $ruta->zona = $request->get('zona');
        $ruta->ruta = $request->get('ruta');
        $ruta->punto = $request->get('punto');
        $ruta->nfijo = $request->get('nfijo');
        $ruta->nruta = $request->get('nruta');
        $ruta->color = $request->get('color');

        $ruta->save();
        
        $rutas = Rutas::all();

        return view('ruta.ajustes', compact('rutas'));
    }

    public function agencia()
    {
        $cajas = Agencia::all();
        return view('ruta.ajustesagencia', compact('cajas'));
    }

    public function guardaragencia(Request $request)
    {
        $envio = new Agencia();

        $envio->nombre = $request->get('nombre');
          

        $envio->save();
       // $cajas = Agencia::all();
       // return view('ruta.ajustes', compact('cajas'));
       return redirect()->back()->with('success', 'Registro guardado correctamente');
    }

    public function editaragencia($id)
    {
         $ruta = Agencia::find($id);
         return view('ruta.editaragencia', compact('ruta'));
    }

    public function editandoagencia(Request $request)
    {
        $id = $request->get('id') ;
        $concepto = $request->get('nombre') ;
        //dd($concepto);
        
        $conce = Agencia::find($id);
        $conce->nombre = $concepto ; 

        $conce->save();
         
         $cajas = Agencia::all();
         return view('ruta.ajustesagencia', compact('cajas'));
    }

    public function destroy($id)
    {
        $ruta = Agencia::find($id);
         $ruta->delete();
    
      $cajas = Agencia::all();
        //return redirect()->back()->with('success', 'Registro Eliminado correctamente');
        return view('ruta.ajustesagencia', compact('cajas')); 
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
    public function eliminarruta($id)
    {
        Rutas::find($id)->delete();
        return redirect()->back();
    }
}
