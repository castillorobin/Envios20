<?php

namespace App\Http\Controllers;

use App\Models\Caja;
use App\Models\Detallecaja;
use Illuminate\Http\Request;
use App\Models\User;

class CajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    } 

    public function cajero()
    {
        $cajas = Detallecaja::all();
         return view('caja.cajero', compact('cajas'));
    }
    public function jefe()
    {
        $cajas = Detallecaja::all();
          $repartidores = User::all();
        return view('caja.jefe', compact('repartidores', 'cajas'));
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
        //dd($request->get('cajero'));
       // dd("entro");
        // Validar datos
        /*
    $validated = $request->validate([
        'cajero' => 'required|string|max:255',
        'agencia' => 'required|string|max:255',
        'tipo' => 'required|string|max:255',
        'concepto' => 'required|string|max:255',
        'valor' => 'required|double|max:255',
        
    ]);  */
//dd($request);
    // Guardar en la base de datos
    //Detallecaja::create($request);
    $movimiento = new Detallecaja();
    $movimiento->cajero = $request->get('cajero') ;
    $movimiento->agencia = $request->get('agencia') ;
    $movimiento->tipo = $request->get('tipo') ;
    $movimiento->concepto = $request->get('concepto') ;
    $movimiento->valor = $request->get('valor') ;
    $movimiento->save();
    // Redirigir o mostrar mensaje
    return redirect()->back()->with('success', 'Registro guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Caja $caja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caja $caja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caja $caja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caja $caja)
    {
        //
    }
}
