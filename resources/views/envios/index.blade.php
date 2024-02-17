

<x-default-layout>

<div class="app-content flex-column-fluid">

<div class="app-container container-xxl">


<div class="card card-flush">


<div class="col-sm-6 mt-4"> <!-- div buscar -->



<select class="form-select" id="comer" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}' name="comer" onchange="actualizar(this)">
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
     
    
</tbody>
</table>

</div>
</div>
</div>
</div>






</div>





</x-default-layout>