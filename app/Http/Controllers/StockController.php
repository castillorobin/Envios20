<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Request;
use App\Models\Stock;
use App\Models\Envio;
use App\Models\Rutas;
use App\Models\Asignar;
use App\Models\Empleado;
use App\Models\Hestado;
use App\Models\User;
use App\Models\devolucion;
use App\Models\Orden;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Agencia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF; 
use App\Exports\RepartidorListaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EnviosExport;


class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $envios = Envio::all(); 
        $nota = " ";
        return view('stocks.seleccionarzona', compact('nota')); 
    }

    public function cuadrepaquete() 
    {
        
        $nota = " ";
        return view('stocks.cuadrepaquete', compact('nota')); 
    }

    public function cuadrepaquetedatos(Request $request)
{
    $nota   = " ";
    $rango  = $request->input('rango');

    if (!$rango) {
        return view('stocks.cuadrepaquetedatos', [
            'nota' => $nota,
            'envios' => collect([]),
            'codigos_excluidos' => []
        ]);
    }

    [$fecha1, $fecha2] = array_map('trim', explode('-', $rango));
    $fechacam1 = date('Y-m-d', strtotime($fecha1));
    $fechacam2 = date('Y-m-d', strtotime($fecha2));

    $codigos_excluidos = session()->get('codigos_excluidos', []);

    // 👉 Validar código ingresado
    if ($request->filled('codigo')) {
        $nuevo = trim($request->input('codigo'));

        $existe = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
            ->where('estado', 'No entregado')
            ->where('guia', $nuevo)
            ->exists();

        if ($existe) {
            // Guardar en excluidos si estaba en la lista
            $codigos_excluidos[] = $nuevo;
            session()->put('codigos_excluidos', $codigos_excluidos);

            // Mensaje flash
            session()->flash('mensaje', "La guía {$nuevo} fue encontrada y retirada de la lista.");
            session()->flash('tipo', 'success');
        } else {
            // Mensaje flash de error
            session()->flash('mensaje', "La guía {$nuevo} no ha sido encontrada en la lista.");
            session()->flash('tipo', 'danger');
        }
    }

    $envios = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->where('estado', 'No entregado')
        ->whereNotIn('guia', $codigos_excluidos)
        ->get();

    return view('stocks.cuadrepaquetedatos', compact('nota', 'envios', 'codigos_excluidos'));
}

public function exportExcel(Request $request)
{

     [$fechacam1, $fechacam2, $codigos_excluidos] = $this->filtros($request);

    $pedidos = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->where('estado', 'No entregado')
        ->whereNotIn('guia', $codigos_excluidos)
        ->get();

    $usuario = Auth::user()->name ?? '—';

    $filename = 'cuadre_paqueteria_' . date('Ymd_His') . '.xlsx';
    return Excel::download(new EnviosExport($pedidos, $usuario), $filename);
}

public function exportPDF(Request $request)
{
    [$fechacam1, $fechacam2, $codigos_excluidos] = $this->filtros($request);

    $pedidos = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->where('estado', 'No entregado')
        ->whereNotIn('guia', $codigos_excluidos)
        ->get();

  
   $user = Auth::user()->name ?? '—';
    $pdf = PDF::loadView('reportes.exportarcuadre', ['user'=>$user, 'pedidos'=>$pedidos])->setPaper('letter', 'landscape');
       
        return $pdf->stream();
}

