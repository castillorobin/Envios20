<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Caja</title>
    
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
            
            
     
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Reporte de caja</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
           
        </div >
        <div style="margin-top:5px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
    

                        <div class="fecha centrar " style="font-weight: bolder;">
                          
   SESION Nº {{ $idcaja2->id }}
   </div>
   <br>
   <div class="fecha " style="font-weight: bolder;">
   Cajero: {{ $idcaja2->cajero }}
   <br>
   
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
                <span class="dt-column-title" role="button">Fecha</span><span class="dt-column-order"></span>
            </th>
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Hora</span><span class="dt-column-order"></span>
            </th>

            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Concepto</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Entrada</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Salida</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Saldo</span><span class="dt-column-order"></span>
            </th>
            
            
        </tr>
        </thead>
        
            <tbody style=" height: 500px;">
         
               
                 @foreach ($cajas as $caja) 
             <tr class="'table-row-gray' : 'table-row-white' ">
                    <td class="text-center"> 
                    {{ date('d/m/Y', strtotime($caja->created_at)) }}
                    </td>
                    <td class="text-center">{{ date('h:i A', strtotime($caja->created_at)) }}</td>
                    
                    <td class="text-center">{{ $caja->concepto }}</td>
                    <td class="text-center">
                       @if ($caja->tipo == "Entrada")
                           $ {{ $caja->valor }}
                        @elseif ($caja->tipo == "Caja inicial")
                            $ {{ $caja->valor }}
                        @else
                            $ 0.00
                        @endif
                    </td>
                    <td class="text-center">
                         @if ($caja->tipo == "Salida")
                           $ {{ $caja->valor }}
                        @elseif ($caja->tipo == "Cierre de caja")
                            $ {{ $caja->valor }}
                        @else
                            $ 0.00
                        @endif
                    </td>
                    <td class="text-center">$ {{$caja->saldo}}</td>
                   
                    </tr>
                    @endforeach



<br>
                
              
                <tr class="izqui">
                    
                    
                    <td style="font-weight: bolder;" colspan="4"> <span style="margin-right: -45px;"> Saldo en caja </span></td>
                    <td style="text-align: left; padding-left: 55px;">${{ $idcaja2->saldo }}
                     
                    </td>
                    
                    
                </tr>
                <tr class="izqui">
                    
                    <td style="font-weight: bolder;" colspan="4"><span style="margin-right: -45px;"> Saldo de cajero</span></td>
                    <td style="text-align: left; padding-left: 55px;">${{ $idcaja2->saldocajero }}
                     
                    </td>
                    
                </tr>
                <tr class="izqui">
                    
                    <td style="font-weight: bolder;" colspan="4"><span style="margin-right: -45px;"> Descuadre</span></td>
                    <td style="font-weight: bolder; text-align: left; padding-left: 55px;">${{ $idcaja2->descuadre }}</td>
                   
                </tr>
               
                

            </tbody>
            
    </table>
   
   <div class="">


   
    

<br>
<div class="centrar"></div>
<hr>

</div>

   

</body>
</html>










