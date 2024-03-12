<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Empleado;
use Illuminate\Support\Facades\Validator;


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
        
        $empleado = new Empleado();
        $empleado->nombre = $request->input('fname');
        $empleado->correo = $request->input('email');
        $empleado->telefono = $request->input('telefono');
        $empleado->whatsapp = $request->input('whatsapp');
        $empleado->fecha_nacimiento = $request->input('fecha_nacimiento');
        $empleado->dui = $request->input('dui');
        $empleado->direccion = $request->input('direccion');
        $empleado->cargo = $request->input('cargo');
        $empleado->fecha_alta = $request->input('fecha_alta');
        $empleado->n_isss = $request->input('n_isss');
        $empleado->n_afp = $request->input('n_afp');
        $empleado->nota = $request->input('nota');
    
        $empleado->save();
    
        // Redirigir a la vista de empleados con un mensaje de éxito
        return redirect()->route('empleados.index')->with('success', 'Empleado guardado exitosamente.');
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