private function filtros(Request $request)
{
    $rango = $request->input('rango');
    [$fecha1, $fecha2] = array_map('trim', explode('-', $rango));
    $fechacam1 = date('Y-m-d', strtotime($fecha1));
    $fechacam2 = date('Y-m-d', strtotime($fecha2));

    $codigos_excluidos = session()->get('codigos_excluidos', []);

    return [$fechacam1, $fechacam2, $codigos_excluidos];
}



    public function buscarcaja() 
    {
       
        $nota = " ";
        return view('stocks.buscarcaja'); 
    }

    public function paquetesasignados() 
    {
       
        $nota = " ";
        $empleados = Empleado::all(); 
        return view('stocks.paquetesasignados', compact('empleados')); 
    }
    
    public function paquetesasignadosdatos(Request $request) 
    {
        $nota = " ";
        $usuarios = Empleado::all(); 
        return view('stocks.repartidorlista', compact('usuarios', 'nota')); 

         }

         public function vistarepartidor($id) 
    {

        $envios = Envio::whereHas('empleados', function ($q) use ($id) {
                    $q->where('empleados.id', $id);
                })
                
                ->with(['empleados:id,nombre']) // opcional, para evitar N+1
                ->get();

        $nota = " ";
       $estado = "asignado";
        $user = Empleado::query()->find($id);
        return view('stocks.repartidorview', compact('user', 'nota', 'envios', 'estado')); 

         }

    public function repartidorfiltroestado(Request $request) 
    {
        $id = $request->input('idrepa');
        $filtro = $request->input('filtro');
        

        if ($filtro == 'asignado') {
            $envios = Envio::whereHas('empleados', function ($q) use ($id) {
                    $q->where('empleados.id', $id);
                })
                
                ->with(['empleados:id,nombre']) // opcional, para evitar N+1
                ->get();
                $estado = "asignado";
        }else {
            $envios = Envio::whereHas('empleados', function ($q) use ($id) {
                    $q->where('empleados.id', $id);
                })->where('entregadopor', $id)
                
                ->with(['empleados:id,nombre']) // opcional, para evitar N+1
                ->get();
                $estado = "entregado";
        }


        $nota = " ";
       
        $user = Empleado::query()->find($id);
        return view('stocks.repartidorview', compact('user', 'nota', 'envios', 'estado')); 

    }

    public function repartidorlistapdf(Request $request) 
    {
        $id = $request->input('repaid');
        $filtro = $request->input('estado');
        

        if ($filtro == 'asignado') {
            $pedidos = Envio::whereHas('empleados', function ($q) use ($id) {
                    $q->where('empleados.id', $id);
                })
                
                ->with(['empleados:id,nombre']) // opcional, para evitar N+1
                ->get();
                $estado = "asignado";
        }else {
            $pedidos = Envio::whereHas('empleados', function ($q) use ($id) {
                    $q->where('empleados.id', $id);
                })->where('entregadopor', $id)
                
                ->with(['empleados:id,nombre']) // opcional, para evitar N+1
                ->get();
                $estado = "entregado";
        }
$user = Empleado::query()->find($id);
        $pdf = PDF::loadView('reportes.exportarrepalista', ['user'=>$user, 'pedidos'=>$pedidos])->setPaper('letter', 'landscape');
       
        return $pdf->stream();



    }


    public function repartidorlistaexcel(Request $request)
{
    $id = $request->input('repaid');
    $filtro = $request->input('estado');

    if ($filtro == 'asignado') {
        $pedidos = Envio::whereHas('empleados', fn($q) => $q->where('empleados.id', $id))
            ->with(['empleados:id,nombre'])
            ->get();
        $estado = "asignado";
    } else {
        $pedidos = Envio::whereHas('empleados', fn($q) => $q->where('empleados.id', $id))
            ->where('entregadopor', $id)
            ->with(['empleados:id,nombre'])
            ->get();
        $estado = "entregado";
    }

    $user = Empleado::query()->find($id);
    $usuarioSistema = Auth::user()->name ?? '—';

    $filename = 'reporte_repartidor_' . $user->nombre . '_' . date('Ymd_His') . '.xlsx';
    return Excel::download(new RepartidorListaExport($pedidos, $user, $estado, $usuarioSistema), $filename);
}






     



         

    public function paquetesasignadosdatos222(Request $request) 
    {
        /*
        $rango = $request->input('rango');
       // $desde = $request->input('desde');
       // $hasta = $request->input('hasta');
       dd($rango);
       $rangol = $rango;
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d', strtotime($fecha2)) ;
        $repartidorsolo = $request->input('repartidor');

        //$envios = Envio::whereBetween('fechaasigna', [$desde, $hasta])
        //->get();

        if ($repartidorsolo !="todos"){
            // $envios = $envios->intersect(Envio::whereIn('estado', $estado)->get());
           // $envios = Envio::whereBetween('fechaasigna', [$desde, $hasta])
            $envios = Envio::whereBetween('fechaasigna', [$fechacam1, $fechacam2])->
             where('repartidor', $repartidorsolo)->get();
            // dd($repartidorsolo);
            // $envios = $envios->intersect(Envio::whereIn('repartidor', [$repartidorsolo])->get());
         }else{
            $envios = Envio::whereBetween('fechaasigna', [$fechacam1, $fechacam2])
        ->get();
         }
       
        $nota = " ";
        $empleados = Empleado::all(); 
        return view('stocks.paquetesasignadosdatos', compact('empleados', 'envios')); 
        */

         // Validación básica
         

    $request->validate([
        'rango'      => 'required|string',          // "08/01/2025 - 08/30/2025"
        'repartidor' => 'required|integer|exists:empleados,id',
        'camino'     => 'required|in:Asignados,Entregados',
    ]);

    // Obtención del ID del empleado (repartidor)
    $empleadoId = (int) $request->repartidor;

    // 1) Parseo de rango flexible (acepta "08/01/2025 - 08/30/2025", "2025-08-01 - 2025-08-30", "01/08/2025 - 30/08/2025", etc.)
    [$iniStr, $finStr] = array_map('trim', preg_split('/\s*-\s*/u', $request->rango));

    $inicio = $this->parseDateFlexible($iniStr)?->startOfDay();
    $fin    = $this->parseDateFlexible($finStr)?->endOfDay();

    if (!$inicio || !$fin) {
        return back()->withErrors([
            'rango' => 'Formato de rango inválido. Usa, por ejemplo: 08/01/2025 - 08/30/2025 o 2025-08-01 - 2025-08-30',
        ])->withInput();
    }

    // 2) Query base: filtra por fechaasigna en el rango (por FECHA, compatible con columnas date/datetime)
    $query = Envio::query()
        ->whereDate('fechaasigna', '>=', $inicio->toDateString())
        ->whereDate('fechaasigna', '<=', $fin->toDateString());

    // Filtro por tipo
    if ($request->camino === 'Asignados') {
        // Envios asignados al empleado (tabla pivote empleado_envio)
        $query->whereHas('empleados', function ($q) use ($empleadoId) {
            $q->where('empleados.id', $empleadoId);
        });
    } else { // 'Entregados'
        // Envios entregados por el empleado (campo entregadopor en envios)
        $query->where('entregadopor', $empleadoId);
    }

    // Eager load útil (evita N+1)
    $envios = $query
        ->with(['empleados:id,nombre']) // ajusta columnas según tu modelo
        ->orderByDesc('fechaasigna')
        ->get();
$empleados = Empleado::all(); 
$repa = Empleado::query()->find($empleadoId);
//dd($repa);


return view('stocks.paquetesasignadosdatos', compact('empleados', 'envios', 'repa')); 

    }

      private function parseDateFlexible(?string $s): ?Carbon
    {
        if (!$s) return null;

        $s = trim($s);
        $formats = [
            'm/d/Y', // 08/30/2025
            'd/m/Y', // 30/08/2025
            'Y-m-d', // 2025-08-30
            'd-m-Y', // 30-08-2025
            'Y/m/d', // 2025/08/30
        ];

        foreach ($formats as $f) {
            try {
                return Carbon::createFromFormat($f, $s);
            } catch (\Throwable $e) {
                // probar el siguiente formato
            }
        }

        try {
            return Carbon::parse($s);
        } catch (\Throwable $e) {
            return null;
        }
    }
    
    public function buscarcajadatos(Request $request) 
    {
        $id = $request->get('guia') ;
        $pedidos = Envio::where('caja', $id)->get();
       
        $nota = " ";
        return view('stocks.buscarcajadatos', compact('pedidos')); 
    }
    public function zonadatos(Request $request)
    {
        $id = $request->get('guia') ;
        $envio = Envio::where('guia', $id)->get();
        
        if($envio->isEmpty()){
            //dd("no hay envio");
            $nota = "La Guía que se ingreso no existe"; 
            return view('stocks.seleccionarzona', compact('nota')); 

        }
        $idpunto = $envio[0]->punto;
        $punto = Rutas::where('id', $idpunto)->get();
        return view('stocks.zonadatos', compact('envio', 'punto'));
/*
        if($envio[0]->punto != NULL){
        
        return view('stocks.zonadatos', compact('envio', 'punto'));
        }else{

            $punto[0]->id = 1;
            $punto[0]->zona = " "; 
            $punto[0]->ruta = " ";
            $punto[0]->punto = " ";
            $punto[0]->numero = " ";

            return view('stocks.zonadatos', compact('envio', 'punto'));
        }

*/
    } 
 
    public function puntodatos(Request $request)
    {
        $id = $request->get('guia') ;
        $envio = Envio::where('guia', $id)->get();
        if($envio->isEmpty()){
            //dd("no hay envio"); 
            $nota = "La Guía que se ingreso no existe"; 
            return view('ruta.listapuntos', compact('nota'));

        }

        $idpunto = $envio[0]->punto;
        $pedidos = Rutas::where('id', $idpunto)->get();
        $nota = " ";
        return view('ruta.listapuntosdatos', compact('envio', 'pedidos', 'nota'));

    }

    public function preparaciondatos(Request $request)
    {
        $id = $request->get('guia') ;
        $envio = Envio::where('guia', $id)->get();
        if($envio->isEmpty()){
            //dd("no hay envio"); 
            $nota = "La Guía que se ingreso no existe"; 
            return view('ruta.preparacionpunto', compact('nota'));

        }

        $idpunto = $envio[0]->punto;
        $pedidos = Rutas::where('id', $idpunto)->get();
        $nota = " ";
        return view('ruta.preparacionpuntodatos', compact('envio', 'pedidos', 'nota'));

    }

    public function agregarguia(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Asignar();
        $ticket->save();

        $actualid = Asignar::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();
 
        //$pedido = Envio::where('guia', $guia)->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.asignar', compact('nota',));
        }
            

        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->asignado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('guia', $guia)
        ->get();
        $agencias = Agencia::all();
        
        return view('stocks.asignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function agregarmasguia(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('asignum') ;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            $pedidos = Envio::where('asignado', $actual)
        ->get();

        
        return view('stocks.asignardatos', compact('pedidos', 'actual', 'nota' ));
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->asignado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('asignado', $actual)
        ->get();

        $agencias = Agencia::all();
        return view('stocks.asignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function guardarasignar(Request $request)
    {
       
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $cajasuelto = $request->get('cajasuelto');
        $caja = $request->get('caja');
        $rack = $request->get('rack');
        $nivel = $request->get('nivel');
        $tarima = $request->get('tarima');
//dd($tarima);
        $racks = $request->get('racks');
        $nivels = $request->get('nivels');
        $tarimas = $request->get('tarimas');

        $actual = $request->get('asignum2');

        $envios = Envio::where('asignado', $actual)->get();
        foreach($envios as $envio){

            $envio->ubicacion = $cajasuelto; 

            if($cajasuelto=="caja"){
                $envio->rack = $rack;
            $envio->nivel = $nivel;
            $envio->caja = $caja;
            $envio->tarima = $tarima;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 

            if($cajasuelto=="suelto"){
            $envio->rack = $racks;
            $envio->nivel = $nivels;
            $envio->caja = NULL;
            $envio->tarima = $tarimas;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 
            

            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Asignado";
            $hesta->usuario = $usuario;
            $hesta->save();


        }
        $nota = " "; 

        return view('stocks.asignar', compact('nota' ));



        
    }

    public function cambiar()
    {
        $nota = " "; 
        return view('stocks.cambiarasignar', compact('nota' ));
    }

    public function cambiarguia(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Asignar();
        $ticket->save();

        $actualid = Asignar::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.cambiarasignar', compact('nota',));
        }
 
        $envioid= $envio[0]->id ;
 
        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('guia', $guia)
        ->get();

        $agencias = Agencia::all();

        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }
    public function agregarmascambiarguia(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('asignum') ;

        $envio = Envio::where('guia', $guia)
        ->get();

         $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $agencias = Agencia::all();
        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual', 'nota', 'agencias' ));
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $agencias = Agencia::all();
        return view('stocks.cambiarasignardatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }
    public function guardarcambiarguia(Request $request)
    {
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $cajasuelto = $request->get('cajasuelto');

        
        $caja = $request->get('caja');
        $rack = $request->get('rack');
        $nivel = $request->get('nivel');
        $tarima = $request->get('tarima');

        $racks = $request->get('racks');
        $nivels = $request->get('nivels');
        $tarimas = $request->get('tarimas');

        $id = $request->get('asignum2');

        //dd($id);

        $envios = Envio::where('cambiando', $id)
        ->get();


        foreach ($envios as $envio) {
            # code...
      
        //$envio->cambiando = $actual;
        if($caja){
            $envio->caja = $caja;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
           
        }
        if($rack){
            $envio->rack = $rack;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
           
        }

        if($nivel){
            $envio->nivel = $nivel;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
        }

        if($tarima){
            $envio->tarima = $tarima;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
           // dd($cajasuelto);
        }

/*suelto*/////////
        if($racks){
            $envio->rack = $racks;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            $envio->caja = NULL;
        }

        if($nivels){
            $envio->nivel = $nivels;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            $envio->caja = NULL;
        }

        if($tarimas){
            $envio->tarima = $tarimas;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
          //  dd($cajasuelto);
          $envio->caja = NULL;
        }

        $envio->save();

        $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Cambiada";
            $hesta->usuario = $usuario;
            $hesta->save();

  }





        $nota = " "; 
        
        return view('stocks.cambiarasignar', compact('nota' ));
    }

    public function asignarrepartidor()
    {
       // dd( Carbon::today());
        $nota = " "; 
        return view('stocks.asignarrepartidor', compact('nota')); 
    }
    public function agregarrepartidor(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Asignar();
        $ticket->save();

        $actualid = Asignar::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            return view('stocks.asignarrepartidor', compact('nota'));
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $empleados = Empleado::all(); 
        $agencias = Agencia::all();
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('stocks.asignarrepartidordatos', compact('pedidos', 'actual', 'empleados', 'nota', 'agencias', 'empleado'));
    }

    public function agregarrepartidorlote(Request $request)
    {
        $guia = $request->get('guia') ;
        
        $actual = $request->get('asignum') ;;

        $envio = Envio::where('guia', $guia)
        ->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 

            $pedidos = Envio::where('cambiando', $actual)
        ->get();
        $empleados = Empleado::all(); 
            //return view('stocks.asignarrepartidor', compact('nota'));
            $agencias = Agencia::all();
            $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('stocks.asignarrepartidordatos', compact('pedidos', 'actual', 'empleados', 'nota', 'agencias', 'empleado'));
            
        }
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cambiando = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cambiando', $actual)
        ->get();

        $empleados = Empleado::all(); 
  $agencias = Agencia::all();
  $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('stocks.asignarrepartidordatos', compact('pedidos', 'actual', 'empleados', 'nota', 'agencias', 'empleado'));
    }


    public function asignarrepartidorcaja()
    {
        return view('stocks.asignarrepartidorcaja');
    }

    public function agregarrepartidorcaja(Request $request)
    {
        $guia = $request->get('guia') ;

        $pedidos = Envio::where('caja', $guia)
        ->get();
        
        if($pedidos->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.asignarrepartidorcaja');
        }
        
        $empleados = Empleado::all(); 
$agencias = Agencia::all();
$empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('stocks.asignarrepartidorcajadatos', compact('pedidos', 'empleados', 'agencias', 'empleado'));
    }

    public function guardarasignarrepartidor(Request $request)
    {

         $usuario     = $request->get('usuario');
    $agencia     = $request->get('agencia');   // (si lo usas en otro lado)
    $repartidor  = (int) $request->get('repartidor'); // ID del empleado
    $guia        = $request->get('guia2');     // criterio para buscar envíos
    $ruta        = $request->get('ruta');

  

    $envios = Envio::where('cambiando', $guia)->get();

    if ($envios->isEmpty()) {
        return back()->with('warning', 'No se encontraron envíos para asignar con ese criterio.');
    }

    // Si quieres guardar el nombre del empleado en Hestado->nombre:
    $empleado = Empleado::find($repartidor);

    DB::transaction(function () use ($envios, $repartidor, $ruta, $usuario, $empleado) {

        foreach ($envios as $envio) {

            // ===== Asignación en la tabla pivote =====
            // A) Agregar sin quitar otros repartidores (no duplica gracias a unique en pivote):
            $envio->empleados()->sync([$repartidor]);

            // --- O ---
            // B) Reemplazar a cualquier otro repartidor y dejar solo este:
            // $envio->empleados()->sync([$repartidor]);

            // ===== Actualizaciones del envío =====
            $envio->estado       = "En ruta";
            $envio->cambioasi    = 0;
            $envio->ruta         = $ruta;
            $envio->fechaasigna  = Carbon::today();  // si tu columna es DATE, queda perfecto
            $envio->save();

            // ===== Historial de estado =====
            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado  = "En ruta";
            // Si antes guardabas el ID en 'nombre', puedes dejarlo así.
            // Si prefieres guardar el nombre legible:
            $hesta->nombre  = $empleado?->nombre ?? $repartidor;
            $hesta->usuario = $usuario;
            $hesta->save();
        }
    });

    // Vista de retorno
    $nota = "Asignación realizada correctamente.";
    return view('stocks.asignarrepartidor', compact('nota'));
        /*
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $repartidor = $request->get('repartidor');
        $guia = $request->get('guia2');
        $ruta = $request->get('ruta');

        $envios = Envio::where('cambiando', $guia)
        ->get();


        foreach($envios as $envio){

            $envio->repartidor = $repartidor;
            $envio->estado = "En ruta";
            $envio->cambioasi = 0;
            $envio->ruta = $ruta;
           // dd( Carbon::today());
            $envio->fechaasigna = Carbon::today();
            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "En ruta";
            $hesta->nombre = $repartidor;
            $hesta->usuario = $usuario;
            $hesta->save();

        }
        
       // return view('stocks.asignarrepartidorcaja');

       $nota = " "; 
        return view('stocks.asignarrepartidor', compact('nota'));
        */
    }
    public function guardarasignarrepartidorcaja(Request $request)
    {
        $usuario = $request->get('usuario');
        $agencia = $request->get('agencia');
        $repartidor = $request->get('repartidor');
        $caja = $request->get('caja6');
        //dd($request->repartidor[0]);
       /// $emplea = Empleado::where('nombre', Auth::user()->name)->get();
        $emplea = Empleado::find($request->repartidor[0]);
        $envios = Envio::where('caja', $caja)
        ->get();


        foreach($envios as $envio){
             $envio->empleados()->sync($request->repartidor);
           // $envio->repartidor = $repartidor;
            $envio->estado = "En ruta";
            $envio->cambioasi = 0;
            $envio->fechaasigna = Carbon::today();

            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->nombre = $emplea->nombre;
            $hesta->estado = "En ruta";
            $hesta->save();
        }
        
        return view('stocks.asignarrepartidorcaja');
    }

    public function agregarfoto() 
    {
        //$envios = Envio::all(); 
        $nota = " ";
        return view('stocks.agregarfoto', compact('nota'));
    }

    public function agregarguiafoto(Request $request) 
    {
        //$envios = Envio::all(); 
        $guia = $request->get('guia') ;
        $envio = Envio::where('guia', $guia)
        ->get();
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            //return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
            return view('stocks.agregarfoto', compact('nota',));
        }
        $nota = " ";
        return view('stocks.agregarfotodatos', compact('nota', 'envio'));
    }
 
    public function guardandofoto23(Request $request) 
    {
        $foto1 = $request->file("foto1");
        dd($foto1);
    }
    

    public function guardandofoto(Request $request) 
    {
        $guia = $request->get('guia2') ;    
        $foto1 = $request->file("foto1");
        //dd($foto1);
        if ($request->hasFile('foto1')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto1");
            $nombreimagen = "foto1" . Str::slug(time()) . "." . $imagen->guessExtension();
            //dd($request->all());
            //dd($envio);
            $envio->foto1 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        }   
        //dd($request->file("foto2"));
        if ($request->hasFile('foto2')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto2");
            $nombreimagen = "foto2" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto2 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        }   
        if ($request->hasFile('foto3')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto3");
            $nombreimagen = "foto3" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto3 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        } 
        if ($request->hasFile('foto4')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto4");
            $nombreimagen = "foto4" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto4 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        } 
        if ($request->hasFile('foto5')) {
            $pedidos = Envio::where('guia', $guia)
        ->get(); 
            $guiaact = $pedidos[0]->id;
            $envio = Envio::find($guiaact);
            $imagen = $request->file("foto5");
            $nombreimagen = "foto5" . Str::slug(time()) . "." . $imagen->guessExtension();
//            dd($envio);
            $envio->foto5 = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
            $envio->save();  
        } 
    
        
       $nota = " ";
        return view('stocks.agregarfoto', compact('nota'));
    }

    public function asignarestado()
    {
         $nota = " "; 
        
        return view('stocks.asignarestado', compact('nota'));
    }

    public function asignarestadodatos(Request $request)
    {
        $guia = $request->get('guia') ;

        $envio = Envio::where('guia', $guia)
        ->get();
        $actual = Str::slug(time());
        
        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 

            $pedidos = Envio::where('cestado', $actual)
        ->get();
            //return view('stocks.asignarrepartidor', compact('nota'));
            $agencias = Agencia::all();
            return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
            
        }
 //dd($actual);
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cestado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cestado', $actual)
        ->get();

        //$empleados = Empleado::all(); 
$agencias = Agencia::all();
        return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function agregarestado(Request $request)
    {
        $guia = $request->get('guia') ;

        $envio = Envio::where('guia', $guia)
        ->get();
        $actual = $request->get('actual') ;

         $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 

            $pedidos = Envio::where('cestado', $actual)
        ->get();
            //return view('stocks.asignarrepartidor', compact('nota'));
            $agencias = Agencia::all();
            return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
            
        }
 //dd($actual);
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->cestado = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('cestado', $actual)
        ->get();

        //$empleados = Empleado::all(); 
$agencias = Agencia::all();
        return view('stocks.asignarestadodatos', compact('pedidos', 'actual', 'nota', 'agencias'));
    }

    public function guardarestado(Request $request)
    {
       // dd("Aqui entro");
       
        $agencia = $request->get('agencia');
        $cajasuelto = $request->get('cajasuelto');
        $caja = $request->get('caja');
        $rack = $request->get('rack');
        $nivel = $request->get('nivel');
        $tarima = $request->get('tarima');
        //$id = $request->get('asignum2');

        //$envio = Envio::find($id);
        //$envio->cambiando = $actual;
        
        $racks = $request->get('racks');
        $nivels = $request->get('nivels');
        $tarimas = $request->get('tarimas');
       
        $estado = $request->get('estado') ;
        $actual = $request->get('actual2') ;
        $envios = Envio::where('cestado', $actual)
        ->get();
        
        foreach($envios as $envio){



             $envio->ubicacion = $cajasuelto;

            if($cajasuelto=="caja"){
                $envio->rack = $rack;
            $envio->nivel = $nivel;
            $envio->caja = $caja;
            $envio->tarima = $tarima;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 

            if($cajasuelto=="suelto"){
            $envio->rack = $racks;
            $envio->nivel = $nivels;
            $envio->caja = NULL;
            $envio->tarima = $tarimas;
            $envio->agenciaubi = $agencia;
            $envio->ubicacion = $cajasuelto;
            } 






            $envio->estado = $estado;
            $envio->ordenado = 0;

            /*
            
            if($caja){
                $envio->caja = $caja;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
            if($rack){
                $envio->rack = $rack;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
    
            if($nivel){
                $envio->nivel = $nivel;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
    
            if($tarima){
                $envio->tarima = $tarima;
                $envio->agencia = $agencia;
                $envio->ubicacion = $cajasuelto;
            }
*/
            $envio->save();
        }

       $nota = " ";

        return view('stocks.asignarestado', compact('nota'));
    }

    public function entreganoret()
    {
        $nota = " ";
         return view('stocks.entreganoret', compact('nota'));
    }

    public function entreganoretdatos(Request $request)
    {
        $nota = " ";

        $guia = $request->get('guia') ;
        $pedidos = Envio::where('ticketc', $guia)
        ->where('estado', "No entregado")
        ->get();

         if($pedidos->isEmpty()){ 
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.entreganoret', compact('nota'));

        }

         return view('stocks.entreganoretdatos', compact('pedidos', 'nota'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function guardarentrega(Request $request)
    {
        $tickets = $request->get('selec') ;
        $idtic = $request->input('idtic');
       //dd($ticket);

        $usuario = $request->get('usuario') ;
        $nota = $request->get('nota') ;
        $nombre = $request->get('nombre') ;


foreach ($tickets as $ticket) {
    //dd($ticket);


        $pedidos = Envio::where('id', $ticket)
        ->get();

        $entrega = new devolucion();
        $entrega->comercio = $pedidos[0]->comercio;
        $entrega->usuario = $usuario;
        $entrega->agenciaubi = $pedidos[0]->agencia;
        $entrega->nombre = $nombre;
        $entrega->nota = $nota;
        $entrega->idenvio = $ticket;
        $entrega->save();

        $ultimoid = devolucion::latest('id')->first();
        $iddevo = $ultimoid->id;

        
            $pedidos[0]->devo = $iddevo;
            $pedidos[0]->estado = "Devuelto al comercio";

            $pedidos[0]->save();
        
            

        $hesta = new Hestado();
            $hesta->idenvio = $ticket;
            $hesta->estado = "Devuelto al comercio";
            $hesta->usuario = $usuario;
            $hesta->nota = $nota;
            $hesta->nombre = $nombre;
            $hesta->save();

            }
$nota = " ";

$numti = $request->input('idtic');

 $pedidos = Envio::where('ticketc', $idtic)
        ->where('estado', "No entregado")
        ->get();

if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "No hay envios con el estado seleccionado"; 

            return view('stocks.entreganoretdatos2', compact('numti', 'nota')); 

        }


         return view('stocks.entreganoretdatos', compact('pedidos', 'nota'));
        
    }

     public function reportedevo()
    {
         $repartidores = User::all();
        return view('reportes.reportedevo', compact('repartidores'));
    }

    public function reportedevodatos(Request $request)
    { 

        
        $rango = $request->input('rango');
        $usuario = $request->input('usuario');
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
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

       

       
         $repartidores = User::all();
        return view('reportes.reportedevodatos', compact('repartidores', 'tickets', 'rango', 'usuario'));
    }


    public function filtrarnotre(Request $request)
    {
        $estado = $request->input('estado');
        $ticket = $request->input('ticketc');
        

         if ($estado !="todos"){
            $pedidos = Envio::where('ticketc', $ticket)
        ->where('estado', $estado)
        ->get();
         }else{
            $pedidos = Envio::where('ticketc', $ticket)
       
        ->get();
         }

$numti = $ticket;

if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "No hay envios con el estado seleccionado"; 

            return view('stocks.entreganoretdatos2', compact('numti', 'nota')); 

        }


        $nota = " ";

         return view('stocks.entreganoretdatos', compact('pedidos', 'nota'));
        
    }

     public function generarp()
    {
        $nota = " ";
         return view('stocks.generarp', compact('nota'));
    }

    public function generarpdatos(Request $request)
    {
        $nota = " ";

        $guia = $request->get('guia') ;

        $pedidos = Envio::where('ticketc', $guia)
        ->where('estado', "No entregado")
        ->where('ordenado', 0)
        ->get();

         if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.generarp', compact('nota'));

        }

         return view('stocks.generarpdatos', compact('pedidos', 'nota'));
    }


    public function guardarreenvio(Request $request)
    {
        $usuario = $request->get('usuario') ;
        $reenvi = $request->get('reenvi') ;
        $nota = $request->get('nota') ;
        $idenvio = $request->get('idenvio') ;
        $reenvi = $request->get('reenvi') ;

        //dd($idenvio);

        $envio = Envio::find($idenvio);
        $envio->ordenado = 1;
        $envio->save();

       // dd($envio->comercio);

        $ticketc = Orden::where('guia', $envio->guia)
        ->get();

        foreach ($ticketc as $tick) {
          $tickid = $tick->id;
            Orden::find($tickid)->delete();
        }

        $entrega = new Orden();
        $entrega->comercio = $envio->comercio;
        $entrega->guia = $envio->guia;
        $entrega->destinatario = $envio->destinatario;
        $entrega->tipo = "Reenvio";
        $entrega->fecha_pro = $reenvi;
        $entrega->ubicacion = $envio->agenciaubi;
        $entrega->estado = "Pendiente";
        $entrega->nota = $nota;
        $entrega->save();

$nota = " ";

        $tick = $envio->ticketc ;

        $pedidos = Envio::where('ticketc', $tick)
        ->where('estado', "No entregado")
        ->where('ordenado', 0)
        ->get();

         if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.generarp', compact('nota'));

        }

            $hesta = new Hestado();
            $hesta->idenvio = $idenvio;
            $hesta->estado = "Reenvio";
            $hesta->usuario = $usuario;
            $hesta->nota = $nota;
            $hesta->freprogra = $reenvi;
            $hesta->save();


         return view('stocks.generarpdatos', compact('pedidos', 'nota'));

    }

     public function guardardevol(Request $request)
    {
        $usuario = $request->get('usuario') ;
        $reenvi = $request->get('reenvi') ;
        $nota = $request->get('nota') ;
        $idenvio = $request->get('idenvio2') ;
        $reenvi = $request->get('devolucion') ;
        $lugar = $request->get('lugar') ;

        //dd($idenvio);

        $envio = Envio::find($idenvio);
        $envio->ordenado = 1;
        $envio->save();
       // dd($envio->comercio);

 $ticketc = Orden::where('guia', $envio->guia)
        ->get();

        foreach ($ticketc as $tick) {
          $tickid = $tick->id;
            Orden::find($tickid)->delete();
        }

        $entrega = new Orden();
        $entrega->comercio = $envio->comercio;
        $entrega->guia = $envio->guia;
        $entrega->destinatario = $envio->destinatario;
        $entrega->tipo = "Devolucion";
        $entrega->fecha_pro = $reenvi;
        $entrega->ubicacion = $envio->agenciaubi;
        $entrega->estado = "Pendiente";
        $entrega->nota = $nota;
        $entrega->lugar = $lugar;
        $entrega->save();

$nota = " ";

        $tick = $envio->ticketc ;

        $pedidos = Envio::where('ticketc', $tick)
        ->where('estado', "No entregado")
        ->where('ordenado', 0)
        ->get();

         if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "El ticket que se ingreso no existe"; 
            return view('stocks.generarp', compact('nota'));

        }


            $hesta = new Hestado();
            $hesta->idenvio = $idenvio;
            $hesta->estado = "Devolucion";
            $hesta->usuario = $usuario;
            $hesta->nota = $nota;
            $hesta->freprogra = $reenvi;
            $hesta->save();

         return view('stocks.generarpdatos', compact('pedidos', 'nota'));

    }


    public function listapi()
    {
        $nota = " ";
         $envios = Orden::whereDate('fecha_pro', Carbon::tomorrow())->get();

         return view('stocks.listapi', compact('envios', 'nota'));
    }

     public function detallepick($guia)
    {
      $pedidos = Orden::where('guia', $guia)
        
        ->get();

        $envio = Envio::where('guia', $guia)
        
        ->get();



         return view('stocks.detallepick', compact('pedidos', 'envio'));
    }

     public function realizado($guia)
    {

     
         $ticketc = Orden::find($guia);
        $ticketc->estado = "Realizado";
        $ticketc->save();

        $idguia = $ticketc->guia;
        $pedido = Envio::where('guia', $idguia)->get();
        $pedidoid = $pedido[0]->id;
        //dd($pedidoid);
        $envi = Envio::find($pedidoid);
        if ($ticketc->tipo == "Reenvio") {
           $envi->estado = "Reenvio";
        }else {
            $envi->estado = "Devolucion";
        }

        $envi->save();

            $hesta = new Hestado();
            $hesta->idenvio = $pedidoid;
            if ($ticketc->tipo == "Reenvio") {
           $hesta->estado = "Reenvio";
        }else {
            
            $hesta->estado = "Devolucion";
        }
            
            $hesta->usuario = $ticketc->usuario;
            $hesta->save();

        $nota = " ";
         $envios = Orden::whereDate('fecha_pro', Carbon::tomorrow())->get();

         return view('stocks.listapi', compact('envios', 'nota'));

      //   return view('stocks.detallepick', compact('pedidos'));
    }


    public function filtrarpicking(Request $request)
    {
        $estado = $request->input('estado');
        $ticket = $request->input('ticketc');
        

         if ($estado !="todos"){
            $pedidos = Envio::where('ticketc', $ticket)
        ->where('estado', $estado)
        ->get();
         }else{
            $pedidos = Envio::where('ticketc', $ticket)
       
        ->get();
         }

$numti = $ticket;

if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "No hay envios con el estado seleccionado"; 

            return view('stocks.generarpdatos2', compact('numti', 'nota')); 

        }


        $nota = " ";

         return view('stocks.generarpdatos', compact('pedidos', 'nota'));
        
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
