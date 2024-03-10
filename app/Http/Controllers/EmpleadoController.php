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
        // Definir reglas de validación
        $rules = [
            'fname' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'whatsapp' => 'required',
            'fecha_nacimiento' => 'required|date',
            'dui' => 'required',
            'direccion' => 'required',
            'cargo' => 'required',
            'fecha_alta' => 'required|date',
            'n_isss' => 'required',
            'n_afp' => 'required',
            'nota' => 'nullable',
        ];
    
        // Mensajes de error personalizados
        $messages = [
            'fname.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'whatsapp.required' => 'El WhatsApp es obligatorio.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'dui.required' => 'El DUI es obligatorio.',
            'direccion.required' => 'La dirección es obligatoria.',
            'cargo.required' => 'El cargo es obligatorio.',
            'fecha_alta.required' => 'La fecha de alta es obligatoria.',
            'fecha_alta.date' => 'La fecha de alta debe ser una fecha válida.',
            'n_isss.required' => 'El número de ISSS es obligatorio.',
            'n_afp.required' => 'El número de AFP es obligatorio.',
            // Puedes agregar más mensajes de error personalizados para otros campos si lo deseas
        ];
    
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Verificar si la validación falla
        if ($validator->fails()) {
            // Redirigir de nuevo al formulario con los errores de validación
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Si la validación es exitosa, guardar el empleado en la base de datos
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
