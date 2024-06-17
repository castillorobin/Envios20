<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    
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
            <div class="margen "> <span class="page__heading melo" >www.MeloExpress.com.sv</span></div>
            
           <!-- <img alt="image" src="/public/img/logo.png" > -->
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">EXPERTOS EN PAQUETERIA</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
        </div>
        <br>

                        <div class="fecha centrar " style="font-weight: bolder;">
   TICKET Nº 0000-0000001
   </div>
   <br>
   <div class="fecha ">
   <span > Fecha: {{ now()->Format('d/m/Y')}} </span>
   <span style="float:right; ">Hora: {{ now()->Format('H:i A')}}</span> 
   </div>

   
   
   <div class="centrar">
<table class="centrar" style="width: 100%;">
    <thead class="centrar" style="border-top: 2px solid black; border-bottom: 2px solid black;">
        <tr>
        <th style="width: 200px;">DESCRIPCION</th>
        <TH>CANT</TH>
        <TH>IMPORTE</TH>
        </tr>

        <tbody>
            <tr>
                <td style="text-align: left;">Personalizado</td>
                <td>0</td>
                <td>$0.00</td>
            </tr>
            <tr>
                <td style="text-align: left;">Punto fijo</td>
                <td>0</td>
                <td>$0.00</td>
            </tr>
            <tr>
                <td style="text-align: left;">Casillero</td>
                <td>0</td>
                <td>$0.00</td>
            </tr>
            <tr>
                <td style="text-align: left;">Personalizado Departamental</td>
                <td>0</td>
                <td>$0.00</td>
            </tr>
            <tr >
                <td style="text-align: left; border-bottom: 2px solid black;"> Guias</td>
                <td style="border-bottom: 2px solid black;">0</td>
                <td style="border-bottom: 2px solid black;">$0.00</td>
            </tr>
            <tr >
                <td></td>
                <td>IVA</td>
                <td >$0.00
                 
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td style="font-weight: bolder;">TOTAL</td>
                <td >$0.00</td>
            </tr>
            <tr>
                <td></td>
                <td >ENTREGA EFECTIVO:</td>
                <td >$0.00</td>
            </tr>
            <tr>
                <td></td>
                <td>CAMBIO:</td>
                <td >$0.00</td>
            </tr>
        </tbody>

    </thead>
</table>
<br>
<div>Le atendio: Robin Castillo</div>
<hr>
<div>¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>
</div>

   

</body>
</html>










