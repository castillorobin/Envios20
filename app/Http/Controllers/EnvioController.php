<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Empleado;
use App\Models\Comercio;
use App\Models\Rutas;

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

        $envios = Envio::all();
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

        return view('envios.registroconguiadatos', compact('pedido', 'puntos'));

    }
    public function guardarconguia(Request $request, $id)
    {
        
        $envio = Envio::find($id);

        //$envio->guia = $request->get('n_guia');
        $envio->destinatario = $request->get('destinatariop');
        $envio->direccion = $request->get('direccionp');
        $envio->telefono = $request->get('telefonop');
       // $envio->cobro = $request->get('cenvio');
        $envio->precio = $request->get('precio');
        $envio->envio = $request->get('envio');
        $envio->total = $request->get('total');
        $envio->estado = $request->get('estado_enviop');
        $envio->pago = $request->get('estado_pago');
        $envio->punto = $request->get('punto');
        $envio->fecha_entrega = $request->get('fecha_entregap');
        $envio->nota = $request->get('nota');

        $envio->save();
       // return redirect('/envios/lista');

        
        //$pedido = Envio::where('guia', $guia)->get();

        return view('envios.registroconguia');

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
}
