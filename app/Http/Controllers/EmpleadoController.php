<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    } 

    public function empleado()
    {
        $vendedores = Empleado::all();
        return view('empleados.index', compact('vendedores'));
    }

    public function empleadover($id)
    {
        $empleado = Empleado::where('id', $id)->get();

        return view('empleados.empleados', compact('empleado'));
    }

    public function empleadoeditar($id)
    {
        $empleado = Empleado::where('id', $id)->get();

        return view('empleados.empleadoseditar', compact('empleado'));
    }

    public function empleadoguardar(Request $request)
    {
        $envio = new Empleado();

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
