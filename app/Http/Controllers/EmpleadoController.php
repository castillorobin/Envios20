<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Empleado;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


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

    public function empleadoupdate(Request $request, $id)
    {
        //$empleado = Empleado::where('id', $id)->get();

        $empleado = Empleado::find($id);

        $empleado->nombre = $request->input('fname');


        if ($request->hasFile('foto')) {

            $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            $empleado->foto = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
        }

        $empleado->direccion = $request->input('direccion');
        $empleado->agencia = $request->input('agencia');
        $empleado->telefono = $request->input('telefono');
        $empleado->whatsapp = $request->input('whatsapp');
        $empleado->correo = $request->input('email');
        $empleado->fecha_nacimiento = $request->input('fecha_nacimiento');
        $empleado->dui = $request->input('dui');
        $empleado->licencia = $request->input('licencia');
        $empleado->referenciap = $request->input('referencia');
        $empleado->telefonop = $request->input('telefono1');
        $empleado->referenciaf = $request->input('referencia2');
        $empleado->telefonof = $request->input('telefono2');
        $empleado->contactonombre = $request->input('contacto_emergencia');
        $empleado->contactotel = $request->input('telefono3');
        $empleado->cargo = $request->input('cargo');
        $empleado->fecha_alta = $request->input('fecha_alta');
        $empleado->n_isss = $request->input('n_isss');
        $empleado->n_afp = $request->input('n_afp');
        $empleado->fecha_baja = $request->input('fecha_baja');
        $empleado->motivo = $request->input('Motivo');
        $empleado->salario = $request->input('salario');
        $empleado->estado = $request->input('estado');



        $empleado->nota = $request->input('nota');

        $empleado->save();



        $empleado = Empleado::where('id', $id)->get();


        return view('empleados.empleados', compact('empleado'));
    }




    public function crear()
    {
        ///$empleado = Empleado::where('id', $id)->get();
        $ultimoemp = Empleado::latest('id')->first();

        $ultimo = $ultimoemp->id + 1;

        return view('empleados.crear', compact('ultimo'));
    }

    public function empleadoguardar(Request $request)
    {

        $empleado = new Empleado();
        $empleado->nombre = $request->input('fname');

        //$empleado->foto = $request->input('foto');
        /*
        if($request->foto){
            $imagen = $request->foto;
           // $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $nombreimagen = uniqid() . '.png';
            $empleado->foto = $nombreimagen;
            $ruta = "/public/";
            $image_parts = explode(";base64,", $imagen);
            $image_type_aux = explode("image/", $image_parts[0]);
            //$image_type = $image_type_aux[1];
            
            $image_base64 = base64_decode($image_parts[1]);
           // $fileName = uniqid() . '.png';
            
            $file = $ruta . $nombreimagen;
            Storage::put($file, $image_base64);

            //$imagen->move($ruta,$nombreimagen);

        }
*/
        if ($request->hasFile('foto')) {

            $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            $empleado->foto = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
        }

        $empleado->direccion = $request->input('direccion');
        $empleado->agencia = $request->input('agencia');
        $empleado->telefono = $request->input('telefono');
        $empleado->whatsapp = $request->input('whatsapp');
        $empleado->correo = $request->input('email');
        $empleado->fecha_nacimiento = $request->input('fecha_nacimiento');
        $empleado->dui = $request->input('dui');
        $empleado->licencia = $request->input('licencia');
        $empleado->referenciap = $request->input('referencia');
        $empleado->telefonop = $request->input('telefono1');
        $empleado->referenciaf = $request->input('referencia2');
        $empleado->telefonof = $request->input('telefono2');
        $empleado->contactonombre = $request->input('contacto_emergencia');
        $empleado->contactotel = $request->input('telefono3');
        $empleado->cargo = $request->input('cargo');
        $empleado->fecha_alta = $request->input('fecha_alta');
        $empleado->n_isss = $request->input('n_isss');
        $empleado->n_afp = $request->input('n_afp');
        $empleado->fecha_baja = $request->input('fecha_baja');
        $empleado->motivo = $request->input('Motivo');
        $empleado->salario = $request->input('salario');
        $empleado->estado = $request->input('estado');



        $empleado->nota = $request->input('nota');

        $empleado->save();

        // Redirigir a la vista de empleados con un mensaje de éxito
        // return redirect()->view('empleados.index')->with('success', 'Empleado guardado exitosamente.');
        return redirect('/empleado');
    }
}
