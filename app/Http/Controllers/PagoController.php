<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Cobro;
use App\Models\Ticketc;
use Carbon\Carbon;
use App\Models\Envio;
use App\Models\Ticktpago; 
use App\Models\Entrega; 
use App\Models\Caja;
use App\Models\Detallecaja;
use App\Models\Conceptocaja;
use PDF; 
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DateInterval;
use App\Models\Empleado;
use App\Exports\TicketRepoExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PagoExport;
use App\Models\Agencia;
 
class PagoController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {  
       // $pedidos = Cobro::all();
        $comercios = Comercio::all(); 
        $nota = " ";
        return view('envios.pagoslista', compact('nota','comercios'));
    }
    public function listadoticket()
    {
       // $pedidos = Cobro::all(); 
       // $tickets = Ticketc::all(); 
       $repartidores = User::all();
        return view('envios.listadoticket', compact('repartidores'));
    }

    public function exportarpago(Request $request)
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

    public function exportarpagoExcel(Request $request)
{
    $rango   = $request->input('rango2');
    $usuario = $request->input('usuario2');

    $parte1   = Str::of($rango)->explode('-');
    $fecha1   = $parte1[0];
    $fecha2   = $parte1[1];
    $fechacam1 = date('Y-m-d H:i:s', strtotime($fecha1));
    $fechacam2 = date('Y-m-d 23:59:50', strtotime($fecha2));

    $query = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2]);

    if ($usuario !== 'todos') {
        $query->where('cajero', $usuario);
    }

    // Traemos solo los campos que usamos
    $tickets = $query->get([
        'id','comercio','estado','cajero','agencia','descuento','nota','total','created_at'
    ]);

    $filename = 'reporte_pago_' . date('Ymd_His') . '.xlsx';
    return Excel::download(new PagoExport($tickets), $filename);
}

    public function ticketdatos(Request $request)
    {
        
        $rango = $request->input('rango');
        $usuario = $request->input('usuario');
        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d H:i:s', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d 23:59:50', strtotime($fecha2)) ;

       // dd($fechacam1, $fechacam2);

        if($usuario == "todos")
        {
            $tickets = Ticketc::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->get();
 
        }else{
            $tickets = Ticketc::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->where('cajero', $usuario)
            ->get();
        }

      
        $repartidores = User::all();
        return view('envios.listadoticketdatos', compact('tickets', 'repartidores', 'rango', 'usuario'));
    }

    public function reportepago()
    {
       // $pedidos = Cobro::all(); 
       // $tickets = Ticketc::all(); 
       $repartidores = User::all();
        return view('envios.reportepago', compact('repartidores'));
    }

    public function rpagodatos(Request $request)
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
            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->get();
 
        }else{
            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->where('cajero', $usuario)
            ->get();
        }

       

        $repartidores = User::all();
        return view('envios.rpagodatos', compact('tickets', 'repartidores', 'rango', 'usuario'));
    }

    public function reportepagoticket()
    {
       // $pedidos = Cobro::all(); 
       // $tickets = Ticketc::all(); 
       $repartidores = User::all();
        return view('envios.reportepagoticket', compact('repartidores'));
    }

    public function rpagodatosticket(Request $request)
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
            /*
            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->get(); 
            */
            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
                    ->orderBy('created_at', 'desc') // ordena del más reciente al más antiguo
                    ->take(20)                      // limita a los últimos 20
                    ->get();
                    $tickets = $tickets->sortBy('created_at');
 
        }else{
            /*
            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->where('cajero', $usuario)
            ->get();
            */

            $tickets = Ticktpago::whereBetween('created_at', [$fechacam1, $fechacam2])
                    ->where('cajero', $usuario)
                    ->orderBy('created_at', 'desc') // ordena del más reciente al más antiguo
                    ->take(20)                      // limita a los últimos 20
                    ->get();
                    $tickets = $tickets->sortBy('created_at');
        }

       

        $repartidores = User::all();
        return view('envios.rpagodatosticket', compact('tickets', 'repartidores'));
    }

    public function detalleticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        $pedidos = Ticketc::where('codigo', $id)->get();
        return view('envios.detalleticket', compact('pedidos'));
    }
    public function personalizadoticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Personalizado")
        ->get();
        return view('envios.personalizadoticket', compact('pedidos'));
    }

    public function puntoticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Punto fijo")
        ->get();
        return view('envios.puntoticket', compact('pedidos'));
    }
    public function departamentalticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Personalizado departamental")
        ->get();
        return view('envios.departamentalticket', compact('pedidos'));
    }

    public function casilleroticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$pedidos = Ticketc::where('codigo', $id)->get();
        //return ($id);
        $pedidos = Envio::where('ticketc', $id)
        ->where('tipo', "Casillero")
        ->get();
        return view('envios.casilleroticket', compact('pedidos'));
    }




    public function connombre(Request $request)
    {
       // $pedidos = Cobro::all();
       $comercio = $request->get('comercio') ;
       $pedidos = Envio::where('comercio', $comercio)->get();
       $comercioset = Comercio::where('comercio', $comercio)->get();
        $comercios = Comercio::all(); 
        $nota = " ";
        return view('envios.pagoslistanombre', compact('comercios', 'pedidos', 'comercioset', 'nota'));
    }

    public function listaticket()
    {
       // $pedidos = Cobro::all();
        //$comercios = Comercio::all(); 

        $nombreCajero = auth()->user()->name;

       // dd($nombreCajero);

        $idcaja = Caja::where('cajero', $nombreCajero)->where('estado', 0)->get();
        if($idcaja->isEmpty()){
             $nota = " ";
       session()->flash('error', 'Recuerda que antes de realizar un pago tienes que aperturar caja');
           return view('envios.pagoslistaticket', compact('nota'));
        }

        $nota = " ";
        return view('envios.pagoslistaticket', compact('nota'));
    }
 
    public function enviosdeticket()
    {
       // $pedidos = Cobro::all();
        //$comercios = Comercio::all(); 
        return view('envios.enviosdeticket');
    }

    public function enviosdeticketdatos(Request $request)
    {
        $comercio = $request->get('ticket') ;
 
        $envios = Envio::where('ticketc', $comercio)->get();

        return view('envios.enviosdeticketdatos', compact('envios', 'comercio'));
    }



    public function limpiarticket($comercio)
    {
        //$comercio = $request->get('ticket') ;

        $envios = Envio::where('ticketc', $comercio)->get();

        return view('envios.enviosdeticketdatos', compact('envios', 'comercio'));
    }



    public function enviosdeticketfiltro(Request $request)
    {
        $comercio = $request->get('ticketn') ;
        $estado = $request->get('filtro') ;

        $envios = Envio::where('ticketc', $comercio)
        ->where('estado', $estado)->get();


        if($estado == "todos")
       {
        $envios = Envio::where('ticketc', $comercio)->get();

       }else{
         $envios = Envio::where('ticketc', $comercio)
        ->where('estado', $estado)->get();
       }

       // $enviop = Envio::where('ticketc', $comercio)
      //  ->where('estado', $estado)->exists();
/*
        if($enviop == 0){
            return view('envios.enviosdeticket');

        }else{
            return view('envios.enviosdeticketdatos', compact('envios'));
        }
            */
            return view('envios.enviosdeticketdatos', compact('envios', 'comercio'));
        
    }
 
    

    public function filtrandonombre(Request $request)
    {
        
        //$pedidos = Pedido::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get();
        //$repartidores = Repartidor::all();
        //$vendedores = Vendedor::all()
        $comerset = $request->input('comerset');
        $rango = $request->input('rango');
        $estado = $request->input('estado');

        $parte1 = Str::of($rango)->explode('-');
        $fecha1 = $parte1[0];
        $fecha2 = $parte1[1];
        //$partenueva1 = Carbon::createFromFormat('m/d/Y',$fecha1)->format('Y-m-d');
        $fechacam1 = date('Y-m-d H:i:s', strtotime($fecha1)) ;
        $fechacam2 = date('Y-m-d 23:59:50', strtotime($fecha2)) ;
       //return ($fechacam);
       $nota = " ";
       if($estado == "todos")
       {
        $pedidos = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
        ->where('comercio', $comerset)->get();

       }else{
        $pedidos = Envio::whereBetween('fecha_entrega', [$fechacam1, $fechacam2])
       ->where('estado', $estado)
       ->where('comercio', $comerset)

       ->get();
       }
       if(empty($pedidos[0]->comercio)){
        
        $nota = "No hay envios con el estado seleccionado";

      

    }

 

       $comercios = Comercio::all(); 
       $comercioset = Comercio::where('comercio', $comerset)->get();
       return view('envios.pagoslistanombre', compact('comercios', 'pedidos', 'comercioset', 'nota'));


    } 

    public function filtrandonombre2(Request $request)
    {
        
     
        $comerset = $request->input('comerset');
      
        $estado = $request->input('estado');
        $ticketc = $request->input('ticketc');

        if($estado=="todos"){
            $pedidos = Envio::where('ticketc', $ticketc)
                 
            ->get();
        }
        else{
            $pedidos = Envio::where('ticketc', $ticketc)
            ->where('estado', $estado)
     
            ->get();
        }

        $comercios = Comercio::all(); 
       $comercioset = Comercio::where('comercio', $comerset)->get();
       $nota = " ";
        if(empty($pedidos[0]->comercio)){
            $pedidos = Envio::where('ticketc', $ticketc)->get();
            $nota = "No hay envios con el estado seleccionado";

            return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset', 'nota'));

        }else{
            return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset', 'nota'));
        }
      

       
      // return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset'));


    } 

    public function conticket(Request $request)
    { 
       // $pedidos = Cobro::all();
       $comercio = $request->get('ticket') ;

       $pedidos = Envio::where('ticketc', $comercio)->get();
      
     //  return ($pedidos[0]->comercio);
       
        $comercios = Comercio::all(); 
        $nota = " ";
        if(empty($pedidos[0]->comercio)){
            $comer = $comercios[0]->comercio;
            $comercioset = Comercio::where('comercio', $comer)->get();
            $nota = "El ticket no existe";
            return view('envios.pagoslistaticket', compact('nota'));
        }else{
            $comer = $pedidos[0]->comercio;
            $comercioset = Comercio::where('comercio', $comer)->get();
        }
        $agencias = Agencia::all();
$empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.pagoslistaticketdatos', compact('comercios', 'pedidos', 'comercioset', 'nota', 'agencias', 'empleado'));
        
    }

    public function pagoticket(Request $request)
    {
        

        $activo = $request->has('pagado') ? 1 : 0;
         $verificado = $request->has('verificado') ? 1 : 0;
          $revision = $request->has('enrevision') ? 1 : 0;
          $recibe = $request->get('recibe');
          $dui = $request->get('dui');

          if ($activo== 0 && $verificado== 0 && $revision== 0 ) {

           // dd("todo desactivado");
           // return back()->with('Error', 'Debe de seleccionar Pagado, Verificado o En revision');
            $nota = "Debe de seleccionar Pagado, Verificado o En revision ";
        return view('envios.pagoslistaticket', compact('nota'));

            }

        if ($activo== 1) {
         //guardar movimiento
        $idcaja = Caja::where('cajero', Auth::user()->name)
        ->where('estado', 0)
        ->get();
        if($idcaja->isEmpty()){
           $conceptos = Conceptocaja::all();
        $cajas = Detallecaja::whereDate('created_at', Carbon::today())
    ->where('cajero', Auth::user()->name)
    ->get();
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
       //  return view('caja.cajero', compact('empleado', 'cajas', 'conceptos'))->with('error', 'Debe de abrir caja antes de agregar movimientos');
       return redirect()->route('cajero')->with('Error', 'Debe de abrir caja antes de agregar movimientos');
        }
        }

       


        $identrega = $request->get('entrega');
        $cajero = $request->get('cajero');
        $metodo = $request->get('metodo');
        $descu = $request->get('descuento');
        $sutota = $request->get('stota');
        $nota = $request->get('nota');
        $tota = $request->get('tota');
        //dd($tota);
        $agencia = $request->get('agencia');
        $comercio = $request->get('comercio');

        $pagado = $request->get('pagado');
        
        
         $verificado = $request->has('verificado') ? 1 : 0;
          $revision = $request->has('enrevision') ? 1 : 0;
        $pedido = new Ticktpago();
        $pedido->comercio = $comercio;
        $pedido->descuento = $descu;
        $pedido->subtotal = $sutota;
        $pedido->total = $tota;
        $pedido->metodo = $metodo;
        $pedido->entrega = $request->get('entrega');
        $pedido->cambio = $request->get('cambio');
        $pedido->cajero = $cajero;
        $pedido->nota = $nota;
        $pedido->agencia = $agencia;
        $pedido->recibe = $recibe;
        $pedido->dui = $dui;
        $pedido->save();
        $ticketact = Ticktpago::latest('id')->first();
        $checked = $request->input('checked');
       $envios = Envio::query()->find($checked);

        $idinforme = Ticktpago::query()->find($ticketact->id);



       if($envios){     
        foreach($envios as $envio){        
            $envio->pagoticket = $ticketact->id;
            if ($activo== 1) {
                $envio->pago = "Pagado";
                $idinforme->estado = "Pagado";
            }
            if ($verificado== 1) {
                $envio->pago = "Verificado";
                $idinforme->estado = "Verificado";
                $idinforme->save();      
            $envio->save();          
               $nota = " ";
        return view('envios.pagoslistaticket', compact('nota'));
            }
            if ($revision== 1) {
                $envio->pago = "En revision";
                $idinforme->estado = "En revision";
                $idinforme->save();     
            $envio->save();
               $nota = " ";
        return view('envios.pagoslistaticket', compact('nota'));
            } 
                  
            $envio->save();   

            }
            $idinforme->save();
       }

       
 if ($activo== 1) {
         //guardar movimiento
        $idcaja = Caja::where('cajero', $cajero)
        ->where('estado', 0)
        ->get();
        if($idcaja->isEmpty()){
           $conceptos = Conceptocaja::all();
        $cajas = Detallecaja::all();
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
         return view('caja.cajero', compact('empleado', 'cajas', 'conceptos'))->with('Error', 'Debe de abrir caja antes de agregar movimientos');
        }
        $ultimoMovi = Detallecaja::where('idcaja', $idcaja[0]->id)
                ->latest('id') // o cualquier columna de ordenamiento como created_at
                ->first();
        $saldomovi = $ultimoMovi->saldo;
        $movimiento = new Detallecaja();
    $movimiento->cajero = $request->get('cajero') ;
    $movimiento->agencia = $request->get('agencia') ;
    $movimiento->tipo =  "Salida";
    $movimiento->concepto =  "Pago del ticket " . $ticketact->id;
    $movimiento->valor =  $tota;
    $movimiento->saldo = $saldomovi - $tota;
    $movimiento->idcaja = $idcaja[0]->id ;
    $movimiento->save();
}

        $pdf = PDF::loadView('envios.pagoticket', ['ticketact'=>$ticketact, 'envios'=>$envios]);
       
        $customPaper = array(0,0,360,750);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();
    }






    public function pagoticket2(Request $request)
    {
        $identrega = $request->get('entrega');
        $cajero = $request->get('cajero');
        $metodo = $request->get('metodo');
        $descu = $request->get('descuento');
        $sutota = $request->get('stota');
        $nota = $request->get('nota');
        $tota = $request->get('tota');
        $agencia = $request->get('agencia');
        $comercio = $request->get('comercio');


        $pedido = new Ticktpago();
        $pedido->comercio = $comercio;
        $pedido->descuento = $descu;
        $pedido->subtotal = $sutota;
        $pedido->total = $tota;
        $pedido->metodo = $metodo;
        $pedido->entrega = $request->get('entrega');
        $pedido->cambio = $request->get('cambio');
        $pedido->cajero = $cajero;
        $pedido->nota = $nota;
        $pedido->agencia = $agencia;
        $pedido->save();

        $ticketact = Ticktpago::latest('id')->first();


        $checked = $request->input('checked');
       $envios = Envio::query()->find($checked);

       if($envios){
        foreach($envios as $envio){
            
            $envio->pagoticket = $ticketact->id;
            $envio->pago = "Pagado";
            $envio->save();

            }
       }

       

        $pdf = PDF::loadView('envios.pagoticketnombre', ['ticketact'=>$ticketact, 'envios'=>$envios]);
       
        $customPaper = array(0,0,360,750);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();
    }

    public function exportarticket( $ticketc)
    {
        //Alert::message('Mensaje', 'Título opcional');

        $pedidos = Envio::where('ticketc', $ticketc)->get();
        $comercio = $pedidos[0]->comercio;
        $total = 0;
        $cantidad = 0;

        foreach($pedidos as $pedido){
            
            $total = $total + $pedido->total  ;
            
            $cantidad = $cantidad + 1;
            }

        $comerset = Comercio::where('comercio', $comercio)->get();
        $pdf = PDF::loadView('envios.exportarpagarticket', ['pedidos'=>$pedidos, 'comerset'=>$comerset, 'total'=>$total, 'cantidad'=>$cantidad]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();


    }



    public function exportarticketrepo( $ticketc)
    {
        //Alert::message('Mensaje', 'Título opcional');
 
        $pedidos = Envio::where('pagoticket', $ticketc)->get();
        $comercio = $pedidos[0]->comercio;
        $total = 0;
        $cantidad = 0;
        $pagototal = Ticktpago::where('id', $ticketc)->get();
        $total = $pagototal[0]->total  ;
        foreach($pedidos as $pedido){
            $cantidad = $cantidad + 1;
            }

        $comerset = Comercio::where('comercio', $comercio)->get();
        $pdf = PDF::loadView('envios.exportarpagarticketrepo', ['pedidos'=>$pedidos, 'comerset'=>$comerset, 'total'=>$total, 'cantidad'=>$cantidad]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();
    }


    public function exportarticketrepoExcel($ticketc)
{
    // Mismos datos que usas para el PDF
    //dd("entro al metodo");
    $pedidos = Envio::where('pagoticket', $ticketc)->get();
    if ($pedidos->isEmpty()) {
        abort(404, 'No se encontraron guías para el ticket especificado.');
    }
 
    $pago   = Ticktpago::find($ticketc);
    $total  = (float) ($pago?->total ?? 0);
    $user   = Auth::user()?->name ?? '—';
    $rep    = $pedidos[0]->repartidor ?? null;
    $count  = $pedidos->count();

    // Descarga el Excel
    $filename = 'reporte_ticket_' . $ticketc . '_' . date('Ymd_His') . '.xlsx';
    return Excel::download(
        new TicketRepoExport(
            rows: $pedidos,
            usuario: $user,
            repartidor: $rep,
            ticketId: $ticketc,
            cantidadGuias: $count,
            totalPagado: $total
        ),
        $filename
    );
}

    public function exportarticketentre( $ticketc)
    {
        //Alert::message('Mensaje', 'Título opcional');

        $pedidos = Envio::where('entrega2', $ticketc)->get();
        $comercio = $pedidos[0]->comercio;
        $total = 0;
        $cantidad = 0;
        $pagototal = Entrega::where('id', $ticketc)->get();
        $total = $pagototal[0]->total  ;
        foreach($pedidos as $pedido){
            
           
            
            $cantidad = $cantidad + 1;
            }

        $comerset = Comercio::where('comercio', $comercio)->get();

        $pdf = PDF::loadView('envios.exportarentregaticketrepo', ['pedidos'=>$pedidos, 'comerset'=>$comerset, 'total'=>$total, 'cantidad'=>$cantidad]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();


    }

    public function exportarcomercio( $ticketc)
    {
        
        //Alert::message('Mensaje', 'Título opcional');

        //$pedidos = Envio::where('ticketc', $ticketc)->get();
        $pedidos = Envio::where('comercio', $ticketc)->get();
       // $comercio = $pedidos[0]->comercio;
        $total = 0;
        $cantidad = 0;

        foreach($pedidos as $pedido){
            
            $total = $total + $pedido->total  ;
            
            $cantidad = $cantidad + 1;
            }

        //$comerset = Comercio::where('comercio', $comercio)->get();
        $pdf = PDF::loadView('envios.exportarpagarcomercio', ['pedidos'=>$pedidos, 'total'=>$total, 'cantidad'=>$cantidad]);
            $pdf->setPaper('letter', 'landscape');
            return $pdf->stream();


    }

    public function lisdopagosdatos($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 

        $pago = Ticktpago::where('id', $id)->get();

        //return ($id);
       // $rango = $request->input('rango');
        $tickets = Envio::where('pagoticket', $id)
        ->get();

        if($tickets->isEmpty()){

           // dd("se fue");

          // return redirect()->back()->with('Error', 'Debe de abrir caja antes de agregar movimientos');
          // return redirect()->route('cajero')->with('Error', 'El ticket no contiene datos');
           return redirect()->back()->with('Error', 'El ticket no contiene datos');
           
        }


        return view('envios.rlistadopagodatos', compact('tickets', 'pago'));
    }

    public function lisdoentregadatos($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        $pago = Entrega::where('id', $id)->get();
        //return ($id);
       // $rango = $request->input('rango');
        $tickets = Envio::where('entrega2', $id)
        ->get();
        return view('envios.rlistadoentregadatos', compact('tickets', 'pago'));
    }


    public function lisdopagosdatosticket($id)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        $pago = Ticktpago::where('id', $id)->get();
        //return ($id);
       // $rango = $request->input('rango');
        $tickets = Envio::where('pagoticket', $id)
        ->get();
        return view('envios.rlistadopagodatosticket', compact('tickets', 'pago'));
    }

     public function pagotodo(Request $request)
    {
       // $pedidos = Cobro::all();
        //$tickets = Ticketc::all(); 
        //$envios = Envios::where('pagoticket', $id)->get();
$usuario = Auth::user()->name ?? '—';

       $checked = $request->input('checked');
     //  $checked2 = $request->input('pruebita');
       $envios = Envio::query()->find($checked);
       $quienpago = $envios[0]->pagoticket;

       $tickepago = Ticktpago::query()->find($quienpago);
       $ticketact = Ticktpago::query()->find($quienpago);
        $tickepago->userpago = $usuario;
        $tickepago->fechapago = Carbon::now();
        $tickepago->estado = "Pagado";
        $tickepago->save();
      // dd($checked);

        if($envios){
        foreach($envios as $envio){
            
            //$envio->pagoticket = $ticketact->id;
            $envio->pago = "Pagado";
            $envio->save();

            }
       }


        $repartidores = User::all();

        $pdf = PDF::loadView('envios.pagoticketlista', ['ticketact'=>$ticketact, 'envios'=>$envios]);
       
        $customPaper = array(0,0,360,750);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();
        //return view('envios.reportepagoticket', compact('repartidores'));
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
