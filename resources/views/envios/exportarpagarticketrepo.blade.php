<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de recepcion</title>
    
</head>
<body>
<style>
        .margen{
            margin: 5px;
        }
        .margenint{
            padding: 5px;
        }
        
.columna{
    width:350px;
}
.centrar{
    
    text-align: center;
}
.izqui{
    
    text-align: right;
}

    </style>
<div style="width:100%; " class="text-center centrar"> 
    <img src="../public/fotos/logo24.png" alt="" width="10%" >
    <br>
            <p></p>
            
     
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Reporte de recepcion</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
           
        </div >
        <div style="margin-top:5px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
    

    
   
   </div>
   
   <div class="fecha ">
   <span > Fecha: {{ now()->Format('d/m/Y')}} </span>
   <span style="float:right; ">Hora: {{ now()->Format('H:i A')}}</span> 
   </div>

    
   <div >
 
   
   <hr>
      <span>Usuario: {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
   <br>
<span>Repartidor: {{ $pedidos[0]->repartidor }}</span>
<br>

<span>Ticket: {{ $pedidos[0]->pagoticket }}</span>
<br>
<span>Cantidad de Guias: {{ $cantidad }}</span>
<p></p>




<table class="table table-bordered shadow-lg mt-4 centrar" style="width:100%">
<thead class="centrar" style="border-top: 2px solid black; border-bottom: 2px solid black; ">
     <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Guia</span><span class="dt-column-order"></span>
            </th>
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Comercio</span><span class="dt-column-order"></span>
            </th>

            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Destinatario</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Usuario</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Agencia</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Estado</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Estado del pago</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Tipo</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Total</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Fecha</span><span class="dt-column-order"></span>
            </th>
            
        </tr>
</thead>
<tbody >
    @foreach($pedidos as $pedido)
    <tr class="'table-row-gray' : 'table-row-white' " style="font-size:12px;">
    
    <td class="text-center">{{ $pedido->guia }}</td>
    <td class="text-center">{{ $pedido->comercio }}</td>
    <td  >{{ $pedido->destinatario }}</td>
    <td >{{ $pedido->usuario }}</td>

    <td >{{ $pedido->agencia }}</td>
    <td > {{ $pedido->estado }}</td>
    <td > {{ $pedido->pago }}</td>
    <td class="text-center">{{ $pedido->tipo }}</td>
    <td  >${{ $pedido->total }}</td>
    <td > {{  date('d/m/Y', strtotime($pedido->created_at))}}</td>
    
    
</tr>

    @endforeach
</tbody>
</table>
<br>
<p></p>
<hr>

<table style="width:100%;  ">
   
<tr >
       <td style="width:85%; ">&nbsp;</td>
       
       <td >  </td>
       
   </tr>

   <tr  >
   <td>&nbsp;</td>
  
       <td >  
       Total Pagado:  $ {{ $total }}
       <br>
     
    </td>
       
   </tr>
  </table>   

        </div>
        


  <p></p>

   


</body>
</html>
   