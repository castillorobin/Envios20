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
        $cajas = Caja::all();
        $repartidores = User::all();
        return view('caja.jefe', compact('repartidores', 'cajas'));
    }

    public function listado($id)
    {

        $cajas = Detallecaja::where('idcaja', $id)
        ->get();
         return view('caja.listado', compact('cajas'));
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
        $tipo = $request->get('tipo') ;
        $cajero = $request->get('cajero') ;

        if ($tipo == "Caja inicial") {
           // dd("Caja inicial");
           $caja = new Caja();
           $caja->cajero = $request->get('cajero') ;
           $caja->save();
        }


        $idcaja = Caja::where('cajero', $cajero)
        ->where('estado', 0)
        ->get();


    $movimiento = new Detallecaja();
    $movimiento->cajero = $request->get('cajero') ;
    $movimiento->agencia = $request->get('agencia') ;
    $movimiento->tipo = $request->get('tipo') ;
    $movimiento->concepto = $request->get('concepto') ;
    $movimiento->valor = $request->get('valor') ;
    $movimiento->idcaja = $idcaja[0]->id ;
    $movimiento->save();

    $movis = Detallecaja::where('idcaja', $idcaja[0]->id)
        ->get();

        $saldo = 0;
    if ($tipo == "Cierre de caja") {
          $idcaja2= Caja::find($idcaja[0]->id);
           $idcaja2->estado = 1 ;
            
           foreach ($movis as $movi) {

                if ($movi->tipo == "Caja inicial") {
                    $saldo += $movi->valor;
                }
                if ($movi->tipo == "Entrada") {
                    $saldo += $movi->valor;
                }
                if ($movi->tipo == "Salida") {
                    $saldo -= $movi->valor;
                }
           }

           $idcaja2->saldo = $saldo ;

           $idcaja2->save();
        }
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
