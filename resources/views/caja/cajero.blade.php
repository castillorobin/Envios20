<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only) 
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
   -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <style>
        .table th,
        .table td { 
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }
    </style>

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
        #kt_ecommerce_report_shipping_table_paginate {
            display: none;
        }


        #kt_ecommerce_report_shipping_table_previous{
            display: none;
        }
        #kt_ecommerce_report_shipping_table_next{
            display: none;
        }
            
    </style>

    <!--end::Global Stylesheets Bundle-->
    <style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

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



</head>

<script>
    function doSearch()

{

const tableReg = document.getElementById('tenvios');

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
     







    <div class="d-flex flex-column flex-column-fluid">
                                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            
    

<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        Reporte de cajeros
            </h1>
    <!--end::Title-->

            
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="/dashboard" class="text-muted text-hover-primary">
                                Inicio                            </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                                        
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Caja                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                                        
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Reporte de cajeros                                           </li>
                                <!--end::Item-->
                                        
                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
        <div class="m-0">
            <!--begin::Menu toggle-->
            
            <!--end::Menu toggle-->
            
            

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_687ac4a64193b">
    <!--begin::Header-->
    <div class="px-7 py-5">
        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
    </div>
    <!--end::Header-->

    <!--begin::Menu separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Menu separator-->
    

    <!--begin::Form-->
    <div class="px-7 py-5">
        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Status:</label>
            <!--end::Label-->

            <!--begin::Input-->
            <div>
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_687ac4a64193b" data-allow-clear="true" data-select2-id="select2-data-7-31zq" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-20qk" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-f6qg-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-f6qg-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Member Type:</label>
            <!--end::Label-->

            <!--begin::Options-->
            <div class="d-flex">
                <!--begin::Options-->    
                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                    <input class="form-check-input" type="checkbox" value="1">
                    <span class="form-check-label">
                        Author
                    </span>
                </label>
                <!--end::Options-->    

                <!--begin::Options-->    
                <label class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                    <span class="form-check-label">
                        Customer
                    </span>
                </label>
                <!--end::Options-->    
            </div>        
            <!--end::Options-->    
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Notifications:</label>
            <!--end::Label-->

            <!--begin::Switch-->
            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
                <label class="form-check-label">
                    Enabled
                </label>
            </div>
            <!--end::Switch-->
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>

            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Form-->
</div>
<!--end::Menu 1-->        </div>
        <!--end::Filter menu-->
    
    
    <!--begin::Secondary button-->
        <!--end::Secondary button-->
    
    <!--begin::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
            Create        </a>
        <!--end::Primary button-->
</div>
<!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" spellcheck="false" data-ms-editor="true">
            </div>
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_returns_export" class="d-none"><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>PDF</span></button> </div></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Daterangepicker-->
<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_returns_daterangepicker" spellcheck="false" data-ms-editor="true">
<!--end::Daterangepicker-->

<!--begin::Export dropdown-->
<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>    Export Report
</button>
<!--begin::Menu-->
<div id="kt_ecommerce_report_returns_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">
            Copy to clipboard
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">
            Export as Excel
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">
            Export as CSV
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">
            Export as PDF
        </a>
    </div>
    <!--end::Menu item-->
 
</div>
<!--end::Menu-->
<!--end::Export dropdown-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<div id="kt_ecommerce_report_returns_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_ecommerce_report_returns_table" style="width: 100%;"><colgroup><col data-dt-column="0" style="width: 124.688px;"><col data-dt-column="1" style="width: 192.797px;"><col data-dt-column="2" style="width: 192.766px;"><col data-dt-column="3" style="width: 190.156px;"><col data-dt-column="4" style="width: 148.828px;"><col data-dt-column="5" style="width: 146.266px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0"><th class="min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Date</span><span class="dt-column-order"></span></th><th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">No. Orders Returned</span><span class="dt-column-order"></span></th><th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">No. Orders Refunded</span><span class="dt-column-order"></span></th><th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">No. Orders Replaced</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Total Refunded</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Total Replaced: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Total Replaced</span><span class="dt-column-order"></span></th></tr>
    </thead>
    <tbody class="fw-semibold text-gray-600"><tr>
                <td data-order="2025-12-20T00:00:00-06:00">
                    Dec 20, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    2                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    0                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    2                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $0.00
                </td>
                <td class="text-end dt-type-numeric">
                    $54.00
                </td>
            </tr><tr>
                <td data-order="2025-05-05T00:00:00-06:00">
                    May 05, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    6                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    1                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    5                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $28.00
                </td>
                <td class="text-end dt-type-numeric">
                    $110.00
                </td>
            </tr><tr>
                <td data-order="2025-10-25T00:00:00-06:00">
                    Oct 25, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    8                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    1                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    7                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $20.00
                </td>
                <td class="text-end dt-type-numeric">
                    $104.00
                </td>
            </tr><tr>
                <td data-order="2025-10-25T00:00:00-06:00">
                    Oct 25, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    10                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    1                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    9                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $53.00
                </td>
                <td class="text-end dt-type-numeric">
                    $100.00
                </td>
            </tr><tr>
                <td data-order="2025-07-25T00:00:00-06:00">
                    Jul 25, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    7                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    1                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    6                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $78.00
                </td>
                <td class="text-end dt-type-numeric">
                    $174.00
                </td>
            </tr><tr>
                <td data-order="2025-11-10T00:00:00-06:00">
                    Nov 10, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    4                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    0                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    4                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $0.00
                </td>
                <td class="text-end dt-type-numeric">
                    $24.00
                </td>
            </tr><tr>
                <td data-order="2025-04-15T00:00:00-06:00">
                    Apr 15, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    5                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    2                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    3                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $21.00
                </td>
                <td class="text-end dt-type-numeric">
                    $79.00
                </td>
            </tr><tr>
                <td data-order="2025-02-21T00:00:00-06:00">
                    Feb 21, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    1                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    0                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    1                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $0.00
                </td>
                <td class="text-end dt-type-numeric">
                    $38.00
                </td>
            </tr><tr>
                <td data-order="2025-10-25T00:00:00-06:00">
                    Oct 25, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    4                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    1                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    3                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $55.00
                </td>
                <td class="text-end dt-type-numeric">
                    $141.00
                </td>
            </tr><tr>
                <td data-order="2025-10-25T00:00:00-06:00">
                    Oct 25, 2025                </td>    
                <td class="text-end pe-0 dt-type-numeric">
                    6                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    3                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    3                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    $54.00
                </td>
                <td class="text-end dt-type-numeric">
                    $103.00
                </td>
            </tr></tbody>
<tfoot></tfoot></table></div><div id="" class="row"><div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"><div><select name="kt_ecommerce_report_returns_table_length" aria-controls="kt_ecommerce_report_returns_table" class="form-select form-select-solid form-select-sm" id="dt-length-0"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><label for="dt-length-0"></label></div></div><div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dt-paging paging_simple_numbers"><nav aria-label="pagination"><ul class="pagination"><li class="dt-paging-button page-item disabled"><button class="page-link previous" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></button></li><li class="dt-paging-button page-item active"><button class="page-link" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" aria-current="page" data-dt-idx="0">1</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" data-dt-idx="1">2</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" data-dt-idx="2">3</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" data-dt-idx="3">4</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" data-dt-idx="4">5</button></li><li class="dt-paging-button page-item"><button class="page-link next" role="link" type="button" aria-controls="kt_ecommerce_report_returns_table" aria-label="Next" data-dt-idx="next"><i class="next"></i></button></li></ul></nav></div></div></div></div>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>












    </x-default-layout>
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
    <!--begin::Javascript-->
    <script>

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
   





    

<script>
       
        
    $(document).ready(function(){
        $(document).on('click', '.edit', function(){
           var cod=$(this).val();
           var iden=$('#id'+cod).text();
           var comer=$('#com'+cod).text();
           var fecha=$('#fec'+cod).text();
           var horas=$('#hor'+cod).text();
           var perso=$('#per'+cod).text();
           var persi=$('#pei'+cod).text();
           var punto=$('#pun'+cod).text();
           var punti=$('#pui'+cod).text();
           var casil=$('#cas'+cod).text();
           var casill=$('#cai'+cod).text();
           var depar=$('#dep'+cod).text();
           var depai=$('#dei'+cod).text();
           var guias=$('#gui'+cod).text();
           var guiai=$('#gii'+cod).text();
           var subto=$('#sub'+cod).text();
           var total=$('#tot'+cod).text();
           var entre=$('#ent'+cod).text();
           var cambi=$('#cam'+cod).text();
            
    //alert("HOla");
            
        
            //$('#edit').modal('show');
           $('#codigo').text(cod);
           $('#come').text(comer);
           $('#fech').text(fecha);
           $('#hora').text(horas);
           $('#pers').text(perso);
           $('#peri').text(persi);
           $('#punt').text(punto);
           $('#puni').text(punti);
           $('#casi').text(casil);
           $('#caii').text(casill);
           $('#depa').text(depar);
           $('#depi').text(depai);
           $('#guia').text(guias);
           $('#guii').text(guiai);
           $('#subt').text(subto);
           $('#tota').text(total);
           $('#entr').text(entre);
           $('#camb').text(cambi);
           $('#cod2').text(cod);
          
           var ide = '/cobro/ticketlistado/'+cod ;
		   document.getElementById("impri").href = ide;
    
            
    
            //$('#impri a').prop("href", ide);
            //$('.paginacion a').prop('href','http://nuevaUrl.com');
    
           // document.getElementById("impri").href = ide;
        });
    });
     
    
    
    
    
    
    
        </script>











</body>
<!--end::Body-->

</html>