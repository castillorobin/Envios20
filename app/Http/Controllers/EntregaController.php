<?php

namespace App\Http\Controllers;
 
use App\Models\Entrega;
use App\Models\Envio;
use App\Models\Caja;
use App\Models\Detallecaja;
use App\Models\Conceptocaja;
use Illuminate\Http\Request;
use PDF; 
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntregalistaExport;

//use App\Models\Entrega;

class EntregaController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
$nota = " "; 
        //guardar movimiento
        $idcaja = Caja::where('cajero', Auth::user()->name)
        ->where('estado', 0)->get();

        if($idcaja->isEmpty()){
           // dd("entro al IF");
          // $conceptos = Conceptocaja::all();
       // $cajas = Detallecaja::whereDate('created_at', Carbon::today());
         $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        session()->flash('Error', 'Recuerda que antes de realizar un pago tienes que aperturar caja');
        return view('entrega.entregas ', compact('nota'))->with('Error', 'Debe de abrir caja antes de agregar movimientos');
        //return redirect()->route('indexentre')->with('Error', 'Debe de abrir caja antes de agregar movimientos');
        }

        
        return view('entrega.entregas ', compact('nota'));
    } 

        public function exportarentregalistaExcel($ticketc)
{
    // Mismos datos que usas para el PDF
    //dd("entro al metodo");
    $pedidos = Envio::where('entrega2', $ticketc)->get();
    if ($pedidos->isEmpty()) {
        abort(404, 'No se encontraron guías para el ticket especificado.');
    }
 
    $pago   = Entrega::find($ticketc);
    $total  = (float) ($pago?->total ?? 0);
    $user   = Auth::user()?->name ?? '—';
    $rep    = $pedidos[0]->repartidor ?? null;
    $count  = $pedidos->count();

    // Descarga el Excel
    $filename = 'reporte_ticket_' . $ticketc . '_' . date('Ymd_His') . '.xlsx';
    return Excel::download(
        new EntregalistaExport(
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

     public function entregacasidatos(Request $request)
    {
        $nota = " ";

        $guia = $request->get('guia') ;
        $pedidos = Envio::where('guia', $guia)->get();

         if($pedidos->isEmpty()){ 
            //dd("no hay envio");
            $nota = "La guia que se ingreso no existe"; 
            return view('entrega.entregacasidatos', compact('pedidos', 'nota'));

        }

         return view('entrega.entregacasidatos', compact('pedidos', 'nota'));
    }

    public function filtrarcasi(Request $request)
    {
        $estado = $request->input('estado');
        $ticket = $request->input('ticketc');
        

         if ($estado !="todos"){
            $pedidos = Envio::where('entrega2', $ticket)
        ->where('estado', $estado)
        ->get();
         }else{
            $pedidos = Envio::where('entrega2', $ticket)
       
        ->get();
         }

$actual = $ticket;

if($pedidos->isEmpty()){
            //dd("no hay envio");
            $nota = "No hay envios con el estado seleccionado"; 

           return view('entrega.entregacasidatos', compact('pedidos', 'nota', 'actual'));

        }
 

        $nota = " ";

         return view('entrega.entregacasidatos', compact('pedidos', 'nota', 'actual'));
        
    }
    
    public function listadoentregas()
    {
        $tickets = Entrega::all();
        $repartidores = User::all();
        
        return view('envios.reporteentrega', compact('tickets', 'repartidores'));
    }

    public function entregadatos(Request $request)
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
            $tickets = Entrega::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->get();
 
        }else{
            $tickets = Entrega::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->where('cajero', $usuario)
            ->get();
        }

       

        $repartidores = User::all();
        return view('envios.reporteentregadatos', compact('tickets', 'repartidores'));
    }


    
   
    public function agregar(Request $request)
    {
        $guia = $request->get('guia') ;

        $ticket = new Entrega();
        //$ticket->codigo = $request->get('codigo');
        $ticket->save();
        $actualid = Entrega::latest('id')->first();
        $actual = $actualid->id;

        $envio = Envio::where('guia', $guia)
        ->get();

       
        //$pedido = Envio::where('guia', $guia)->get();

        $nota = " "; 
        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
           
        }
       
 
        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->entrega2 = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('entrega2', $actual)
        ->get();

        
        return view('entrega.entregacasidatos', compact('pedidos', 'nota', 'actual'));
        //return view('envios.entregasagregar', compact('actual', 'pedidos'));
    }

    public function agregarparte(Request $request)
    {
        $guia = $request->get('guia') ;
        $actual = $request->get('entrega') ;

        $envio = Envio::where('guia', $guia)
        ->get();

        if($envio->isEmpty()){
            $nota = "La Guía que se ingreso no existe"; 
            //return view('envios.registroconguia', compact('nota'));
            return redirect()->back()->withErrors(['msg' => 'La Guía que se ingreso no existe']);;
           
        }
       


        $envioid= $envio[0]->id ;

        $ticketc = Envio::find($envioid);
        $ticketc->entrega2 = $actual;
        
        $ticketc->save();

        $pedidos = Envio::where('entrega2', $actual)
        ->get();
$nota = " "; 
        return view('entrega.entregacasidatos', compact('pedidos', 'nota', 'actual'));
        //return view('envios.entregasagregar', compact('actual', 'pedidos'));
    }
    public function limpiar($id)
    {
        $pedido = Envio::find($id);
        $actual= $pedido->entrega2;
        $pedido->entrega2 = NULL;
        $pedido->save();

       // $actual= $pedido->entrega2;

        $pedidos = Envio::where('entrega2', $actual)
        ->get();

        
        return view('envios.entregasagregar', compact('actual', 'pedidos'));


        //return redirect()->back();
        //return view('envios.departamentalticket', compact('pedidos'));
    }

    public function ticketentrega(Request $request)
    {
        $identrega = $request->get('entrega2');
        $cajero = $request->get('cajero');
        $metodo = $request->get('metodo');
        $descu = $request->get('descu');
        $sutota = $request->get('sutota');
        $nota = $request->get('nota');
        $tota = $request->get('tota');
        $agencia = $request->get('agencia');


        $pedido = Entrega::find($identrega);
        $pedido->cajero = $cajero;
        $pedido->metodo = $metodo;
        $pedido->desceunto = $descu;
        $pedido->nota = $nota; 
        $pedido->subtotal = $sutota;
        $pedido->total = $tota;
        $pedido->agencia = $agencia;
        $pedido->entrega = $request->get('entrega3');
        $pedido->cambio = $request->get('cambio');
        $pedido->save();



        $envios = Envio::where('entrega2', $identrega)
        ->get();

        


        foreach($envios as $envio){
            $envioid = $envio->id;
            if($metodo == "Efectivo"){
                $envio->pago = "Por pagar";
            }else{
                $envio->pago = "Pagado";
            }
            $envio->estado = "Entregado";
            $envio->save();
            
        }
       


        $ticketact = Entrega::where('id', $identrega)
        ->get();

        //guardar movimiento
        $idcaja = Caja::where('cajero', $cajero)
        ->where('estado', 0)
        ->get();

        if($idcaja->isEmpty()){
             $conceptos = Conceptocaja::all();
       $cajas = Detallecaja::whereDate('created_at', Carbon::today())->where('cajero', Auth::user()->name)
        ->get();;
          $empleado = Empleado::where('nombre', Auth::user()->name)->get();
          session()->flash('Error', 'Recuerda que antes de realizar un pago tienes que aperturar caja');
         return view('caja.cajero', compact('cajas', 'conceptos', 'empleado'))->with('Error', 'Debe de abrir caja antes de agregar movimientos');
        }
        $ultimoMovi = Detallecaja::where('idcaja', $idcaja[0]->id)
                ->latest('id') // o cualquier columna de ordenamiento como created_at
                ->first();
        $saldomovi = $ultimoMovi->saldo;

        $movimiento = new Detallecaja();
    
    $movimiento->cajero = $request->get('cajero') ;
    $movimiento->agencia = $request->get('agencia') ;
    $movimiento->tipo =  "Entrada";
    $movimiento->concepto =  "Entrega ticket " . $identrega;
    $movimiento->valor =  $tota;
    $movimiento->saldo = $saldomovi + $tota;
    $movimiento->idcaja = $idcaja[0]->id ;
    $movimiento->save();

        $pdf = PDF::loadView('envios.ticketentrega', ['ticketact'=>$ticketact, 'envios'=>$envios]);
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,750);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

        //return view('envios.entregas');
        //return redirect()->back();
        //return view('envios.departamentalticket', compact('pedidos'));
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
    public function show(Entrega $entrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrega $entrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrega $entrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrega $entrega)
    {
        //
    }
}
