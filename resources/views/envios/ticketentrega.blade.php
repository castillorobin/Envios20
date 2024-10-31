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
            <div class="margen "> <span class="page__heading melo" >Expertos en paqueteria</span></div>
            
           <!-- <img alt="image" src="/public/img/logo.png" > -->
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Comprobante de entrega</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
           
        </div >
        <div style="margin-top:10px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
    

                        <div class="fecha centrar " style="font-weight: bolder;">
   TICKET Nº {{ $ticketact[0]->id }}
   <br>
   <p></p>
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
            <th style="width: 250px;">DESCRIPCION</th>
           
            <th>IMPORTE</th>
            </tr>
        </thead>
        
            <tbody style=" height: 500px;">
            {{ $i = 0 }}
                @foreach ($envios as $envio)
                    
                
                <tr >
                    <td style="text-align: left;"><span style="font-weight: bolder;">{{ $envio->guia }} </span><br><span style="font-size: 12px;"> {{ $envio->destinatario }} </span></td>
                    <td>${{ $envio->total }}</td>
                    {{ $i++ }}
                </tr>
                @endforeach
                
                @if($i < 5)

                <tr >   
                    <td > &nbsp;</td>
                    <td >&nbsp;</td> 
                </tr>
                <tr >   
                    <td >&nbsp;</td>
                    <td >&nbsp;</td> 
                </tr>
                <tr >   
                    <td >&nbsp;</td>
                    <td >&nbsp;</td> 
                </tr>
                <tr >   
                    <td >&nbsp;</td>
                    <td >&nbsp;</td> 
                </tr>
                <tr >   
                    <td >&nbsp;</td>
                    <td >&nbsp;</td> 
                </tr>

                @endif
               
                <tr class="izqui">
                    
                    
                    <td style="border-top: 2px solid black; " > <span style="margin-right: -45px;"> SUBTOTAL </span></td>
                    <td style="border-top: 2px solid black;" class="centrar">${{ $ticketact[0]->subtotal }}
                     
                    </td>
                    
                    
                </tr>
                <tr class="izqui">
                    
                    <td><span style="margin-right: -45px;"> DESCUENTO</span></td>
                    <td class="centrar" >${{ $ticketact[0]->desceunto }}
                     
                    </td>
                    
                </tr>
                <tr class="izqui">
                    
                    <td style="font-weight: bolder;"><span style="margin-right: -45px;"> TOTAL</span></td>
                    <td class="centrar" style="font-weight: bolder;">${{ $ticketact[0]->total }}</td>
                   
                </tr>
                <tr class="izqui">
                
                    <td style="text-align: right;"><span style="margin-right: -45px;"> ENTREGA:</span></td>
                    <td class="centrar" >${{ $ticketact[0]->entrega }}</td>
                </tr>
                <tr class="izqui">
                    
                    <td><span style="margin-right: -45px;"> CAMBIO:</span></td>
                    <td class="centrar">${{ $ticketact[0]->cambio }}</td>
                </tr>
                    
                

            </tbody>
            
    </table>
   
   <div class="">


   
    

<br>
<div class="centrar">Le atendio: {{ Auth::user()->name }}o</div>
<hr>
<div class="centrar">¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>
<div style="padding-left:75px;"> {!! DNS1D::getBarcodeHTML($ticketact[0]->id , 'C39') !!} <span style="padding-right: 80px; font-weight: bolder;"> {{ $ticketact[0]->id }} </span></div>
</div>

   

</body>
</html>










