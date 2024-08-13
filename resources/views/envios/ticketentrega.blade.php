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

    </style>
<div style="width:100%; " class="text-center centrar">
    <img src="../public/assets/media/logos/lo.png" alt="" width="20%" height="5%">
    <br>
            <div class="margen "> <span class="page__heading melo" >Expertos en paqueteria</span></div>
            
           <!-- <img alt="image" src="/public/img/logo.png" > -->
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Comprobante de pago</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
           
        </div >
        <div style="margin-top:10px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
       <br>

                        <div class="fecha centrar " style="font-weight: bolder;">
   TICKET Nº {{ $ticketact[0]->id }}
   <hr>
   </div>
   
   <div class="fecha ">
   <span > Fecha: {{ now()->Format('d/m/Y')}} </span>
   <span style="float:right; ">Hora: {{ now()->Format('H:i A')}}</span> 
   </div>

   
   
   <div class="centrar">

    <h4>Metodo de pago: </h4> {{ $ticketact[0]->metodo }}
    <h4>Descuento: </h4>{{ $ticketact[0]->desceunto }}
    <h4>Subtotal: </h4>{{ $ticketact[0]->subtotal }}
    <h4>Total: </h4>{{ $ticketact[0]->total }}

<br>
<div>Le atendio: Robin Castillo</div>
<hr>
<div>¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>
</div>

   

</body>
</html>










