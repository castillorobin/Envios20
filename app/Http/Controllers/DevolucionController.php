<?php

namespace App\Http\Controllers;

use App\Models\devolucion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PDF; 
use App\Models\Ticktpago; 


class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }  

     public function  exportardevo(Request $request)
    {
        $rango = $request->input('rango2');
        $usuario = $request->input('usuario2');
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
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

        $pdf = PDF::loadView('reportes.exportardevo', ['cajas'=>$tickets])->setPaper('letter', 'landscape');

        return $pdf->stream();
    } 

    public function  reporteestadoticket(Request $request)
    {
        $rango = $request->input('rango2');
        $usuario = $request->input('usuario2');
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        $fechacam1 = date('Y-m-d H:i:s', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d 23:59:50', strtotime($fecha2)) ;

        if($usuario == "todos")
        {
            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->get();
 
        }else{
            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->where('cajero', $usuario)
            ->get();
        }

        $pdf = PDF::loadView('reportes.exportarpago', ['cajas'=>$tickets])->setPaper('letter', 'landscape');

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
    public function show(devolucion $devolucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(devolucion $devolucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, devolucion $devolucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(devolucion $devolucion)
    {
        //
    }
}
