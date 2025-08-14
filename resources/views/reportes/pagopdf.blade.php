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
    <img src="../public/fotos/logo24.png" alt="" width="10%">
    <br>
            
            
     
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Reporte de recepcion</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
           
        </div >
        <div style="margin-top:5px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
    

    
   
   <hr>
   </div>
   
   <div class="fecha ">
   <span > Fecha: {{ now()->Format('d/m/Y')}} </span>
   <span style="float:right; ">Hora: {{ now()->Format('H:i A')}}</span> 
   </div>

    
   <div class="centrar">
    <table class="centrar" style="width: 100%; display:table; " >
        <thead  class="centrar" style="border-top: 2px solid black; border-bottom: 2px solid black; ">
            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button"># de ticket</span><span class="dt-column-order"></span>
            </th>
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Comercio</span><span class="dt-column-order"></span>
            </th>

            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Usuario</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Agencia</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Subtotal</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">IVA</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Descuento</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Nota</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Total</span><span class="dt-column-order"></span>
            </th>
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Fecha</span><span class="dt-column-order"></span>
            </th>
            
        </tr>
        </thead>
        
            <tbody style=" height: 500px;">
         
               
                 @foreach ($cajas as $caja) 
             <tr class="'table-row-gray' : 'table-row-white' ">
                   <td> 
                                                    #{{$caja->codigo}}
                                                    
                                                    </td>
                                                <td>{{$caja->comercio}}</td> 
                                                <td>{{$caja->cajero}}</td>
                                                <td>{{$caja->agencia}}</td>
                                                <td>${{$caja->persoi + $caja->puntoi + $caja->casili + $caja->depari + $caja->guiasi}}</td>
                                                <td>
                                                    @if ($caja->iva == NULL)
                                                        $0
                                                    @else
                                                        ${{$caja->iva}}
                                                    @endif
                                                    
                                                </td>
                                                <td>@if ($caja->descuento == NULL)
                                                        $0
                                                    @else
                                                        ${{$caja->descuento}}
                                                    @endif</td>
                                                <td>{{$caja->nota}} </td>
                                                <td>${{$caja->total}}</td>
                                                <td>{{ date('d/m/Y', strtotime($caja->created_at))}} </td>
                   
                    </tr>
                    @endforeach



<br>
                
                       

            </tbody>
            
    </table>
   
   <div class="">


   
    

<br>
<div class="centrar"></div>
<hr>

</div>

   

</body>
</html>










