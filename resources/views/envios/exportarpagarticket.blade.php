<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Envios</title>
</head>
<body>
<style>
        .fecha{
            float: right;
        }
        
.columna{
    width:350px;
}
.columna2{
    width:150px;
    text-align: center;
}




    </style>
    <input type="text" value="{{date_default_timezone_set('America/El_Salvador') }}" style="display:none;">
    
    <div>
        
 <img src="../public/fotos/logo24.png" alt="" width="10%">
            <h3 class="page__heading">Melo Express</h3>
            <div style="width:100%; text-align: right; " >
   Fechaaaa: {{ now()->Format('d/m/Y')}} Hora: {{ date("H:i:s")}}
  
   </div>
        </div>
       
 
   
   <hr>
      <span>Usuario: {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
   <br>

<span>Ticket: {{ $pedidos[0]->ticketc }}</span>
<br>
<span>Cantidad de Guias: {{ $cantidad }}</span>
<p></p>




<table class="table table-bordered shadow-lg mt-4" style="width:100%">
<thead >
    <thead class="centrar" style="border-top: 2px solid black; border-bottom: 2px solid black; ">
     <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">ID</span><span class="dt-column-order"></span>
            </th>
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Comercio</span><span class="dt-column-order"></span>
            </th>

            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Destinatario</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Direccion</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Tipo</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Estado</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Fecha de entrega</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Precio</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Envio</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Total</span><span class="dt-column-order"></span>
            </th>
            
        </tr>

<tbody>
    @foreach($pedidos as $pedido)
    <tr style='border-bottom: 1px solid; font-size: 12px'>
    
    <td >{{ $pedido->id }}</td>
    <td >{{ $pedido->comercio }}</td>
    <td >{{ $pedido->destinatario }}</td>
    <td>{{ $pedido->direccion }}</td>

    <td>{{ $pedido->tipo }}</td>
    <td> {{ $pedido->estado }}</td>
    <td> {{  date('d/m/Y', strtotime($pedido->fecha_entrega))}}</td>
    <td >${{ $pedido->precio }}</td>
    <td >${{ $pedido->envio }}</td>
    <td> ${{ $pedido->total }}</td>
    
    
</tr>

    @endforeach
</tbody>
</table>
<br>
<p></p>
<hr>

<table style="width:100%;  ">
   
<tr >
       <td style="width:80%; ">&nbsp;</td>
       
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
   