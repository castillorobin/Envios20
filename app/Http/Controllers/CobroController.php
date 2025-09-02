<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Cobro;
use App\Models\Ticketc;
use Carbon\Carbon;
use App\Models\Envio;
use PDF;
use App\Models\Hestado;
use App\Models\Caja;
use App\Models\Detallecaja;
use App\Models\Conceptocaja;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RecepcionExport;

class CobroController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Cobro::all();
        $comercios = Comercio::all(); 
        $nota=""; 
        
        $comercio11 = "";
        $correo11 = "";
        $direccion11 = "";
        $telefono11 = "";

        $comer=" ";
        $cobrodepa = Cobro::where('tipo', "Personalizado")->get();
        $cobrodepa = $cobrodepa->count();
        $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
            $cobroperdepa = $cobroperdepa->count();
            $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
            $cobropfijo = $cobropfijo->count();
            $cobrocasi = Cobro::where('tipo', "Casillero")->get();
            $cobrocasi = $cobrocasi->count();

            $ultimoid = Ticketc::latest('id')->first();
            $idcompr = $ultimoid->id + 1;
     
            $date = Carbon::now();
            $date = $date->format('Y');
            $factura = "$date".$idcompr;
            $codigo11 = "$date".$idcompr;
      $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.registroorden', compact('empleado','codigo11', 'comercio11', 'correo11', 'direccion11', 'telefono11', 'comercios','idcompr', 'factura', 'nota', 'pedidos', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));
    }

    public function exportarrecepcion(Request $request)
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
            $tickets = Ticketc::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->get();
 
        }else{
            $tickets = Ticketc::whereBetween('created_at', [$fechacam1, $fechacam2])
            ->where('cajero', $usuario)
            ->get();
        }

        $pdf = PDF::loadView('reportes.pagopdf', ['cajas'=>$tickets])->setPaper('letter', 'landscape');

        return $pdf->stream();
     
    }

    public function exportarrecepcionExcel(Request $request)
{
    $rango   = $request->input('rango2');
    $usuario = $request->input('usuario2');

    $parte1  = Str::of($rango)->explode('-');
    $fecha1  = $parte1[0];
    $fecha2  = $parte1[1];

    $fechacam1 = date('Y-m-d H:i:s', strtotime($fecha1));
    $fechacam2 = date('Y-m-d 23:59:50', strtotime($fecha2));

    $query = Ticketc::whereBetween('created_at', [$fechacam1, $fechacam2]);

    if ($usuario !== 'todos') {
        $query->where('cajero', $usuario);
    }

    // Trae los campos que usas en el Excel/PDF
    $tickets = $query->get([
        'codigo','comercio','cajero','agencia',
        'persoi','puntoi','casili','depari','guiasi',
        'iva','descuento','nota','total','created_at'
    ]);

    $filename = 'recepcion_' . date('Ymd_His') . '.xlsx';
    return Excel::download(new RecepcionExport($tickets), $filename);
}
    
    
    public function limpieza($tipo11, $ticketactual)
    {

        
       $codigo = $ticketactual;
       $tipo = $tipo11;

        $envios = Envio::where('ticketc', $codigo)
        ->where('tipo', $tipo)
        ->get();

        foreach($envios as $envio){
            $envioid = $envio->id;
            Envio::find($envioid)->delete();
        }


        if ($tipo == "Personalizado") {
            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();
//$ticketactual = Ticketc::where('codigo', $codigo)->get();
        
        //$ticketactual = $codigo;

        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        $precio1= 0;
        $precio2= $ticketactual[0]->depari;
        $precio3= $ticketactual[0]->puntoi;
        $precio4= $ticketactual[0]->casili;
        $precio5= $ticketactual[0]->guiasi;
        $nota = " ";

        $comercios = Comercio::all(); 
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
 
        return view('envios.registroordenlista', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }

        /// Personalizado departamental

        if ($tipo == "Personalizado departamental") {
            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();

        $precio1= $ticketactual[0]->persoi;
        $precio2= 0;
        $precio3= $ticketactual[0]->puntoi;
        $precio4= $ticketactual[0]->casili;
        $precio5= $ticketactual[0]->guiasi;
        $nota = " ";
        //$ticketactual = $codigo;

        

        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        $comercios = Comercio::all(); 
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
 
        return view('envios.registroordenlistadepa', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }

        /// Punto fijo

        if ($tipo == "Punto fijo") {
            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();

        $precio1= $ticketactual[0]->persoi;
        $precio2= $ticketactual[0]->depari;
        $precio3= 0;
        $precio4= $ticketactual[0]->casili;
        $precio5= $ticketactual[0]->guiasi;
        $nota = " ";
        //$ticketactual = $codigo;

        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        $comercios = Comercio::all(); 
 $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.registroordenlistapunto', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }
        /// Casillero

        if ($tipo == "Casillero") {
            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();

        $precio1= $ticketactual[0]->persoi;
        $precio2= $ticketactual[0]->depari;
        $precio3= $ticketactual[0]->puntoi;
        $precio4= 0;
        $precio5= $ticketactual[0]->guiasi;
        $nota = " ";
        //$ticketactual = $codigo;

        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        $comercios = Comercio::all(); 
            $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.registroordenlistacasi', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }

      // return redirect()->back();

    }



    public function imprimir(Request $request)
    {
        $pdf = PDF::loadView('envios.ticketpagos');
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,550);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

    }
    public function ticketlistado($id)
    {
        $ticketact = Ticketc::where('codigo', $id)
        ->get();

        $pdf = PDF::loadView('envios.ticketpagos', ['ticketact'=>$ticketact]);
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,650);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

    }

    public function ticket(Request $request)
    {
        $ticketnum = $request->get('ticketnum');
        //$ticketid = $request->get('ticketid');
        $agencia = $request->get('agencia');
        $cajero = $request->get('cajero');
        $nota = $request->get('nota');
       // dd($nota);
        $ticketid1 = Ticketc::where('codigo', $ticketnum)
        ->get();
        $ticketid = $ticketid1[0]->id; 
        //return ($ticketid);

        $cobroperso = Envio::where('ticketc', $ticketnum)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $ticketnum)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $ticketnum)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $ticketnum)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();


        $envios = Envio::where('ticketc', $ticketnum)->get();


        //guardar movimiento
        $idcaja = Caja::where('cajero', $cajero)
        ->where('estado', 0)
        ->get();
 
        if($idcaja->isEmpty()){
           $conceptos = Conceptocaja::all();
        $cajas = Detallecaja::all();
         return view('caja.cajero', compact('cajas', 'conceptos'))->with('Error', 'Debe de abrir caja antes de agregar movimientos');
        }
        $ultimoMovi = Detallecaja::where('idcaja', $idcaja[0]->id)
                ->latest('id') // o cualquier columna de ordenamiento como created_at
                ->first();
        $saldomovi = $ultimoMovi->saldo;

        $movimiento = new Detallecaja();
    
    $movimiento->cajero = $request->get('cajero') ;
    $movimiento->agencia = $request->get('agencia') ;
    $movimiento->tipo =  "Entrada";
    $movimiento->concepto =  "Cobro del ticket " . $ticketnum;
    $movimiento->valor =  $request->get('total2');
    $movimiento->saldo = $saldomovi + $request->get('total2');
    $movimiento->idcaja = $idcaja[0]->id ;
    $movimiento->save();

        foreach($envios as $envio){
            
            $envio->usuario = $cajero;
            $envio->agencia = $agencia;
            $envio->save();
            }






        $ticketc = Ticketc::find($ticketid);

      //  $ticketc = Ticketc::where('codigo', $ticketnum)
       // ->get();
        $ticketc->perso = $cobroperso;
        $ticketc->punto = $cobropfijo ;
        $ticketc->casil = $cobrocasi ;
        $ticketc->depar = $cobroperdepa ;
        $ticketc->cajero = $cajero ;
        $ticketc->persoi = $request->get('pre1');
        $ticketc->depari = $request->get('pre2');
        $ticketc->puntoi = $request->get('pre3');
        $ticketc->casili = $request->get('pre4');
        $ticketc->guias = $request->get('pre5');
        $ticketc->guiasi = $request->get('pre5');
        $ticketc->descuento = $request->get('descuent');
        $ticketc->iva = $request->get('iva2');
        $ticketc->total = $request->get('total2');
        $ticketc->metodo = $request->get('metodo');
        $ticketc->entrega = $request->get('pago');
        $ticketc->cambio = $request->get('cambio');
        $ticketc->nota = $nota;
        $ticketc->agencia = $agencia;
        //$ticketc->iva = $ ;
        $ticketc->save();
        $ticketact = Ticketc::where('codigo', $ticketnum)
        ->get();








        $pdf = PDF::loadView('envios.ticketpagos', ['ticketact'=>$ticketact]);
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,650);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

    }

    public function ticketcabeza(Request $request)
    {

        $idcaja = Caja::where('cajero', Auth::user()->name)
        ->where('estado', 0)
        ->get();
        if($idcaja->isEmpty()){
         //  $conceptos = Conceptocaja::all();
       // $cajas = Detallecaja::whereDate('created_at', Carbon::today())
   // ->where('cajero', Auth::user()->name)
   // ->get();
    //    $empleado = Empleado::where('nombre', Auth::user()->name)->get();
       //  return view('caja.cajero', compact('empleado', 'cajas', 'conceptos'))->with('error', 'Debe de abrir caja antes de agregar movimientos');
       return redirect()->route('cajero')->with('Error', 'Debe de abrir caja antes de agregar movimientos');
        }
       
        $guia = $request->get('guia');
        $hayguia = Envio::where('guia', $guia)->exists();

        $guia2 = $request->get('guia2');
        $hayguia2 = Envio::where('guia', $guia2)->exists();

        $guia3 = $request->get('guia3');
        $hayguia3 = Envio::where('guia', $guia3)->exists();

        $guia4 = $request->get('guia4');
        $hayguia4 = Envio::where('guia', $guia4)->exists();

        $codigo11 = $request->get('codigo');
        $comercio11 = $request->get('comercio');
        $correo11 = $request->get('correo');
        $direccion11 = $request->get('direccion');
        $telefono11 = $request->get('telefono');
        $cajero = $request->get('cajero1');

     //   dd($cajero);
        if ($hayguia== true) {

            $nota="Guía Duplicada";
            $pedidos = Cobro::all();
            $comercios = Comercio::all(); 
            
    
            $comer=" ";
            $cobrodepa = Cobro::where('tipo', "Personalizado")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
                $cobroperdepa = $cobroperdepa->count();
                $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
                $cobropfijo = $cobropfijo->count();
                $cobrocasi = Cobro::where('tipo', "Casillero")->get();
                $cobrocasi = $cobrocasi->count();
    
                $ultimoid = Ticketc::latest('id')->first();
                $idcompr = $ultimoid->id + 1;
         
                $date = Carbon::now();
                $date = $date->format('Y');
                $factura = "$date".$idcompr;
         $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroorden', compact('empleado', 'codigo11', 'comercio11', 'correo11', 'direccion11', 'telefono11', 'comercios','idcompr', 'factura', 'nota', 'pedidos', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));

           
        }

        if ($hayguia2== true) {

            $nota="Guía Duplicada";
            $pedidos = Cobro::all();
            $comercios = Comercio::all(); 
            
    
            $comer=" ";
            $cobrodepa = Cobro::where('tipo', "Personalizado")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
                $cobroperdepa = $cobroperdepa->count();
                $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
                $cobropfijo = $cobropfijo->count();
                $cobrocasi = Cobro::where('tipo', "Casillero")->get();
                $cobrocasi = $cobrocasi->count();
    
                $ultimoid = Ticketc::latest('id')->first();
                $idcompr = $ultimoid->id + 1;
         
                $date = Carbon::now();
                $date = $date->format('Y'); 
                $factura = "$date".$idcompr;
         $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroorden', compact('empleado', 'codigo11', 'comercio11', 'correo11', 'direccion11', 'telefono11', 'comercios','idcompr', 'factura', 'nota', 'pedidos', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));

           
        }

        if ($hayguia3== true) {

            $nota="Guía Duplicada";
            $pedidos = Cobro::all();
            $comercios = Comercio::all(); 
            
    
            $comer=" ";
            $cobrodepa = Cobro::where('tipo', "Personalizado")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
                $cobroperdepa = $cobroperdepa->count();
                $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
                $cobropfijo = $cobropfijo->count();
                $cobrocasi = Cobro::where('tipo', "Casillero")->get();
                $cobrocasi = $cobrocasi->count();
    
                $ultimoid = Ticketc::latest('id')->first();
                $idcompr = $ultimoid->id + 1;
         
                $date = Carbon::now();
                $date = $date->format('Y');
                $factura = "$date".$idcompr;
         $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroorden', compact('empleado', 'codigo11', 'comercio11', 'correo11', 'direccion11', 'telefono11', 'comercios','idcompr', 'factura', 'nota', 'pedidos', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));

           
        }

        if ($hayguia4== true) {

            $nota="Guía Duplicada";
            $pedidos = Cobro::all();
            $comercios = Comercio::all(); 
            
     
            $comer=" ";
            $cobrodepa = Cobro::where('tipo', "Personalizado")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
                $cobroperdepa = $cobroperdepa->count();
                $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
                $cobropfijo = $cobropfijo->count();
                $cobrocasi = Cobro::where('tipo', "Casillero")->get();
                $cobrocasi = $cobrocasi->count();
    
                $ultimoid = Ticketc::latest('id')->first();
                $idcompr = $ultimoid->id + 1;
         
                $date = Carbon::now();
                $date = $date->format('Y');
                $factura = "$date".$idcompr;
         $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroorden', compact('empleado', 'codigo11', 'comercio11', 'correo11', 'direccion11', 'telefono11', 'comercios','idcompr', 'factura', 'nota', 'pedidos', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));

           
        }

        $codigo= $request->get('codigo');
        $comercios = Comercio::all(); 
        $nota=" ";
        $comercio = $request->get('comercio') ;
 
        $ticket = new Ticketc();
        $ticket->codigo = $request->get('codigo');
        $ticket->comercio = $request->get('comercio');
        $ticket->direccion = $request->get('direccion');
        $ticket->correo = $request->get('correo');
        $ticket->telefono = $request->get('telefono');
        $ticket->direccion = $request->get('direccion');
        $ticket->save();

        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        $precio1= $request->get('precio1');
        $precio2= $request->get('precio2');
        $precio3= $request->get('precio3');
        $precio4= $request->get('precio4');
        $precio5= $request->get('precio5');

        $nota="Guía Duplicada";

        if ($request->filled('guia')) {
            if($hayguia== 0){
                $nota=" ";
        $envio = new Envio();
        $envio->tipo = $request->get('tipo1');
        $envio->guia = $request->get('guia');
        $envio->cobro = "Pendiente";
        $envio->ticketc = $codigo;
        $envio->estado = "Recepcionado";
        $envio->dircomercio = $request->get('direccion');
        $envio->comercio = $request->get('comercio');
        $envio->entrega = $request->get('direccion');
        $envio->save();

        $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
            } 

        $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();

            $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.registroordenlista', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }

        if ($request->filled('guia2')) {
            if($hayguia== 0){
                $nota=" ";
            $envio = new Envio();
            $envio->tipo = $request->get('tipo2');
            $envio->guia = $request->get('guia2');
            $envio->cobro = "Pagado";
            $envio->ticketc = $codigo;
            $envio->estado = "Recepcionado";
            $envio->dircomercio = $request->get('direccion');
            $envio->comercio = $request->get('comercio');
            $envio->entrega = $request->get('direccion');
            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
            
            }

            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();

            $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.registroordenlistadepa', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

    
            }

            if ($request->filled('guia3')) {
                if($hayguia== 0){
                    $nota=" ";
                $envio = new Envio();
                $envio->tipo = $request->get('tipo3');
                $envio->guia = $request->get('guia3');
                $envio->cobro = "Pagado";
                $envio->ticketc = $codigo;
                $envio->estado = "Recepcionado";
                $envio->dircomercio = $request->get('direccion');
                $envio->comercio = $request->get('comercio');
                $envio->entrega = $request->get('direccion');
                $envio->save();

                $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
            
                }

                
            $cobroperso = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado")
            ->get();
            $cobroperso = $cobroperso->count();
    
            $cobroperdepa = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado departamental")
            ->get();
            $cobroperdepa =  $cobroperdepa->count();
    
            $cobropfijo = Envio::where('ticketc', $codigo)
            ->where('tipo', "Punto fijo")
            ->get();
            $cobropfijo =  $cobropfijo->count();
    
            $cobrocasi = Envio::where('ticketc', $codigo)
            ->where('tipo', "Casillero")
            ->get();
            $cobrocasi =  $cobrocasi->count();
    
                $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroordenlistapunto', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
        
                }
            
            if ($request->filled('guia4')) {
                if($hayguia== 0){
                    $nota=" ";
                    $envio = new Envio();
                    $envio->tipo = $request->get('tipo4');
                    $envio->guia = $request->get('guia4');
                    $envio->cobro = "Pagado";
                    $envio->ticketc = $codigo;
                    $envio->estado = "Recepcionado";
                    $envio->dircomercio = $request->get('direccion');
                    $envio->comercio = $request->get('comercio');
                    $envio->entrega = $request->get('direccion');
                    $envio->save();

                    $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
                }

                    $cobroperso = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado")
                ->get();
                $cobroperso = $cobroperso->count();
        
                $cobroperdepa = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado departamental")
                ->get();
                $cobroperdepa =  $cobroperdepa->count();
        
                $cobropfijo = Envio::where('ticketc', $codigo)
                ->where('tipo', "Punto fijo")
                ->get();
                $cobropfijo =  $cobropfijo->count();
        
                $cobrocasi = Envio::where('ticketc', $codigo)
                ->where('tipo', "Casillero")
                ->get();
                $cobrocasi =  $cobrocasi->count();
        
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
                return view('envios.registroordenlistacasi', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
            
                    }

                    

    }

    public function ticketpartes(Request $request)
    {
       

        $guia = $request->get('guia');
        $guia2 = $request->get('guia2');
        $guia3 = $request->get('guia3');
        $guia4 = $request->get('guia4');
        $hayguia = Envio::where('guia', $guia)->exists();
        $hayguia2 = Envio::where('guia', $guia2)->exists();
        $hayguia3 = Envio::where('guia', $guia3)->exists();
        $hayguia4 = Envio::where('guia', $guia4)->exists();
        
        $codigo= $request->get('codigo');
        $comercios = Comercio::all(); 
        $nota=" ";
        $comercio = $request->get('comercio') ;

     
        $ticketactual = Ticketc::where('codigo', $codigo)->get();
        $ticketactualid = $ticketactual[0]->id;

        $precio1= $request->get('precio1');
        $precio2= $request->get('precio2');
        $precio3= $request->get('precio3');
        $precio4= $request->get('precio4');
        $precio5= $request->get('precio5');
        $cajero = $request->get('cajero1');
        $nota="Guia Duplicada";

        $ticketcedit = Ticketc::find($ticketactualid);
      
        $ticketcedit->persoi = $precio1;
        $ticketcedit->puntoi = $precio3;
        $ticketcedit->casili = $precio4;
        $ticketcedit->depari = $precio2;
        $ticketcedit->guiasi = $precio5;
       

        $ticketcedit->save();

        $ticketactual = Ticketc::where('codigo', $codigo)->get();

        if ($request->filled('guia')) {
            
            if($hayguia== 0){
                $nota=" ";
               
            
        $envio = new Envio();
        $envio->tipo = $request->get('tipo1');
        $envio->guia = $request->get('guia');
        $envio->cobro = "Pendiente";
        $envio->ticketc = $codigo;
        $envio->estado = "Recepcionado";
        $envio->dircomercio = $request->get('direccion');
        $envio->comercio = $request->get('comercio');
        $envio->entrega = $request->get('direccion');
        $envio->save();

        $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
    }
        
        $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();

 $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.registroordenlista', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

        }
        $nota="Guia Duplicada";
        if ($request->filled('guia2')) {

            if($hayguia2== 0){
                $nota=" ";
            $envio = new Envio();
            $envio->tipo = $request->get('tipo2');
            $envio->guia = $request->get('guia2');
            $envio->cobro = "Pagado";
            $envio->ticketc = $codigo;
            $envio->estado = "Recepcionado";
            $envio->dircomercio = $request->get('direccion');
            $envio->comercio = $request->get('comercio');
            $envio->entrega = $request->get('direccion');
            $envio->save();

            $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
            }
            $cobroperso = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado")
        ->get();
        $cobroperso = $cobroperso->count();

        $cobroperdepa = Envio::where('ticketc', $codigo)
        ->where('tipo', "Personalizado departamental")
        ->get();
        $cobroperdepa =  $cobroperdepa->count();

        $cobropfijo = Envio::where('ticketc', $codigo)
        ->where('tipo', "Punto fijo")
        ->get();
        $cobropfijo =  $cobropfijo->count();

        $cobrocasi = Envio::where('ticketc', $codigo)
        ->where('tipo', "Casillero")
        ->get();
        $cobrocasi =  $cobrocasi->count();

            $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('envios.registroordenlistadepa', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
    
            }
            $nota="Guia Duplicada";
            if ($request->filled('guia3')) {
                if($hayguia3== 0){
                    $nota=" ";
                $envio = new Envio();
                $envio->tipo = $request->get('tipo3');
                $envio->guia = $request->get('guia3');
                $envio->cobro = "Pagado";
                $envio->ticketc = $codigo;
                $envio->estado = "Recepcionado";
                $envio->dircomercio = $request->get('direccion');
                $envio->comercio = $request->get('comercio');
                $envio->entrega = $request->get('direccion');
                $envio->save();

                $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
                }

                $cobroperso = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado")
            ->get();
            $cobroperso = $cobroperso->count();
    
            $cobroperdepa = Envio::where('ticketc', $codigo)
            ->where('tipo', "Personalizado departamental")
            ->get();
            $cobroperdepa =  $cobroperdepa->count();
    
            $cobropfijo = Envio::where('ticketc', $codigo)
            ->where('tipo', "Punto fijo")
            ->get();
            $cobropfijo =  $cobropfijo->count();
    
            $cobrocasi = Envio::where('ticketc', $codigo)
            ->where('tipo', "Casillero")
            ->get();
            $cobrocasi =  $cobrocasi->count();
    
    $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroordenlistapunto', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));
        
                }
                $nota="Guia Duplicada";
            if ($request->filled('guia4')) {

                if($hayguia4== 0){
                    $nota=" ";
                    $envio = new Envio();
                    $envio->tipo = $request->get('tipo4');
                    $envio->guia = $request->get('guia4');
                    $envio->cobro = "Pagado";
                    $envio->ticketc = $codigo;
                    $envio->estado = "Recepcionado";
                    $envio->dircomercio = $request->get('direccion');
                    $envio->comercio = $request->get('comercio');
                    $envio->entrega = $request->get('direccion');
                    $envio->save();

                    $hesta = new Hestado();
            $hesta->idenvio = $envio->id;
            $hesta->estado = "Recepcionado";
            $hesta->usuario = $cajero;
            $hesta->save();
                }
                    
                $cobroperso = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado")
                ->get();
                $cobroperso = $cobroperso->count();
        
                $cobroperdepa = Envio::where('ticketc', $codigo)
                ->where('tipo', "Personalizado departamental")
                ->get();
                $cobroperdepa =  $cobroperdepa->count();
        
                $cobropfijo = Envio::where('ticketc', $codigo)
                ->where('tipo', "Punto fijo")
                ->get();
                $cobropfijo =  $cobropfijo->count();
        
                $cobrocasi = Envio::where('ticketc', $codigo)
                ->where('tipo', "Casillero")
                ->get();
                $cobrocasi =  $cobrocasi->count();
        
        $empleado = Empleado::where('nombre', Auth::user()->name)->get();
                return view('envios.registroordenlistacasi', compact('empleado', 'comercios', 'ticketactual','nota', 'cobroperso', 'cobroperdepa', 'cobropfijo','cobrocasi', 'precio1', 'precio2', 'precio3' , 'precio4', 'precio5'));

            
                    }
                    return redirect()->back();
    }

 
    public function agregar(Request $request)
    {
        $guia = $request->get('guia') ;
        $pedidoesta = Cobro::find($guia);
        $pedidos = new Cobro();
        $pedidoadd = new Cobro(); 

        if(Cobro::where('guia', $guia )->exists()){
            $nota="Guía Duplicada";
            $pedidos = Cobro::all();
            $comercios = Comercio::all();
            $cobrodepa = Cobro::where('tipo', "Departamental")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
            $cobroperdepa = $cobroperdepa->count();
            $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
            $cobropfijo = $cobropfijo->count();
            $cobrocasi = Cobro::where('tipo', "Casillero")->get();
            $cobrocasi = $cobrocasi->count();
            $comer = $request->get('comerci');
$empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroorden', compact('empleado', 'pedidos', 'nota','comercios', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));


        }else{

            $pedidoadd->guia = $request->get('guia');
            $pedidoadd->comercio = $request->get('comerci');
            $pedidoadd->tipo = $request->get('tipo');
            $pedidoadd->save();
            $cobrodepa = Cobro::where('tipo', "Departamental")->get();
            $cobrodepa = $cobrodepa->count();
            $cobroperdepa = Cobro::where('tipo', "Personalizado Departamental")->get();
            $cobroperdepa = $cobroperdepa->count();
            $cobropfijo = Cobro::where('tipo', "Punto fijo")->get();
            $cobropfijo = $cobropfijo->count();
            $cobrocasi = Cobro::where('tipo', "Casillero")->get();
            $cobrocasi = $cobrocasi->count();
            $nota=" ";
            $pedidos = Cobro::all();
            $comercios = Comercio::all();
            $comer = $request->get('comerci');
            $empleado = Empleado::where('nombre', Auth::user()->name)->get();
            return view('envios.registroorden', compact('empleado', 'pedidos', 'nota','comercios', 'cobrodepa', 'comer', 'cobroperdepa', 'cobropfijo','cobrocasi'));


        }




    }

    public function limpiar()
    {
        $marca=Cobro::all();
        foreach($marca as $mar){
        $mar->delete();
     }
     return redirect('/registro-orden');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }
    public function agregarcomercio(Request $request)
    {

        $ncomercio = $request->input('fname');
        $comerto = Comercio::where('comercio', $ncomercio)->get();
        if(!empty($comerto[0]->comercio)){
             $nota = " ";
       session()->flash('error', 'El comercio que esta intentando crear ya existe');
           return redirect('/registro-orden');
        }

        $comercio = new Comercio();
        $comercio->comercio = $request->input('fname');
        $comercio->direccion = $request->input('direccion');
        $comercio->telefono = $request->input('telefono');
        $comercio->whatsapp = $request->input('whatsapp');
        $comercio->tipo = $request->input('tipo');
        $comercio->estado = $request->input('estado');
        $comercio->agencia = $request->input('agencia_registro');
        $comercio->correo = $request->input('email');
        $comercio->nota = $request->input('nota');
        $comercio->f_alta = Carbon::now();

 
/*
        $comercio->whatsapp = $request->input('whatsapp');
        $comercio->f_alta = $request->input('fecha_alta');
        $comercio->f_baja = $request->input('fecha_baja');   
        $comercio->titular = $request->input('titular');
        $comercio->banco = $request->input('banco');
        $comercio->cuenta = $request->input('cuenta');
        $comercio->dui = $request->input('dui');
        $comercio->tipo_cuenta = $request->input('tipo_cuenta');
        $comercio->chivo = $request->input('chivo');
        $comercio->tigo = $request->input('tigo');
        $comercio->empresa = $request->input('empresa');
        $comercio->tipo_contri = $request->input('tipo_contribuyente');
        $comercio->giro = $request->input('giro');
        $comercio->iva = $request->input('nit');
        $comercio->nrc = $request->input('ncr');
        $comercio->d_fiscal = $request->input('direccionf');
        //$comercio-> = $request->input('');

        */
        $comercio->save();
        return redirect('/registro-orden');
        
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
