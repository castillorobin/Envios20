

<x-default-layout>

<script>
  function actualizar(opcion){
    var data = opcion.value;

   window.location = "http://209.145.56.57/envio/indexdigitadofiltro/" + opcion.value; 

    //window.location = "http://127.0.0.1:8000/envio/indexdigitadofiltro/" + opcion.value;

        
    }
</script>

<div class="app-content flex-column-fluid">

<div class="app-container container-xxl">


<div class="card card-flush">


<div class="col-sm-6 mt-4"> <!-- div buscar -->



<select class="form-select" data-control="select2" id="comer" name="comer" onchange="actualizar(this)">
<option value="">Buscar Comercio</option>

@for($i=0;  $i< count($vendedores); $i++ )
                    <option value="{{$vendedores[$i]->nombre}}">{{ $vendedores[$i]->nombre }} </option>
       
                        @endfor
  
</select>


</div> <!-- Termina div buscar  -->


<div class="col-6 mt-4">  <!-- div filtrros  -->


<span style="font-size:18px; color: red;">  &nbsp; </span>

                </div> 

<div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    
<div class="table-responsive">

<table id="tpedido" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
<thead style="">
        
<th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
                        <div class="form-check mb-0 fs-0">
                          <input class="form-check-input" id="checkbox-bulk-order-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;order-table-body&quot;}">
                        </div>
                      </th>
        <th style="">ID</th>
        
        <th style="">COMERCIO</th>
        <th style="">CLIENTE</th>
        
        <th style="">TIPO DE ORDEN</th>
        <th style="">TOTAL</th>
        <th style="">ENVIO</th>
        <th style="">PRECIO</th>
        <th style="">ESTADO DE LA ORDEN</th>
        <th style="">ESTADO DEL PAGO</th>
        <th style="">FECHA DE ENTREGA</th>
        
    </tr>
</thead>
<tbody>
     
    
@for ($i=0; $i< count($pedidos); $i++)
    <tr class="position-static">
    <td class="fs--1 align-middle px-0 py-3">
                        <div class="form-check mb-0 fs-0">
                          <input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2453,&quot;total&quot;:87,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Carry Anna&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Complete&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Cancelled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;delivery_type&quot;:&quot;Cash on delivery&quot;,&quot;date&quot;:&quot;Dec 12, 12:56 PM&quot;}">
                        </div>
                      </td>
    <td style="font-weight: bolder; color: #484f55;"><a href="/pedido/verorden/{{ $pedidos[$i]->id }}">{{ $pedidos[$i]->id }}</a></td>
  
   
    <td style="font-weight: bolder; color: #484f55;"> <a href="/pedido/verorden/{{ $pedidos[$i]->vendedor }}"> {{ $pedidos[$i]->vendedor }}</a></td>
    <td style="font-weight: bolder; color: #484f55;">{{ $pedidos[$i]->destinatario }}</td>
    
    <td>{{ $pedidos[$i]->tipo }}</td>
    <td style="font-weight: bolder; color: #484f55;">c</td>
    <td style="font-weight: bolder; color: #484f55;">${{ $pedidos[$i]->envio }}</td>
    <td style="font-weight: bolder; color: #484f55;">${{ $pedidos[$i]->precio }}</td>
    <!--Empieza If s de estados -->

    @if( $pedidos[$i]->estado =='Entregado')
    <td><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">{{ $pedidos[$i]->estado }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
    
    
    @elseif( $pedidos[$i]->estado =='No retirado')
    <td><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">{{ $pedidos[$i]->estado }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
    

    @elseif( $pedidos[$i]->estado =='Reprogramado')
    <td><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">{{ $pedidos[$i]->estado }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>

    @else
    <td>{{ $pedidos[$i]->estado }}</td>
    @endif


    <td>{{ $pedidos[$i]->pagado }}</td>

  <!--Termina If s de estados -->
    <td> {{ date('d/m/Y', strtotime($pedidos[$i]->fecha_entrega)) }}</td>
    
   
    
   
 

    </tr>
    @endfor
</tbody>
</table>

</div>
</div>
</div>
</div>






</div>





</x-default-layout>