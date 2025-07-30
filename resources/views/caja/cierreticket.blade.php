<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Caja</title>
    
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
            <div class="margen "> <span class="page__heading melo" >Cuadre de caja</span></div>
            
           <!-- <img alt="image" src="/public/img/logo.png" > -->
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Cuadre de caja</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
           
        </div >
        <div style="margin-top:10px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
    

                        <div class="fecha centrar " style="font-weight: bolder;">
                            <br>
   SESION Nº {{ $idcaja2->id }}
   </div>
   <br>
   <div class="fecha " style="font-weight: bolder;">
   Cajero {{ $idcaja2->cajero }}
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
         
               
                <tr >
                    
                    
                   
                </tr>
                
              
                <tr class="izqui">
                    
                    
                    <td  > <span style="margin-right: -45px;"> Saldo en caja </span></td>
                    <td style="text-align: left; padding-left: 55px;">${{ $idcaja2->saldo }}
                     
                    </td>
                    
                    
                </tr>
                <tr class="izqui">
                    
                    <td><span style="margin-right: -45px;"> Saldo de cajero</span></td>
                    <td style="text-align: left; padding-left: 55px;">${{ $idcaja2->saldocajero }}
                     
                    </td>
                    
                </tr>
                <tr class="izqui">
                    
                    <td style="font-weight: bolder;"><span style="margin-right: -45px;"> Descuadre</span></td>
                    <td style="font-weight: bolder; text-align: left; padding-left: 55px;">${{ $idcaja2->descuadre }}</td>
                   
                </tr>
               
                

            </tbody>
            
    </table>
   
   <div class="">


   
    

<br>
<div class="centrar"></div>
<hr>
<div class="centrar">¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>

</div>

   

</body>
</html>










