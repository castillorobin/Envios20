<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Entrega</title>
    
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
    <img src="../public/fotos/logo24.png" alt="" width="35%">
    <br>
            <div class="margen "> <span class="page__heading melo" >Pago por Ticket</span></div>
            
           <!-- <img alt="image" src="/public/img/logo.png" > -->
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Comprobante de pago</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
           
        </div >
        <div style="margin-top:10px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
    

                        <div class="fecha centrar " style="font-weight: bolder;">
                            <br>
   TICKET Nº {{ $ticketact->id }}
   </div>
   <br>
   <div class="fecha " style="font-weight: bolder;">
   Comercio {{ $ticketact->comercio }}
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
            <tr>
            <th style="width: 250px; text-align: left;">DESCRIPCION</th>
           
            <th>IMPORTE</th>
            </tr>
        </thead>
        
            <tbody style=" height: 500px;">
            {{ $i = 0 }}
                @foreach ($envios as $envio)
                    
                
               
                    {{ $i++ }}
              
                @endforeach
                <tr >
                    <td style="text-align: left;"><span style="font-weight: bolder;">Total de guias: {{ $i }} </td>
                   
                    {{ $i++ }}
                </tr>
               
                <tr style="text-align: left;">
                    
                    
                    <td style="border-top: 2px solid black; " >Método de pago: {{ $ticketact->metodo }} </td>
                    <td style="border-top: 2px solid black;" class="centrar">
                     
                    </td>
                    
                    
                </tr>
                <tr class="izqui">
                    
                    Método de pago: {{ $ticketact->metodo }}
                    <td  > <span style="margin-right: -45px;"> SUBTOTAL </span></td>
                    <td style="text-align: left; padding-left: 55px;">${{ $ticketact->total }}
                     
                    </td>
                    
                    
                </tr>
              
                <tr class="izqui">
                    
                    <td style="font-weight: bolder;"><span style="margin-right: -45px;"> TOTAL</span></td>
                    <td style="font-weight: bolder; text-align: left; padding-left: 55px;">${{ $ticketact->total }}</td>
                   
                </tr>
              
                    
                

            </tbody>
            
    </table>
   
   <div class="">


   
    

<br>
<div class="centrar">Le atendio: {{ Auth::user()->name }}</div>
<hr>
<div class="centrar">¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>
<div style="padding-left:85px;"> {!! DNS1D::getBarcodeHTML($ticketact->id , 'C39') !!} <span style="padding-right: 90px; font-weight: bolder;"> {{ $ticketact->id }} </span></div>
</div>

   

</body>
</html>










