<x-default-layout>
  <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4">
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
      <li class="breadcrumb-item text-muted">
        <a href="/" class="text-muted text-hover-primary">Inicio</a>
      </li>
      <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
      </li>
      <li class="breadcrumb-item text-muted">Gestion de envios</li>
    </ul>
  </div>
  <script>
    function actualizar(opcion) {
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
            @for($i=0; $i< count($vendedores); $i++ ) <option value="{{$vendedores[$i]->nombre}}">{{ $vendedores[$i]->nombre }} </option>

              @endfor
          </select>
        </div> <!-- Termina div buscar  -->
        <div class="col-6 mt-4"> <!-- div filtrros  -->
          <span style="font-size:18px; color: red;"> &nbsp; </span>
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