<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

        .dataTables_filter {
            display: none;
        }

        .dataTables_length {
            display: none;
        }
    </style>


</head>

<script>
    function doSearch()

{

const tableReg = document.getElementById('shipping_table');

const searchText = document.getElementById('searchTerm').value.toLowerCase();

let total = 0;



// Recorremos todas las filas con contenido de la tabla

for (let i = 1; i < tableReg.rows.length; i++) {

    // Si el td tiene la clase "noSearch" no se busca en su cntenido

    if (tableReg.rows[i].classList.contains("noSearch")) {

        continue;

    }



    let found = false;

    const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

    // Recorremos todas las celdas

    for (let j = 0; j < cellsOfRow.length && !found; j++) {

        const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

        // Buscamos el texto en el contenido de la celda

        if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

            found = true;

            total++;

        }

    }

    if (found) {

        tableReg.rows[i].style.display = '';

    } else {

       

        tableReg.rows[i].style.display = 'none';

    }

}



// mostramos las coincidencias

const lastTR=tableReg.rows[tableReg.rows.length-1];

const td=lastTR.querySelector("td");

lastTR.classList.remove("hide", "red");

if (searchText == "") {

    lastTR.classList.add("hide");

} else if (total) {

    td.innerHTML="";

} else {

    lastTR.classList.add("red");

    td.innerHTML="";

}

}
</script>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <x-default-layout>

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-5">
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Paquetes por ticket</h1>
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="/" class="text-muted text-hover-primary">Inicio</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">Facturacion</li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">Tickets</li>
                            </ul>
                        </div>
                        <form action="enviosdeticketdatos" id="kt_invoice_form" method="POST"> 
                            @csrf
                            @method('GET')
                        <div class="row m-1 rounded" style="background-color:white; min-height: 100px; display: flex; align-items: center;">
                            <div class="col-md-3 m-2 mb-4">
                                <input type="text" class="form-control form-control-solid" placeholder="Ingrese # ticket" name="ticket" id="ticket" />

                                
                            </div> 
                            <div class="col-md-auto align-self-center mb-3">
                                <button type="submit" class="btn btn-primary btn-kg">Buscar</button>
                            </div>
                        </form>
                           
                            <div class="col-md-7 m-2 mb-4">
                                <div class="d-flex flex-stack rounded-4 p-3 float-end" style="width: 250px;">
                                   
                                </div>
                            </div>
                        </div>

                        <br>
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="search" spellcheck="false" data-ms-editor="true" id="searchTerm" class="dt-input form-control form-control-solid w-250px ps-12" placeholder="Buscar" onkeyup="doSearch()" />
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar--> 
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Daterangepicker-->
                                    
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    <form action="enviosdeticketfiltro" id="kt_invoice_form" method="POST"> 
                                        @csrf
                                        @method('GET')
                                    <div class="row w-550px">
                                       
                                        <!--begin::Select2-->
                                        <div class="col-md-7 align-self-center mb-3">
                                        <select class="form-select form-select-solid" data-control="select2" name="filtro" id="filtro" data-hide-search="true" data-placeholder="Estado" data-kt-ecommerce-order-filter="status">
                                            <option></option>
                                            <option value="all">Todo</option>
                                            <option value="Creado">Creado</option>
                                            <option value="En ruta">En ruta</option>
                                            <option value="Entregado">Entregado</option>
                                            <option value="No entregado">No entregado</option>
                                            <option value="Reprogramado">Reprogramado</option>
                                            <option value="Reenvio">Reenvio</option>
                                            <option value="Devuelto al comercio">Devuelto al comercio</option>
                                        </select>
                                        
                                        <input type="text" value="{{ $comercio }}" name="ticketn" id="ticketn" hidden>
                                    </div>
                                        <!--end::Select2-->
                                        <div class="col-md-auto align-self-center mb-3">
                                            <button type="submit" class="btn btn-primary btn-kg">Filtrar</button>
                                        </form>
                                        <a href="/envios/lista">
                                            <button class="btn btn-danger" >Limpiar</button>
                                        </a>
                                        </div>
                                   
                                    </div>
                                    <!--end::Filter-->
                                    <!--begin::Export dropdown-->
                                    
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header       fs-8 -->
                            <!--begin::Card body-->
                            <div class="card-body pt-0 ">
                                <!--begin::Table-->
                                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                    <table  class="table align-middle table-row-dashed gy-5" style="font-size: 12px;" id="shipping_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold text-uppercase gs-0 ">
                                                <th class="min-w-80px "># de guía</th>
                                                <th class="min-w-100px">Comercio</th>
                                                <th class="min-w-100px">Dirección Comercio</th>
                                                <th class="min-w-150px">Destinatario</th>
                                                <th class="min-w-150px">Dirección destinatario</th>
                                                <th class="min-w-150px">Fecha de entrega</th>
                                                <th class="min-w-100px text-center" >Tipo de envío</th>
                                                <th class="min-w-50px text-center">Cobro de envio</th>
                                                <th class="min-w-50px text-center">Estado</th>
                                                <th class="min-w-100px text-center">Nota </th>
                                                <th class="min-w-50px text-center">Sub estado</th>
                                                <th class="min-w-50px text-center">Fecha estado</th>
                                                <th class="min-w-50px">Total</th>
                                                <th class="min-w-100px">Repartidor</th>
                                                <th class="min-w-50px">Ruta</th>
                                                
                                                <th class="min-w-100px text-center">Nota de repartidor</th>
                                                <th class="min-w-150px">Ubicación</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-black-400">
                                            @foreach ($envios as $index => $envio)
                                            <tr class="{{ $index % 2 == 0 ? 'table-row-gray' : 'table-row-white' }}">
                                                <td>
                                                    <a href="/envios/detalle" class="text-gray-900 text-hover-primary">
                                                        {{ $envio->guia }}
                                                    </a>
                                                </td>
                                                <td>{{ $envio->comercio }}</td>
                                                <td>{{ $envio->dircomercio }}</td>
                                                <td>{{ $envio->destinatario }}</td>
                                                <td>{{ $envio->direccion }}</td>
                                                <td>{{ $envio->fecha_entrega}}</td>
                                                <td style="text-align: center;"><span class="badge badge-dark">{{ $envio->tipo}}</span></td>
                                                <td style="text-align: center;">
                                                    @if( $envio->cobro == 'Pagado')
                                                    <span class="badge badge-success">{{ $envio->cobro}}</span>
                                                    @else
                                                    <span class="badge badge-danger">{{ $envio->cobro }}</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if( $envio->estado == 'No entregado')
                                                    <span class="badge badge-danger">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Creado')
                                                    <span class="badge badge-warning">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Entregado')
                                                    <span class="badge badge-success">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'En ruta')
                                                    <span class="badge badge-info">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Reprogramado')
                                                    <span class="badge badge-dark">{{ $envio->estado }}</span>
                                                    @elseif( $envio->estado == 'Devuelto al comercio')
                                                    <span class="badge badge-primary">{{ $envio->estado }}</span>
                                                    @else
                                                    <span class="badge badge-light">{{ $envio->estado }}</span>
                                                    @endif
                                                </td>
                                                <td  style="text-align: center;">{{ $envio->nota }}</td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center">${{ $envio->total }}</td>
                                                <td style="text-align: center;">{{ $envio->repartidor }}</td>
                                                <td style="text-align: center;"></td>
                                                
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <ul class="pagination">
                                    <li style="margin-left:auto"></li> 
                                    <li class="page-item previous disabled"><a href="#" class="page-link">Anterior</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item next"><a href="#" class="page-link">Siguiente</a></li>
                                </ul>
                                <br>

                                <!--end::Table-->
                                <div class="row justify-content-end">
                                    <div class="col-auto align-self-end text-end">
                                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-exit-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Exportar Reporte</button>
                                    <!--begin::Menu-->
                                    <div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                        <!--begin::Menu item
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                                        </div>
                                        -->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Exportar a Excel</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Exportar a CSV</a>
                                        </div>
                                        -->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Exportar a PDF</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    </div>
                                </div>
                                <div class="modal bg-body fade" tabindex="-1" id="kt_modal_2">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content shadow-none">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalles del cobro</h5>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">
                                                                <h3 style="margin-bottom: 20px;">Datos del comercio</h3>
                                                                <div class="row mb-1">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Nombre</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">MODA SV</p>
                                                                    </div>
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Teléfono</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">+503 7569-3332</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-1">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Dirección</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">SANTA ANA. EL SALVADOR</p>
                                                                    </div>
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Whatsapp</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">+503 7569-3332</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-1">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Correo</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">MODASV@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">
                                                                <!--begin::Card-->
                                                                <div class="card pt-2 mb-6 mb-xl-9">
                                                                    <!--begin::Card header-->
                                                                    <div class="card-header border-0">
                                                                        <!--begin::Card title-->
                                                                        <div class="card-title">
                                                                            <h2 class="fw-bold mb-0" style="margin-left: -30px;">Datos bancarios</h2>
                                                                        </div>
                                                                        <!--end::Card title-->
                                                                        <!--begin::Card toolbar-->
                                                                        <div class="card-toolbar">
                                                                            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                                                <i class="ki-duotone ki-plus-square fs-3">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                </i>Agregar nuevo metodo</a>
                                                                        </div>
                                                                        <!--end::Card toolbar-->
                                                                    </div>
                                                                    <!--end::Card header-->
                                                                    <!--begin::Card body-->
                                                                    <div id="kt_customer_view_payment_method" class="card-body pt-0">
                                                                        <!--begin::Option-->
                                                                        <div class="py-0" data-kt-customer-payment-method="row">
                                                                            <!--begin::Header-->
                                                                            <div class="py-3 d-flex flex-stack flex-wrap">
                                                                                <!--begin::Toggle-->
                                                                                <div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                                                                    <!--begin::Logo-->
                                                                                    <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                                                                    <!--end::Logo-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="me-3">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <div class="text-gray-800 fw-bold">MODA SV</div>
                                                                                            <div class="badge badge-light-primary ms-5">Primary</div>
                                                                                        </div>
                                                                                        <div class="text-muted">Expires Dec 2024</div>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Toggle-->
                                                                                <!--begin::Toolbar-->
                                                                                <div class="d-flex my-3 ms-9">
                                                                                    <!--begin::Edit-->
                                                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                                                            <i class="ki-duotone ki-pencil fs-3">
                                                                                                <span class="path1"></span>
                                                                                                <span class="path2"></span>
                                                                                            </i>
                                                                                        </span>
                                                                                    </a>
                                                                                    <!--end::Edit-->
                                                                                    <!--begin::Delete-->
                                                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                                                        <i class="ki-duotone ki-trash fs-3">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                            <span class="path3"></span>
                                                                                            <span class="path4"></span>
                                                                                            <span class="path5"></span>
                                                                                        </i>
                                                                                    </a>
                                                                                    <!--end::Delete-->
                                                                                    <!--begin::More-->
                                                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                        <i class="ki-duotone ki-setting-3 fs-3">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                            <span class="path3"></span>
                                                                                            <span class="path4"></span>
                                                                                            <span class="path5"></span>
                                                                                        </i>
                                                                                    </a>
                                                                                    <!--begin::Menu-->
                                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                                                        <!--begin::Menu item-->
                                                                                        <div class="menu-item px-3">
                                                                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                                                        </div>
                                                                                        <!--end::Menu item-->
                                                                                    </div>
                                                                                    <!--end::Menu-->
                                                                                    <!--end::More-->
                                                                                </div>
                                                                                <!--end::Toolbar-->
                                                                            </div>
                                                                            <!--end::Header-->

                                                                            <!--begin::Body-->
                                                                            <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                                                                <!--begin::Details-->
                                                                                <div class="d-flex flex-wrap py-5">
                                                                                    <!--begin::Col-->
                                                                                    <div class="flex-equal me-5">
                                                                                        <table class="table table-flush fw-semibold gy-1 table-with-spacing" style="margin-left: -40px;"> <!-- Ajusta el valor de margen según tus necesidades -->
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-120px">Titular</td>
                                                                                                <td class="text-gray-800">Robin castillo</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Banco</td>
                                                                                                <td class="text-gray-800">BANCO AGRICOLA</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Numero de cuenta</td>
                                                                                                <td class="text-gray-800">4390 9300 6586 9455</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">DUI</td>
                                                                                                <td class="text-gray-800">05249855-8</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Tipo de cuenta</td>
                                                                                                <td class="text-gray-800">Ahorros</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Empresa</td>
                                                                                                <td class="text-gray-800">MODA SV</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <!--begin::Col-->
                                                                                    <div class="flex-equal">
                                                                                        <table class="table table-flush fw-semibold gy-1 table-with-spacing" style="margin-left: -40px;"> <!-- Ajusta el valor de margen según tus necesidades -->
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Tipo de Contribuyente</td>
                                                                                                <td class="text-gray-800">Pequeño</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Giro</td>
                                                                                                <td class="text-gray-800">
                                                                                                    <a href="#" class="text-gray-900 text-hover-primary">Ventas</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">NCR</td>
                                                                                                <td class="text-gray-800">
                                                                                                    <a href="#" class="text-gray-900 text-hover-primary">05452154</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text-muted min-w-125px w-125px">Direccion fiscal</td>
                                                                                                <td class="text-gray-800">
                                                                                                    <a href="#" class="text-gray-900 text-hover-primary">col las violetas cl san luis la planta pje 1 casa 21</a>
                                                                                                </td>
                                                                                            </tr>


                                                                                        </table>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Details-->
                                                                            </div>
                                                                            <!--end::Body-->
                                                                        </div>
                                                                        <!--end::Option-->
                                                                    </div>
                                                                    <!--end::Card body-->
                                                                </div>
                                                                <!--end::Card-->
                                                            </div>
                                                            <br>
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">
                                                                <h3 style="margin-bottom: 20px;">Otros metodos de pagos</h3>

                                                                <div class="row mb-1">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Chivo wallet</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">7985-2660</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-1">
                                                                    <div class="col-lg-2 d-flex align-items-center justify-content-right">
                                                                        <label class="text-muted min-w-125px w-125px col-form-label mb-0">Tigo Money</label>
                                                                    </div>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <p class="mb-0">7896-5522</p>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="col-lg-5">
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 20px;">

                                                                <div class="table-responsive mb-8">
                                                                    <!--begin::Table-->
                                                                    <table class="table align-middle gs-0 gy-4 my-0">
                                                                        <!--begin::Table head-->
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="min-w-100px"></th>
                                                                                <th class="w-200px"></th>
                                                                                <th class="w-60px"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        <tbody>
                                                                            <h2>Datos de pagar</h2>
                                                                            <br>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="Cajero" id="Cajero" placeholder="Cajero" value="Joakin Polanco" required readonly />
                                                                                <label for="Cajero">Cajero</label>
                                                                                <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                                                    Por favor ingrese el destinatario.
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <select class="form-select form-select-solid" name="metodo" id="metodo" required>
                                                                                    <option value="Efectivo">Efectivo</option>
                                                                                    <option value="Deposito">Deposito</option>
                                                                                    <option value="Transferencia_empresa">Transferencia a la empresa</option>
                                                                                    <option value="Transferencia_comercio">Transferencia al comercio</option>
                                                                                    <option value="Tigo_money">Tigo money</option>
                                                                                    <option value="Chivo">Chivo</option>
                                                                                </select>
                                                                                <label for="estado_envio">Método de pago</label>
                                                                                <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                                                                    Por favor seleccione el método de pago.
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha de entrega" readonly />
                                                                                <label for="fecha_entrega">Fecha de entrega</label>
                                                                                <div id="fechaEntregaValidationFeedback" class="invalid-feedback">
                                                                                    Por favor seleccione una fecha de entrega.
                                                                                </div>
                                                                            </div>
                                                                            <!-- Campo para la cantidad de descuento -->
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="descuento" id="descuento" placeholder="Descuento" />
                                                                                <label for="descuento" style="padding-left: 25px;">Descuento</label>
                                                                                <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                                            </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                                                <label for="nota" style="padding-left: 25px;">Nota</label>
                                                                            </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <select class="form-select form-select-solid" name="metodo" id="metodo" required>
                                                                                    <option value="Pagado">Pagado</option>
                                                                                    <option value="sin_Pagar">Sin Pagar</option>
                                                                                </select>
                                                                                <label for="estado_envio">Estado del pago</label>
                                                                                <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                                                                    Por favor seleccione el método de pago.
                                                                                </div>
                                                                            </div>
                                                                        </tbody>
                                                                        <!--end::Table body-->
                                                                    </table>
                                                                    <!--end::Table-->
                                                                </div>
                                                                <!-- Summary -->
                                                                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-5">
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white">
                                                                        <span class="d-block lh-1 mb-2">Subtotal</span>
                                                                        <span class="d-block mb-2">Descuento</span>
                                                                        <span class="d-block fs-2qx lh-1">Total</span>
                                                                    </div>
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white text-end">
                                                                        <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">$0.00</span>
                                                                        <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">-$0.00</span>
                                                                        <span id="total1" name="total1" class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$0.00</span>
                                                                    </div>
                                                                </div>
                                                                <!-- End of Summary -->
                                                                <!-- Payment and Change -->
                                                                <div class="row justify-content-end">
                                                                    <label class="col-lg-3 col-form-label ">Pago</label>
                                                                    <div class="col-lg-5">
                                                                        <input type="text" class="form-control form-control-solid" name="Pago" id="Pago" />
                                                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row justify-content-end">
                                                                    <label class="col-lg-3 col-form-label ">Cambio</label>
                                                                    <div class="col-lg-5">
                                                                        <input type="text" class="form-control form-control-solid" name="Cambio" id="Cambio" value="$5.00" readonly />
                                                                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                                    </div>
                                                                </div>
                                                                <!-- End of Payment and Change -->
                                                                <br>
                                                                <div class="modal-footer">
                                                                    <div class="d-flex justify-content-between w-100">
                                                                        <button type="button" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="button" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" data-bs-dismiss="modal">Cobrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Products-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </x-default-layout>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <script>
        document.getElementById('pago').addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('modalPago'));
            myModal.show();
        });
    </script>
    <script>
        // Función para obtener la fecha y hora actual en El Salvador
        function obtenerFechaHoraElSalvador() {
            var ahora = new Date();
            var timeZoneOffset = -6 * 60; // GMT-6 (El Salvador)
            var offset = ahora.getTimezoneOffset();
            ahora.setMinutes(ahora.getMinutes() - (offset - timeZoneOffset));
            return ahora;
        }
        // Función para formatear la fecha
        function formatearFecha(fecha) {
            var meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
            var dia = fecha.getDate();
            var mes = meses[fecha.getMonth()];
            var año = fecha.getFullYear();
            var horas = fecha.getHours();
            var minutos = fecha.getMinutes();
            var am_pm = horas >= 12 ? 'AM' : 'PM';
            horas = horas % 12;
            horas = horas ? horas : 12;
            minutos = minutos < 10 ? '0' + minutos : minutos;
            return dia + '/' + mes + '/' + año + ' ' + horas + ':' + minutos + ' ' + am_pm;
        }
        // Función para establecer la fecha y hora actual en el campo de fecha de entrega
        function establecerFechaEntrega() {
            var fechaHoraActual = obtenerFechaHoraElSalvador();
            var fechaFormateada = formatearFecha(fechaHoraActual);
            document.getElementById('fecha_entrega').value = fechaFormateada;
        }
        // Llamar a la función para establecer la fecha y hora actual al cargar la página
        establecerFechaEntrega();
    </script>
</body>
<!--end::Body-->

</html>