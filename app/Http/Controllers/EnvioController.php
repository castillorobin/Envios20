<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;
use App\Models\Vendedor;

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
    public function crearenvio()
    {

        $vendedores = Vendedor::all();
        return view('envios.crearenvio', compact('vendedores'));
 
    }

    public function envioguardarp(Request $request)
    {
        $envio = new Envio();

        $envio->nombre = $request->get('fname');
        $envio->correo = $request->get('email');
        $envio->telefono = $request->get('telefono');
        $envio->whatsapp = $request->get('whatsapp');
        $envio->fecha_nacimiento = $request->get('fecha_nacimiento');
        $envio->dui = $request->get('dui');
        $envio->direccion = $request->get('direccion');
        $envio->cargo = $request->get('cargo');
        $envio->fecha_alta = $request->get('fecha_alta');
        $envio->n_isss = $request->get('n_isss');
        $envio->n_afp = $request->get('n_afp');
        $envio->nota = $request->get('nota');
        
        $envio->save();
        $vendedores = Empleado::all();
        return view('empleados.index', compact('vendedores'));


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
        
        $nota= ' ';
        $entrega = 0;
        $reprogra = 0;
        $noentrega = 0;
        $creado = 0;
        $ruta = 0;
        foreach($pedidos as $pedido) {
           if ($pedido->estado == 'Entregado') {
            $entrega+=1;
           }
           if ($pedido->estado == 'Reprogramado') {
            $reprogra+=1;
           }
           if ($pedido->estado == 'No retirado') {
            $noentrega+=1;
           }
           if ($pedido->estado == 'Creado') {
            $creado+=1;
           }
           if ($pedido->estado == 'En ruta') {
            $ruta+=1;
           }
        }

        return view('envios.indexdigitadofiltro', compact('pedidos','vendedores','nota','entrega','reprogra','noentrega','creado', 'comercio', 'ruta' ));


    }

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
    public function show(Envio $envio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Envio $envio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Envio $envio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Envio $envio)
    {
        //
    }
}
