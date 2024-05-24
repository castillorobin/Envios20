<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../" />
    <title>Melo Express - Cobros</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body
<style>
.app-header{
    display: none;
}
</style>

-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<body id="kt_body" class="" style="background-color:white; ">
    <x-default-layout>
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl mt-5">
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
                <!--begin::Row-->
<div class="row gy-0 gx-10">
<!--begin::Col-->
<div class="col-xl-8">

<!--begin::General Widget 1-->
<div class="mb-5 mb-lg-10">
<!--begin::Tabs-->
<ul class="nav row mb-lg-10" role="tablist">
            <li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
        <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active" data-bs-toggle="tab" href="#kt_general_widget_1_1" aria-selected="true" role="tab">

            <i class="ki-duotone ki-abstract-26 fs-2x mb-5 mx-0"><span class="path1"></span><span class="path2"></span></i>
            <span class="fs-6 fw-bold">
                SaaS <br>Application                    </span>
        </a>
    </li>
            <li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
        <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px " data-bs-toggle="tab" href="#kt_general_widget_1_2" aria-selected="false" tabindex="-1" role="tab">

            <i class="ki-duotone ki-element-11 fs-2x mb-5 mx-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            <span class="fs-6 fw-bold">
                Main <br>Categories                    </span>
        </a>
    </li>
            <li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
        <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" data-bs-toggle="tab" href="#kt_general_widget_1_3" aria-selected="false" role="tab" tabindex="-1">

            <i class="ki-duotone ki-briefcase fs-2x mb-5 mx-0"><span class="path1"></span><span class="path2"></span></i>
            <span class="fs-6 fw-bold">
                Order <br>Management                    </span>
        </a>
    </li>
            <li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
        <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px " data-bs-toggle="tab" href="#kt_general_widget_1_4" aria-selected="false" tabindex="-1" role="tab">

            <i class="ki-duotone ki-chart-simple fs-2x mb-5 mx-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            <span class="fs-6 fw-bold">
                Sales <br>Statistics                    </span>
        </a>
    </li>
            <li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
        <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px " data-bs-toggle="tab" href="#kt_general_widget_1_5" aria-selected="false" tabindex="-1" role="tab">

            <i class="ki-duotone ki-shield-tick fs-2x mb-5 mx-0"><span class="path1"></span><span class="path2"></span></i>
            <span class="fs-6 fw-bold">
                Access <br>Control                    </span>
        </a>
    </li>
    </ul>

<!--begin::Tab content-->
<div class="tab-content">
            <div class="tab-pane fade active show" id="kt_general_widget_1_1" role="tabpanel">
        
<!--begin::Tables Widget 2-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-150px ps-12" placeholder="Search Reportttttttttt" spellcheck="false" data-ms-editor="true">
            </div>
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_customer_orders_export" class="d-none"><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>PDF</span></button> </div></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title--

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Daterangepicker-->
<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_customer_orders_daterangepicker" spellcheck="false" data-ms-editor="true">
<!--end::Daterangepicker-->

<!--begin::Filter-->
<div class="w-150px">
    <!--begin::Select2-->
    <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status" data-select2-id="select2-data-9-epaf" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
        <option data-select2-id="select2-data-11-iwbl"></option>
        <option value="all">All</option>
        <option value="active">Active</option>
        <option value="locked">Locked</option>
        <option value="disabled">Disabled</option>
        <option value="banned">Banned</option>
    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-3iih" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fisl-container" aria-controls="select2-fisl-container"><span class="select2-selection__rendered" id="select2-fisl-container" role="textbox" aria-readonly="true" title="Status"><span class="select2-selection__placeholder">Status</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    <!--end::Select2-->
</div>
<!--end::Filter-->

<!--begin::Export dropdown-->
<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>    Export Report
</button>
<!--begin::Menu-->
<div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
<div id="kt_ecommerce_report_customer_orders_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_ecommerce_report_customer_orders_table" style="width: 1199.5px;"><colgroup><col style="width: 160.547px;"><col style="width: 226.078px;"><col style="width: 145.719px;"><col style="width: 248.047px;"><col style="width: 122.969px;"><col style="width: 150.359px;"><col style="width: 145.781px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row"><th class="min-w-200px dt-orderable-asc dt-orderable-desc" data-dt-column="0" rowspan="1" colspan="1" aria-label="Customer Name: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Customer Name</span><span class="dt-column-order"></span></th><th class="min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Email</span><span class="dt-column-order"></span></th><th class="min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Status</span><span class="dt-column-order"></span></th><th class="min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Date Joined: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Date Joined</span><span class="dt-column-order"></span></th><th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="No. Orders: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">No. Orders</span><span class="dt-column-order"></span></th></tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
                                
                                            
                                                      
                                            
                        <tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-10-25T10:30:00-06:00">
                    25 Oct 2024, 10:30 am                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    44                </td>
               
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-05-05T06:43:00-06:00">
                    05 May 2024, 6:43 am                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    21                </td>
               
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-info">Disabled</div>
                </td>
                <td data-order="2024-10-25T14:40:00-06:00">
                    25 Oct 2024, 2:40 pm                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    12                </td>
               
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-06-20T17:30:00-06:00">
                    20 Jun 2024, 5:30 pm                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    51                </td>
               
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-11-10T20:43:00-06:00">
                    10 Nov 2024, 8:43 pm                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    100                </td>
                
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-02-21T06:43:00-06:00">
                    21 Feb 2024, 6:43 am                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    13                </td>
               
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-danger">Banned</div>
                </td>
                <td data-order="2024-11-10T11:30:00-06:00">
                    10 Nov 2024, 11:30 am                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    72                </td>
               
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-06-24T22:10:00-06:00">
                    24 Jun 2024, 10:10 pm                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    7                </td>
                
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-12-20T10:30:00-06:00">
                    20 Dec 2024, 10:30 am                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    93                </td>
                
            </tr><tr>
                <td>
                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2024-07-25T11:05:00-06:00">
                    25 Jul 2024, 11:05 am                </td>
                <td class="text-end pe-0 dt-type-numeric">
                    19                </td>
                
            </tr></tbody>
<tfoot></tfoot></table></div><div id="" class="row"><div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"><div><select name="kt_ecommerce_report_customer_orders_table_length" aria-controls="kt_ecommerce_report_customer_orders_table" class="form-select form-select-solid form-select-sm" id="dt-length-1"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><label for="dt-length-1"></label></div></div><div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dt-paging paging_simple_numbers"><ul class="pagination"><li class="dt-paging-button page-item disabled"><a class="page-link previous" aria-controls="kt_ecommerce_report_customer_orders_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></a></li><li class="dt-paging-button page-item active"><a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" aria-current="page" data-dt-idx="0" tabindex="0">1</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="1" tabindex="0">2</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="2" tabindex="0">3</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="3" tabindex="0">4</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="4" tabindex="0">5</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link next" aria-controls="kt_ecommerce_report_customer_orders_table" aria-label="Next" data-dt-idx="next" tabindex="0"><i class="next"></i></a></li></ul></div></div></div></div>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Tables Widget 2-->
    </div>
            <div class="tab-pane fade " id="kt_general_widget_1_2" role="tabpanel">
        
<!--begin::Tables Widget 3-->
<div class="card ">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
    <span class="card-label fw-bold fs-3 mb-1">Files</span>

    <span class="text-muted mt-1 fw-semibold fs-7">Over 100 pending files</span>
</h3>
<div class="card-toolbar">
    <!--begin::Menu-->
    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
    
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
<!--begin::Heading-->
<div class="menu-item px-3">
<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
    Payments
</div>
</div>
<!--end::Heading-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
    Create Invoice
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link flex-stack px-3">
    Create Payment

    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
        <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
    Generate Bill
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
<a href="#" class="menu-link px-3">
    <span class="menu-title">Subscription</span>
    <span class="menu-arrow"></span>
</a>

<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Plans
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Billing
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->            
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Statements
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->            
    <div class="menu-item px-3">
        <div class="menu-content px-3">
            <!--begin::Switch-->      
            <label class="form-check form-switch form-check-custom form-check-solid">
                <!--begin::Input-->   
                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                <!--end::Input-->   

                <!--end::Label-->   
                <span class="form-check-label text-muted fs-6">
                    Recuring
                </span>
                <!--end::Label-->   
            </label>
            <!--end::Switch-->   
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3 my-1">
<a href="#" class="menu-link px-3">
    Settings
</a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 3-->
    <!--end::Menu-->
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-3">
<!--begin::Table container-->
<div class="table-responsive">
    <!--begin::Table-->
    <table class="table align-middle gs-0 gy-3">
        <!--begin::Table head-->
        <thead>
            <tr>
                <th class="p-0 w-50px"></th>
                <th class="p-0 min-w-150px"></th>
                <th class="p-0 min-w-140px"></th>
                <th class="p-0 min-w-120px"></th>
                <th class="p-0 min-w-40px"></th>
            </tr>
        </thead>
        <!--end::Table head-->

        <!--begin::Table body-->
        <tbody>
                                    <tr>
                    <td>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-basket fs-2x text-success"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                    </span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">
                            Top Authors                                </a>
                    </td>
                    <td class="text-end text-muted fw-bold">
                        ReactJs, HTML                            </td>
                    <td class="text-end text-muted fw-bold">
                        4600 Users                            </td>
                    <td class="text-end text-gray-900 fw-bold fs-6 pe-0">
                        5.4MB                            </td>
                </tr>
                                    <tr>
                    <td>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-danger">
                                <i class="ki-duotone ki-element-11 fs-2x text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                    </span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">
                            Popular Authors                                </a>
                    </td>
                    <td class="text-end text-muted fw-bold">
                        Python, MySQL                            </td>
                    <td class="text-end text-muted fw-bold">
                        7200 Users                            </td>
                    <td class="text-end text-gray-900 fw-bold fs-6 pe-0">
                        2.8MB                            </td>
                </tr>
                                    <tr>
                    <td>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-info">
                                <i class="ki-duotone ki-briefcase fs-2x text-info"><span class="path1"></span><span class="path2"></span></i>                                    </span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">
                            New Users                                </a>
                    </td>
                    <td class="text-end text-muted fw-bold">
                        Laravel, Metronic                            </td>
                    <td class="text-end text-muted fw-bold">
                        890 Users                            </td>
                    <td class="text-end text-gray-900 fw-bold fs-6 pe-0">
                        1.5MB                            </td>
                </tr>
                                    <tr>
                    <td>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-warning">
                                <i class="ki-duotone ki-abstract-26 fs-2x text-warning"><span class="path1"></span><span class="path2"></span></i>                                    </span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">
                            Active Customers                                </a>
                    </td>
                    <td class="text-end text-muted fw-bold">
                        AngularJS, C#                            </td>
                    <td class="text-end text-muted fw-bold">
                        4600 Users                            </td>
                    <td class="text-end text-gray-900 fw-bold fs-6 pe-0">
                        5.4MB                            </td>
                </tr>
                                    <tr>
                    <td>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-abstract-41 fs-2x text-primary"><span class="path1"></span><span class="path2"></span></i>                                    </span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">
                            Active Customers                                </a>
                    </td>
                    <td class="text-end text-muted fw-bold">
                        ReactJS, Ruby                            </td>
                    <td class="text-end text-muted fw-bold">
                        354 Users                            </td>
                    <td class="text-end text-gray-900 fw-bold fs-6 pe-0">
                        500KB                            </td>
                </tr>
                            </tbody>
        <!--end::Table body-->
    </table>
    <!--end::Table-->
</div>
<!--end::Table container-->
</div>
<!--begin::Body-->
</div>
<!--end::Tables Widget 3-->
    </div>
            <div class="tab-pane fade" id="kt_general_widget_1_3" role="tabpanel">
        
<!--begin::Tables Widget 5-->
<div class="card ">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
    <span class="card-label fw-bold fs-3 mb-1">Latest Products</span>

    <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new products</span>
</h3>
<div class="card-toolbar">
    <ul class="nav" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1" aria-selected="true" role="tab">Month</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2" aria-selected="false" tabindex="-1" role="tab">Week</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3" aria-selected="false" tabindex="-1" role="tab">Day</a>
        </li>
    </ul>
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-3">
<div class="tab-content">
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="border-0">
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-110px"></th>
                            <th class="p-0 min-w-50px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    React, HTML                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-success">Approved</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
                                    <span class="text-muted fw-semibold d-block">Most Successful</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    Python, MySQL                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-warning">In Progress</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New Users</a>
                                    <span class="text-muted fw-semibold d-block">Awesome Users</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    Laravel,Metronic                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-primary">Success</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    AngularJS, C#                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-danger">Rejected</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                                    <span class="text-muted fw-semibold d-block">Best Customers</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    ReactJS, Ruby	                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-warning">In Progress</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade " id="kt_table_widget_5_tab_2" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="border-0">
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-110px"></th>
                            <th class="p-0 min-w-50px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    React, HTML                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-success">Approved</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
                                    <span class="text-muted fw-semibold d-block">Most Successful</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    Python, MySQL                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-warning">In Progress</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    AngularJS, C#                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-danger">Rejected</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade " id="kt_table_widget_5_tab_3" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="border-0">
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-110px"></th>
                            <th class="p-0 min-w-50px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                                    <span class="text-muted fw-semibold d-block">Best Customers</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    ReactJS, Ruby	                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-warning">In Progress</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                                    <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    AngularJS, C#                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-danger">Rejected</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New Users</a>
                                    <span class="text-muted fw-semibold d-block">Awesome Users</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    Laravel,Metronic                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-primary">Success</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-45px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
                                    <span class="text-muted fw-semibold d-block">Most Successful</span>
                                </td>
                                <td class="text-end text-muted fw-bold">
                                    Python, MySQL                                        </td>
                                <td class="text-end">
                                    <span class="badge badge-light-warning">In Progress</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
            </div>
</div>
<!--end::Body-->
</div>
<!--end::Tables Widget 5-->            </div>
            <div class="tab-pane fade " id="kt_general_widget_1_4" role="tabpanel">
        
<!--begin::Tables Widget 4-->
<div class="card ">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
    <span class="card-label fw-bold fs-3 mb-1">New Members</span>
    
    <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new members</span>
</h3>
<div class="card-toolbar">
    <ul class="nav" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_1" aria-selected="true" role="tab">Month</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_2" aria-selected="false" tabindex="-1" role="tab">Week</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_4_tab_3" aria-selected="false" tabindex="-1" role="tab">Day</a>
        </li>
    </ul>
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-3">
<div class="tab-content">
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/avatars/300-14.jpg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Movie Creator</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/avatars/300-5.jpg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                    <span class="text-muted fw-semibold d-block fs-7">HTML, CSS Coding</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/avatars/300-20.jpg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Lebron Wayde</a>
                                    <span class="text-muted fw-semibold d-block fs-7">ReactJS Developer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label ">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/avatars/300-23.jpg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                    <span class="text-muted fw-semibold d-block fs-7">UI/UX Designer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/avatars/300-10.jpg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Art Director</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label ">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label ">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade " id="kt_table_widget_4_tab_2" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/svg/avatars/043-boy-18.svg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Art Director</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label ">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label ">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/svg/avatars/014-girl-7.svg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                    <span class="text-muted fw-semibold d-block fs-7">UI/UX Designer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/svg/avatars/018-girl-9.svg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                    <span class="text-muted fw-semibold d-block fs-7">HTML, CSS Coding</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/svg/avatars/001-boy.svg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Movie Creator</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade " id="kt_table_widget_4_tab_3" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/svg/avatars/018-girl-9.svg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                    <span class="text-muted fw-semibold d-block fs-7">HTML, CSS Coding</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/svg/avatars/047-girl-25.svg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Lebron Wayde</a>
                                    <span class="text-muted fw-semibold d-block fs-7">ReactJS Developer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label ">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px">
                                        <img src="/metronic8/demo18/assets/media/svg/avatars/014-girl-7.svg" alt="">
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                    <span class="text-muted fw-semibold d-block fs-7">UI/UX Designer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Rating
                                    </span>
                                    
                                    <div class="rating">
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>                                                    </div>
                                                                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                        <i class="ki-duotone ki-twitter fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                    <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                        <i class="ki-duotone ki-facebook fs-4"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
            </div>
</div>
<!--end::Body-->
</div>
<!--end::Tables Widget 4-->
    </div>
            <div class="tab-pane fade " id="kt_general_widget_1_5" role="tabpanel">
        
<!--begin::Tables Widget 1-->
<div class="card ">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
    <span class="card-label fw-bold fs-3 mb-1">Tasks Overview</span>

    <span class="text-muted fw-semibold fs-7">Pending 10 tasks</span>
</h3>
<div class="card-toolbar">
    <!--begin::Menu-->
    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
    

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_664fd68e5d11e">
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
        <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_664fd68e5d11e" data-allow-clear="true" data-select2-id="select2-data-9-bln6" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
            <option></option>
            <option value="1">Approved</option>
            <option value="2">Pending</option>
            <option value="2">In Process</option>
            <option value="2">Rejected</option>
        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-uk3u" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-hf5t-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-hf5t-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->            <!--end::Menu-->
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-3">
<!--begin::Table container-->
<div class="table-responsive">
    <!--begin::Table-->
    <table class="table align-middle gs-0 gy-5">
        <!--begin::Table head-->
        <thead>
            <tr>
                <th class="p-0 w-50px"></th>
                <th class="p-0 min-w-200px"></th>
                <th class="p-0 min-w-100px"></th>
                <th class="p-0 min-w-40px"></th>
            </tr>
        </thead>
        <!--end::Table head-->

        <!--begin::Table body-->
        <tbody>
                                    <tr>
                    <th>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                                <img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
                            </span>
                        </div>
                    </th>

                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Top Authors</a>
                        <span class="text-muted fw-semibold d-block fs-7">Successful Fellas</span>
                    </td>

                    <td>
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <span class="text-muted me-2 fs-7 fw-bold">
                                    70%
                                </span>
                            </div>
                            
                            <div class="progress h-6px w-100">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>

                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                </a>
                    </td>
                </tr>
                                    <tr>
                    <th>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                                <img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
                            </span>
                        </div>
                    </th>

                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
                        <span class="text-muted fw-semibold d-block fs-7">Most Successful</span>
                    </td>

                    <td>
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <span class="text-muted me-2 fs-7 fw-bold">
                                    50%
                                </span>
                            </div>
                            
                            <div class="progress h-6px w-100">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>

                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                </a>
                    </td>
                </tr>
                                    <tr>
                    <th>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                                <img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
                            </span>
                        </div>
                    </th>

                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New Users</a>
                        <span class="text-muted fw-semibold d-block fs-7">Awesome Users</span>
                    </td>

                    <td>
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <span class="text-muted me-2 fs-7 fw-bold">
                                    80%
                                </span>
                            </div>
                            
                            <div class="progress h-6px w-100">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>

                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                </a>
                    </td>
                </tr>
                                    <tr>
                    <th>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                                <img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
                            </span>
                        </div>
                    </th>

                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
                        <span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
                    </td>

                    <td>
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <span class="text-muted me-2 fs-7 fw-bold">
                                    90%
                                </span>
                            </div>
                            
                            <div class="progress h-6px w-100">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>

                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                </a>
                    </td>
                </tr>
                                    <tr>
                    <th>
                        <div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                                <img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
                            </span>
                        </div>
                    </th>

                    <td>
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                        <span class="text-muted fw-semibold d-block fs-7">Amazing Templates</span>
                    </td>

                    <td>
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <span class="text-muted me-2 fs-7 fw-bold">
                                    70%
                                </span>
                            </div>
                            
                            <div class="progress h-6px w-100">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>

                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                            <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                </a>
                    </td>
                </tr>
                            </tbody>
        <!--end::Table body-->
    </table>
    <!--end::Table-->
</div>
<!--end::Table container-->
</div>
<!--end::Body-->
</div>
<!--endW::Tables Widget 1-->
    </div>
    </div>
<!--end::Tab content-->
</div>
<!--end::General Widget 1-->
<!--begin::Charts Widget 5-->
<div class="card mb-5 mb-lg-10">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
    <span class="card-label fw-bold fs-3 mb-1">Recent Customers</span>

    <span class="text-muted fw-semibold fs-7">More than 500 new customers</span>
</h3>

<!--begin::Toolbar-->
<div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
    <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1" id="kt_charts_widget_5_year_btn">Year</a>

    <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1" id="kt_charts_widget_5_month_btn">Month</a>

    <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 active" id="kt_charts_widget_5_week_btn">Week</a>
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body">
<!--begin::Chart-->
<div id="kt_charts_widget_5_chart" style="height: 350px; min-height: 365px;"><div id="apexchartsp5mqc71" class="apexcharts-canvas apexchartsp5mqc71 apexcharts-theme-light" style="width: 769px; height: 350px;"><svg id="SvgjsSvg1006" width="769" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="769" height="350"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 175px;"></div></foreignObject><g id="SvgjsG1086" class="apexcharts-yaxis" rel="0" transform="translate(17.374984741210938, 0)"><g id="SvgjsG1087" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1089" font-family="inherit" x="20" y="31.8" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1090">80</tspan><title>80</title></text><text id="SvgjsText1092" font-family="inherit" x="20" y="66.89125" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1093">60</tspan><title>60</title></text><text id="SvgjsText1095" font-family="inherit" x="20" y="101.9825" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1096">40</tspan><title>40</title></text><text id="SvgjsText1098" font-family="inherit" x="20" y="137.07375000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1099">20</tspan><title>20</title></text><text id="SvgjsText1101" font-family="inherit" x="20" y="172.16500000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1102">0</tspan><title>0</title></text><text id="SvgjsText1104" font-family="inherit" x="20" y="207.25625000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1105">-20</tspan><title>-20</title></text><text id="SvgjsText1107" font-family="inherit" x="20" y="242.34750000000003" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1108">-40</tspan><title>-40</title></text><text id="SvgjsText1110" font-family="inherit" x="20" y="277.43875" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1111">-60</tspan><title>-60</title></text><text id="SvgjsText1113" font-family="inherit" x="20" y="312.53000000000003" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1114">-80</tspan><title>-80</title></text></g></g><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(47.37498474121094, 30)"><defs id="SvgjsDefs1007"><linearGradient id="SvgjsLinearGradient1011" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1012" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1013" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1014" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskp5mqc71"><rect id="SvgjsRect1016" width="717.6250152587891" height="286.73" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskp5mqc71"></clipPath><clipPath id="nonForecastMaskp5mqc71"></clipPath><clipPath id="gridRectMarkerMaskp5mqc71"><rect id="SvgjsRect1017" width="715.6250152587891" height="284.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1015" width="14.232500305175781" height="280.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1011)" class="apexcharts-xcrosshairs" y2="280.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1049" class="apexcharts-grid"><g id="SvgjsG1050" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1054" x1="0" y1="35.09125" x2="711.6250152587891" y2="35.09125" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1055" x1="0" y1="70.1825" x2="711.6250152587891" y2="70.1825" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1056" x1="0" y1="105.27375" x2="711.6250152587891" y2="105.27375" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1057" x1="0" y1="140.365" x2="711.6250152587891" y2="140.365" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1058" x1="0" y1="175.45625" x2="711.6250152587891" y2="175.45625" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1059" x1="0" y1="210.5475" x2="711.6250152587891" y2="210.5475" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1060" x1="0" y1="245.63875000000002" x2="711.6250152587891" y2="245.63875000000002" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1051" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1063" x1="0" y1="280.73" x2="711.6250152587891" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1062" x1="0" y1="1" x2="0" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1052" class="apexcharts-grid-borders"><line id="SvgjsLine1053" x1="0" y1="0" x2="711.6250152587891" y2="0" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1061" x1="0" y1="280.73" x2="711.6250152587891" y2="280.73" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1018" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1019" class="apexcharts-series" seriesName="NetxProfit" rel="1" data:realIndex="0"><path id="SvgjsPath1023" d="M52.1858344523112 140.366L52.1858344523112 70.18350000000001L64.41833475748697 70.18350000000001L64.41833475748697 140.366L52.1858344523112 140.366C52.1858344523112 140.366 52.1858344523112 140.366 52.1858344523112 140.366C52.1858344523112 140.366 52.1858344523112 140.366 52.1858344523112 140.366C52.1858344523112 140.366 52.1858344523112 140.366 52.1858344523112 140.366C52.1858344523112 140.366 52.1858344523112 140.366 52.1858344523112 140.366 " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 52.1858344523112 140.366 L 52.1858344523112 70.18350000000001 L 64.41833475748697 70.18350000000001 L 64.41833475748697 140.366 z" pathFrom="M 52.1858344523112 140.366 L 52.1858344523112 140.366 L 64.41833475748697 140.366 L 64.41833475748697 140.366 L 64.41833475748697 140.366 L 64.41833475748697 140.366 L 64.41833475748697 140.366 L 52.1858344523112 140.366 z" cy="70.1825" cx="169.79000366210937" j="0" val="40" barHeight="70.1825" barWidth="14.232500305175781"></path><path id="SvgjsPath1025" d="M170.79000366210937 140.366L170.79000366210937 52.63787500000001L183.02250396728516 52.63787500000001L183.02250396728516 140.366L170.79000366210937 140.366C170.79000366210937 140.366 170.79000366210937 140.366 170.79000366210937 140.366C170.79000366210937 140.366 170.79000366210937 140.366 170.79000366210937 140.366C170.79000366210937 140.366 170.79000366210937 140.366 170.79000366210937 140.366C170.79000366210937 140.366 170.79000366210937 140.366 170.79000366210937 140.366 " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 170.79000366210937 140.366 L 170.79000366210937 52.637875 L 183.02250396728516 52.637875 L 183.02250396728516 140.366 z" pathFrom="M 170.79000366210937 140.366 L 170.79000366210937 140.366 L 183.02250396728516 140.366 L 183.02250396728516 140.366 L 183.02250396728516 140.366 L 183.02250396728516 140.366 L 183.02250396728516 140.366 L 170.79000366210937 140.366 z" cy="52.636875" cx="288.39417287190753" j="1" val="50" barHeight="87.728125" barWidth="14.232500305175781"></path><path id="SvgjsPath1027" d="M289.39417287190753 140.366L289.39417287190753 26.319437500000006L301.6266731770833 26.319437500000006L301.6266731770833 140.366L289.39417287190753 140.366C289.39417287190753 140.366 289.39417287190753 140.366 289.39417287190753 140.366C289.39417287190753 140.366 289.39417287190753 140.366 289.39417287190753 140.366C289.39417287190753 140.366 289.39417287190753 140.366 289.39417287190753 140.366C289.39417287190753 140.366 289.39417287190753 140.366 289.39417287190753 140.366 " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 289.39417287190753 140.366 L 289.39417287190753 26.319437500000003 L 301.6266731770833 26.319437500000003 L 301.6266731770833 140.366 z" pathFrom="M 289.39417287190753 140.366 L 289.39417287190753 140.366 L 301.6266731770833 140.366 L 301.6266731770833 140.366 L 301.6266731770833 140.366 L 301.6266731770833 140.366 L 301.6266731770833 140.366 L 289.39417287190753 140.366 z" cy="26.3184375" cx="406.9983420817057" j="2" val="65" barHeight="114.04656250000001" barWidth="14.232500305175781"></path><path id="SvgjsPath1029" d="M407.9983420817057 140.366L407.9983420817057 17.546625000000006L420.2308423868815 17.546625000000006L420.2308423868815 140.366L407.9983420817057 140.366C407.9983420817057 140.366 407.9983420817057 140.366 407.9983420817057 140.366C407.9983420817057 140.366 407.9983420817057 140.366 407.9983420817057 140.366C407.9983420817057 140.366 407.9983420817057 140.366 407.9983420817057 140.366C407.9983420817057 140.366 407.9983420817057 140.366 407.9983420817057 140.366 " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 407.9983420817057 140.366 L 407.9983420817057 17.546625000000002 L 420.2308423868815 17.546625000000002 L 420.2308423868815 140.366 z" pathFrom="M 407.9983420817057 140.366 L 407.9983420817057 140.366 L 420.2308423868815 140.366 L 420.2308423868815 140.366 L 420.2308423868815 140.366 L 420.2308423868815 140.366 L 420.2308423868815 140.366 L 407.9983420817057 140.366 z" cy="17.545625" cx="525.6025112915039" j="3" val="70" barHeight="122.81937500000001" barWidth="14.232500305175781"></path><path id="SvgjsPath1031" d="M526.6025112915039 140.366L526.6025112915039 52.63787500000001L538.8350115966797 52.63787500000001L538.8350115966797 140.366L526.6025112915039 140.366C526.6025112915039 140.366 526.6025112915039 140.366 526.6025112915039 140.366C526.6025112915039 140.366 526.6025112915039 140.366 526.6025112915039 140.366C526.6025112915039 140.366 526.6025112915039 140.366 526.6025112915039 140.366C526.6025112915039 140.366 526.6025112915039 140.366 526.6025112915039 140.366 " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 526.6025112915039 140.366 L 526.6025112915039 52.637875 L 538.8350115966797 52.637875 L 538.8350115966797 140.366 z" pathFrom="M 526.6025112915039 140.366 L 526.6025112915039 140.366 L 538.8350115966797 140.366 L 538.8350115966797 140.366 L 538.8350115966797 140.366 L 538.8350115966797 140.366 L 538.8350115966797 140.366 L 526.6025112915039 140.366 z" cy="52.636875" cx="644.2066805013021" j="4" val="50" barHeight="87.728125" barWidth="14.232500305175781"></path><path id="SvgjsPath1033" d="M645.2066805013021 140.366L645.2066805013021 87.72912500000001L657.4391808064779 87.72912500000001L657.4391808064779 140.366L645.2066805013021 140.366C645.2066805013021 140.366 645.2066805013021 140.366 645.2066805013021 140.366C645.2066805013021 140.366 645.2066805013021 140.366 645.2066805013021 140.366C645.2066805013021 140.366 645.2066805013021 140.366 645.2066805013021 140.366C645.2066805013021 140.366 645.2066805013021 140.366 645.2066805013021 140.366 " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 645.2066805013021 140.366 L 645.2066805013021 87.72912500000001 L 657.4391808064779 87.72912500000001 L 657.4391808064779 140.366 z" pathFrom="M 645.2066805013021 140.366 L 645.2066805013021 140.366 L 657.4391808064779 140.366 L 657.4391808064779 140.366 L 657.4391808064779 140.366 L 657.4391808064779 140.366 L 657.4391808064779 140.366 L 645.2066805013021 140.366 z" cy="87.728125" cx="762.8108497111003" j="5" val="30" barHeight="52.636875" barWidth="14.232500305175781"></path><g id="SvgjsG1021" class="apexcharts-bar-goals-markers"><g id="SvgjsG1022" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1024" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1026" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1028" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1030" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1032" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g></g></g><g id="SvgjsG1034" class="apexcharts-series" seriesName="Revenue" rel="2" data:realIndex="1"><path id="SvgjsPath1038" d="M52.1858344523112 140.36700000000002L52.1858344523112 193.00387500000002L64.41833475748697 193.00387500000002L64.41833475748697 140.36700000000002L52.1858344523112 140.36700000000002C52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002C52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002C52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002C52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002 52.1858344523112 140.36700000000002 " fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 52.1858344523112 140.36700000000002 L 52.1858344523112 193.00387500000002 L 64.41833475748697 193.00387500000002 L 64.41833475748697 140.36700000000002 z" pathFrom="M 52.1858344523112 140.36700000000002 L 52.1858344523112 140.36700000000002 L 64.41833475748697 140.36700000000002 L 64.41833475748697 140.36700000000002 L 64.41833475748697 140.36700000000002 L 64.41833475748697 140.36700000000002 L 64.41833475748697 140.36700000000002 L 52.1858344523112 140.36700000000002 z" cy="193.00287500000002" cx="169.79000366210937" j="0" val="-30" barHeight="-52.636875" barWidth="14.232500305175781"></path><path id="SvgjsPath1040" d="M170.79000366210937 140.36700000000002L170.79000366210937 210.54950000000002L183.02250396728516 210.54950000000002L183.02250396728516 140.36700000000002L170.79000366210937 140.36700000000002C170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002C170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002C170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002C170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002 170.79000366210937 140.36700000000002 " fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 170.79000366210937 140.36700000000002 L 170.79000366210937 210.54950000000002 L 183.02250396728516 210.54950000000002 L 183.02250396728516 140.36700000000002 z" pathFrom="M 170.79000366210937 140.36700000000002 L 170.79000366210937 140.36700000000002 L 183.02250396728516 140.36700000000002 L 183.02250396728516 140.36700000000002 L 183.02250396728516 140.36700000000002 L 183.02250396728516 140.36700000000002 L 183.02250396728516 140.36700000000002 L 170.79000366210937 140.36700000000002 z" cy="210.54850000000002" cx="288.39417287190753" j="1" val="-40" barHeight="-70.1825" barWidth="14.232500305175781"></path><path id="SvgjsPath1042" d="M289.39417287190753 140.36700000000002L289.39417287190753 236.8679375L301.6266731770833 236.8679375L301.6266731770833 140.36700000000002L289.39417287190753 140.36700000000002C289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002C289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002C289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002C289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002 289.39417287190753 140.36700000000002 " fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 289.39417287190753 140.36700000000002 L 289.39417287190753 236.8679375 L 301.6266731770833 236.8679375 L 301.6266731770833 140.36700000000002 z" pathFrom="M 289.39417287190753 140.36700000000002 L 289.39417287190753 140.36700000000002 L 301.6266731770833 140.36700000000002 L 301.6266731770833 140.36700000000002 L 301.6266731770833 140.36700000000002 L 301.6266731770833 140.36700000000002 L 301.6266731770833 140.36700000000002 L 289.39417287190753 140.36700000000002 z" cy="236.8669375" cx="406.9983420817057" j="2" val="-55" barHeight="-96.5009375" barWidth="14.232500305175781"></path><path id="SvgjsPath1044" d="M407.9983420817057 140.36700000000002L407.9983420817057 245.64075000000003L420.2308423868815 245.64075000000003L420.2308423868815 140.36700000000002L407.9983420817057 140.36700000000002C407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002C407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002C407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002C407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002 407.9983420817057 140.36700000000002 " fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 407.9983420817057 140.36700000000002 L 407.9983420817057 245.64075000000003 L 420.2308423868815 245.64075000000003 L 420.2308423868815 140.36700000000002 z" pathFrom="M 407.9983420817057 140.36700000000002 L 407.9983420817057 140.36700000000002 L 420.2308423868815 140.36700000000002 L 420.2308423868815 140.36700000000002 L 420.2308423868815 140.36700000000002 L 420.2308423868815 140.36700000000002 L 420.2308423868815 140.36700000000002 L 407.9983420817057 140.36700000000002 z" cy="245.63975000000002" cx="525.6025112915039" j="3" val="-60" barHeight="-105.27375" barWidth="14.232500305175781"></path><path id="SvgjsPath1046" d="M526.6025112915039 140.36700000000002L526.6025112915039 210.54950000000002L538.8350115966797 210.54950000000002L538.8350115966797 140.36700000000002L526.6025112915039 140.36700000000002C526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002C526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002C526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002C526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002 526.6025112915039 140.36700000000002 " fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 526.6025112915039 140.36700000000002 L 526.6025112915039 210.54950000000002 L 538.8350115966797 210.54950000000002 L 538.8350115966797 140.36700000000002 z" pathFrom="M 526.6025112915039 140.36700000000002 L 526.6025112915039 140.36700000000002 L 538.8350115966797 140.36700000000002 L 538.8350115966797 140.36700000000002 L 538.8350115966797 140.36700000000002 L 538.8350115966797 140.36700000000002 L 538.8350115966797 140.36700000000002 L 526.6025112915039 140.36700000000002 z" cy="210.54850000000002" cx="644.2066805013021" j="4" val="-40" barHeight="-70.1825" barWidth="14.232500305175781"></path><path id="SvgjsPath1048" d="M645.2066805013021 140.36700000000002L645.2066805013021 175.45825000000002L657.4391808064779 175.45825000000002L657.4391808064779 140.36700000000002L645.2066805013021 140.36700000000002C645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002C645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002C645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002C645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002 645.2066805013021 140.36700000000002 " fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskp5mqc71)" pathTo="M 645.2066805013021 140.36700000000002 L 645.2066805013021 175.45825000000002 L 657.4391808064779 175.45825000000002 L 657.4391808064779 140.36700000000002 z" pathFrom="M 645.2066805013021 140.36700000000002 L 645.2066805013021 140.36700000000002 L 657.4391808064779 140.36700000000002 L 657.4391808064779 140.36700000000002 L 657.4391808064779 140.36700000000002 L 657.4391808064779 140.36700000000002 L 657.4391808064779 140.36700000000002 L 645.2066805013021 140.36700000000002 z" cy="175.45725000000002" cx="762.8108497111003" j="5" val="-20" barHeight="-35.09125" barWidth="14.232500305175781"></path><g id="SvgjsG1036" class="apexcharts-bar-goals-markers"><g id="SvgjsG1037" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1039" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1041" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1043" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1045" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g><g id="SvgjsG1047" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskp5mqc71)"></g></g></g><g id="SvgjsG1020" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1035" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1064" x1="0" y1="0" x2="711.6250152587891" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1065" x1="0" y1="0" x2="711.6250152587891" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1066" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1067" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1069" font-family="inherit" x="59.302084604899086" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1070">Feb</tspan><title>Feb</title></text><text id="SvgjsText1072" font-family="inherit" x="177.90625381469727" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1073">Mar</tspan><title>Mar</title></text><text id="SvgjsText1075" font-family="inherit" x="296.5104230244954" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1076">Apr</tspan><title>Apr</title></text><text id="SvgjsText1078" font-family="inherit" x="415.1145922342936" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1079">May</tspan><title>May</title></text><text id="SvgjsText1081" font-family="inherit" x="533.7187614440918" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1082">Jun</tspan><title>Jun</title></text><text id="SvgjsText1084" font-family="inherit" x="652.32293065389" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1085">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG1115" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1116" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1117" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
<!--end::Chart-->
</div>
<!--end::Body-->
</div>
<!--end::Charts Widget 5-->



<!--begin::Table Widget 6-->
<div class="card mb-5 mb-lg-10">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
    <span class="card-label fw-bold fs-3 mb-1">Authors Earnings</span>
    <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new authors</span>
</h3>
<div class="card-toolbar">
    <ul class="nav" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_6_tab_1" aria-selected="false" tabindex="-1" role="tab">Month</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_6_tab_2" aria-selected="false" tabindex="-1" role="tab">Week</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 active" data-bs-toggle="tab" href="#kt_table_widget_6_tab_3" aria-selected="true" role="tab">Day</a>
        </li>
    </ul>
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-3">
<div class="tab-content">
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade " id="kt_table_widget_6_tab_1" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                    <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$200,500</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-primary fs-7 fw-bold">+28%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                    <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-warning fs-7 fw-bold">+52%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                    <span class="text-muted fw-semibold d-block">PHP, Laravel, VueJS</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-danger fs-7 fw-bold">+52%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                    <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$3,400,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-success fs-7 fw-bold">-34%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                                    <span class="text-muted fw-semibold d-block">Art Director</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$35,600,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-info fs-7 fw-bold">+230%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade " id="kt_table_widget_6_tab_2" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                    <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-warning fs-7 fw-bold">+52%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                    <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$3,400,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-success fs-7 fw-bold">-34%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                    <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$200,500</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-primary fs-7 fw-bold">+28%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
                    
        <!--begin::Tap pane-->
        <div class="tab-pane fade show active" id="kt_table_widget_6_tab_3" role="tabpanel">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                    <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-danger fs-7 fw-bold">+52%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                    <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$3,400,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-success fs-7 fw-bold">-34%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                                    <span class="text-muted fw-semibold d-block">Art Director</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$35,600,000</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-info fs-7 fw-bold">+230%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <img src="/metronic8/demo18/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </span>   
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                    <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                    <span class="text-gray-900 fw-bold d-block fs-5">$200,500</span>
                                </td>
                                <td class="text-end">
                                    <span class="text-primary fs-7 fw-bold">+28%</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                                            </a>
                                </td>
                            </tr>
                                                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Tap pane-->
            </div>
</div>
<!--end::Body-->
</div>
<!--end::Tables Widget 6-->

</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-xl-4">

<!--begin::Mixed Widget 12-->
<div class="card mb-5 mb-lg-10">
<!--begin::Header-->
<div class="card-header border-0 bg-success py-5">
<h3 class="card-title fw-bold text-white">Sales Progress</h3>

<div class="card-toolbar">
    <!--begin::Menu-->
    <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
    
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
<!--begin::Heading-->
<div class="menu-item px-3">
<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
    Payments
</div>
</div>
<!--end::Heading-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
    Create Invoice
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link flex-stack px-3">
    Create Payment

    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
        <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
    Generate Bill
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
<a href="#" class="menu-link px-3">
    <span class="menu-title">Subscription</span>
    <span class="menu-arrow"></span>
</a>

<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Plans
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Billing
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->            
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Statements
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->            
    <div class="menu-item px-3">
        <div class="menu-content px-3">
            <!--begin::Switch-->      
            <label class="form-check form-switch form-check-custom form-check-solid">
                <!--begin::Input-->   
                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                <!--end::Input-->   

                <!--end::Label-->   
                <span class="form-check-label text-muted fs-6">
                    Recuring
                </span>
                <!--end::Label-->   
            </label>
            <!--end::Switch-->   
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3 my-1">
<a href="#" class="menu-link px-3">
    Settings
</a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 3-->
    <!--end::Menu-->
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body p-0">
<!--begin::Chart-->
<div class="mixed-widget-12-chart card-rounded-bottom bg-success" data-kt-color="success" style="height: 250px; min-height: 250px;"><div id="apexchartsv7im6w27l" class="apexcharts-canvas apexchartsv7im6w27l apexcharts-theme-light" style="width: 396px; height: 250px;"><svg id="SvgjsSvg1118" width="396" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="396" height="250"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 125px;"></div></foreignObject><g id="SvgjsG1193" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1120" class="apexcharts-inner apexcharts-graphical" transform="translate(20, 0.5)"><defs id="SvgjsDefs1119"><linearGradient id="SvgjsLinearGradient1122" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1123" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1124" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1125" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskv7im6w27l"><rect id="SvgjsRect1127" width="361" height="254" x="-2.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskv7im6w27l"></clipPath><clipPath id="nonForecastMaskv7im6w27l"></clipPath><clipPath id="gridRectMarkerMaskv7im6w27l"><rect id="SvgjsRect1128" width="360" height="253" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1126" width="7.628571428571428" height="249" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1122)" class="apexcharts-xcrosshairs" y2="249" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1166" class="apexcharts-grid"><g id="SvgjsG1167" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1170" x1="0" y1="0" x2="356" y2="0" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1171" x1="0" y1="24.9" x2="356" y2="24.9" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1172" x1="0" y1="49.8" x2="356" y2="49.8" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1173" x1="0" y1="74.69999999999999" x2="356" y2="74.69999999999999" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1174" x1="0" y1="99.6" x2="356" y2="99.6" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1175" x1="0" y1="124.5" x2="356" y2="124.5" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1176" x1="0" y1="149.4" x2="356" y2="149.4" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1177" x1="0" y1="174.3" x2="356" y2="174.3" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1178" x1="0" y1="199.20000000000002" x2="356" y2="199.20000000000002" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1179" x1="0" y1="224.10000000000002" x2="356" y2="224.10000000000002" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1180" x1="0" y1="249.00000000000003" x2="356" y2="249.00000000000003" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1168" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1182" x1="0" y1="249" x2="356" y2="249" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1181" x1="0" y1="1" x2="0" y2="249" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1169" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1129" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1130" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath1135" d="M17.799999999999997 247.001L17.799999999999997 163.851C17.799999999999997 162.851 18.799999999999997 161.851 19.799999999999997 161.851L22.428571428571423 161.851C23.428571428571423 161.851 24.428571428571423 162.851 24.428571428571423 163.851L24.428571428571423 247.001C24.428571428571423 248.001 23.428571428571423 249.001 22.428571428571423 249.001L19.799999999999997 249.001C18.799999999999997 249.001 17.799999999999997 248.001 17.799999999999997 247.001C17.799999999999997 247.001 17.799999999999997 247.001 17.799999999999997 247.001 " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 17.799999999999997 247.001 L 17.799999999999997 163.851 C 17.799999999999997 162.851 18.799999999999997 161.851 19.799999999999997 161.851 L 22.428571428571423 161.851 C 23.428571428571423 161.851 24.428571428571423 162.851 24.428571428571423 163.851 L 24.428571428571423 247.001 C 24.428571428571423 248.001 23.428571428571423 249.001 22.428571428571423 249.001 L 19.799999999999997 249.001 C 18.799999999999997 249.001 17.799999999999997 248.001 17.799999999999997 247.001 Z " pathFrom="M 17.799999999999997 249.001 L 17.799999999999997 249.001 L 24.428571428571423 249.001 L 24.428571428571423 249.001 L 24.428571428571423 249.001 L 24.428571428571423 249.001 L 24.428571428571423 249.001 L 17.799999999999997 249.001 Z" cy="161.85" cx="68.15714285714284" j="0" val="35" barHeight="87.15" barWidth="7.628571428571428"></path><path id="SvgjsPath1137" d="M68.65714285714284 247.001L68.65714285714284 89.15100000000001C68.65714285714284 88.15100000000001 69.65714285714284 87.15100000000001 70.65714285714284 87.15100000000001L73.28571428571428 87.15100000000001C74.28571428571428 87.15100000000001 75.28571428571428 88.15100000000001 75.28571428571428 89.15100000000001L75.28571428571428 247.001C75.28571428571428 248.001 74.28571428571428 249.001 73.28571428571428 249.001L70.65714285714284 249.001C69.65714285714284 249.001 68.65714285714284 248.001 68.65714285714284 247.001C68.65714285714284 247.001 68.65714285714284 247.001 68.65714285714284 247.001 " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 68.65714285714284 247.001 L 68.65714285714284 89.15100000000001 C 68.65714285714284 88.15100000000001 69.65714285714284 87.15100000000001 70.65714285714284 87.15100000000001 L 73.28571428571428 87.15100000000001 C 74.28571428571428 87.15100000000001 75.28571428571428 88.15100000000001 75.28571428571428 89.15100000000001 L 75.28571428571428 247.001 C 75.28571428571428 248.001 74.28571428571428 249.001 73.28571428571428 249.001 L 70.65714285714284 249.001 C 69.65714285714284 249.001 68.65714285714284 248.001 68.65714285714284 247.001 Z " pathFrom="M 68.65714285714284 249.001 L 68.65714285714284 249.001 L 75.28571428571428 249.001 L 75.28571428571428 249.001 L 75.28571428571428 249.001 L 75.28571428571428 249.001 L 75.28571428571428 249.001 L 68.65714285714284 249.001 Z" cy="87.15" cx="119.0142857142857" j="1" val="65" barHeight="161.85" barWidth="7.628571428571428"></path><path id="SvgjsPath1139" d="M119.5142857142857 247.001L119.5142857142857 64.251C119.5142857142857 63.251000000000005 120.5142857142857 62.251000000000005 121.5142857142857 62.251000000000005L124.14285714285714 62.251000000000005C125.14285714285714 62.251000000000005 126.14285714285714 63.251000000000005 126.14285714285714 64.251L126.14285714285714 247.001C126.14285714285714 248.001 125.14285714285714 249.001 124.14285714285714 249.001L121.5142857142857 249.001C120.5142857142857 249.001 119.5142857142857 248.001 119.5142857142857 247.001C119.5142857142857 247.001 119.5142857142857 247.001 119.5142857142857 247.001 " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 119.5142857142857 247.001 L 119.5142857142857 64.251 C 119.5142857142857 63.251000000000005 120.5142857142857 62.251 121.5142857142857 62.251 L 124.14285714285714 62.251 C 125.14285714285714 62.251 126.14285714285714 63.251000000000005 126.14285714285714 64.251 L 126.14285714285714 247.001 C 126.14285714285714 248.001 125.14285714285714 249.001 124.14285714285714 249.001 L 121.5142857142857 249.001 C 120.5142857142857 249.001 119.5142857142857 248.001 119.5142857142857 247.001 Z " pathFrom="M 119.5142857142857 249.001 L 119.5142857142857 249.001 L 126.14285714285714 249.001 L 126.14285714285714 249.001 L 126.14285714285714 249.001 L 126.14285714285714 249.001 L 126.14285714285714 249.001 L 119.5142857142857 249.001 Z" cy="62.25" cx="169.87142857142857" j="2" val="75" barHeight="186.75" barWidth="7.628571428571428"></path><path id="SvgjsPath1141" d="M170.37142857142857 247.001L170.37142857142857 114.05100000000002C170.37142857142857 113.05100000000002 171.37142857142857 112.05100000000002 172.37142857142857 112.05100000000002L175 112.05100000000002C176 112.05100000000002 177 113.05100000000002 177 114.05100000000002L177 247.001C177 248.001 176 249.001 175 249.001L172.37142857142857 249.001C171.37142857142857 249.001 170.37142857142857 248.001 170.37142857142857 247.001C170.37142857142857 247.001 170.37142857142857 247.001 170.37142857142857 247.001 " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 170.37142857142857 247.001 L 170.37142857142857 114.05100000000002 C 170.37142857142857 113.05100000000002 171.37142857142857 112.05100000000002 172.37142857142857 112.05100000000002 L 175 112.05100000000002 C 176 112.05100000000002 177 113.05100000000002 177 114.05100000000002 L 177 247.001 C 177 248.001 176 249.001 175 249.001 L 172.37142857142857 249.001 C 171.37142857142857 249.001 170.37142857142857 248.001 170.37142857142857 247.001 Z " pathFrom="M 170.37142857142857 249.001 L 170.37142857142857 249.001 L 177 249.001 L 177 249.001 L 177 249.001 L 177 249.001 L 177 249.001 L 170.37142857142857 249.001 Z" cy="112.05000000000001" cx="220.72857142857143" j="3" val="55" barHeight="136.95" barWidth="7.628571428571428"></path><path id="SvgjsPath1143" d="M221.22857142857143 247.001L221.22857142857143 138.951C221.22857142857143 137.951 222.22857142857143 136.951 223.22857142857143 136.951L225.85714285714286 136.951C226.85714285714286 136.951 227.85714285714286 137.951 227.85714285714286 138.951L227.85714285714286 247.001C227.85714285714286 248.001 226.85714285714286 249.001 225.85714285714286 249.001L223.22857142857143 249.001C222.22857142857143 249.001 221.22857142857143 248.001 221.22857142857143 247.001C221.22857142857143 247.001 221.22857142857143 247.001 221.22857142857143 247.001 " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 221.22857142857143 247.001 L 221.22857142857143 138.951 C 221.22857142857143 137.951 222.22857142857143 136.951 223.22857142857143 136.951 L 225.85714285714286 136.951 C 226.85714285714286 136.951 227.85714285714286 137.951 227.85714285714286 138.951 L 227.85714285714286 247.001 C 227.85714285714286 248.001 226.85714285714286 249.001 225.85714285714286 249.001 L 223.22857142857143 249.001 C 222.22857142857143 249.001 221.22857142857143 248.001 221.22857142857143 247.001 Z " pathFrom="M 221.22857142857143 249.001 L 221.22857142857143 249.001 L 227.85714285714286 249.001 L 227.85714285714286 249.001 L 227.85714285714286 249.001 L 227.85714285714286 249.001 L 227.85714285714286 249.001 L 221.22857142857143 249.001 Z" cy="136.95" cx="271.5857142857143" j="4" val="45" barHeight="112.05" barWidth="7.628571428571428"></path><path id="SvgjsPath1145" d="M272.0857142857143 247.001L272.0857142857143 101.601C272.0857142857143 100.601 273.0857142857143 99.601 274.0857142857143 99.601L276.7142857142857 99.601C277.7142857142857 99.601 278.7142857142857 100.601 278.7142857142857 101.601L278.7142857142857 247.001C278.7142857142857 248.001 277.7142857142857 249.001 276.7142857142857 249.001L274.0857142857143 249.001C273.0857142857143 249.001 272.0857142857143 248.001 272.0857142857143 247.001C272.0857142857143 247.001 272.0857142857143 247.001 272.0857142857143 247.001 " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 272.0857142857143 247.001 L 272.0857142857143 101.601 C 272.0857142857143 100.601 273.0857142857143 99.601 274.0857142857143 99.601 L 276.7142857142857 99.601 C 277.7142857142857 99.601 278.7142857142857 100.601 278.7142857142857 101.601 L 278.7142857142857 247.001 C 278.7142857142857 248.001 277.7142857142857 249.001 276.7142857142857 249.001 L 274.0857142857143 249.001 C 273.0857142857143 249.001 272.0857142857143 248.001 272.0857142857143 247.001 Z " pathFrom="M 272.0857142857143 249.001 L 272.0857142857143 249.001 L 278.7142857142857 249.001 L 278.7142857142857 249.001 L 278.7142857142857 249.001 L 278.7142857142857 249.001 L 278.7142857142857 249.001 L 272.0857142857143 249.001 Z" cy="99.6" cx="322.4428571428571" j="5" val="60" barHeight="149.4" barWidth="7.628571428571428"></path><path id="SvgjsPath1147" d="M322.9428571428571 247.001L322.9428571428571 114.05100000000002C322.9428571428571 113.05100000000002 323.9428571428571 112.05100000000002 324.9428571428571 112.05100000000002L327.57142857142856 112.05100000000002C328.57142857142856 112.05100000000002 329.57142857142856 113.05100000000002 329.57142857142856 114.05100000000002L329.57142857142856 247.001C329.57142857142856 248.001 328.57142857142856 249.001 327.57142857142856 249.001L324.9428571428571 249.001C323.9428571428571 249.001 322.9428571428571 248.001 322.9428571428571 247.001C322.9428571428571 247.001 322.9428571428571 247.001 322.9428571428571 247.001 " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 322.9428571428571 247.001 L 322.9428571428571 114.05100000000002 C 322.9428571428571 113.05100000000002 323.9428571428571 112.05100000000002 324.9428571428571 112.05100000000002 L 327.57142857142856 112.05100000000002 C 328.57142857142856 112.05100000000002 329.57142857142856 113.05100000000002 329.57142857142856 114.05100000000002 L 329.57142857142856 247.001 C 329.57142857142856 248.001 328.57142857142856 249.001 327.57142857142856 249.001 L 324.9428571428571 249.001 C 323.9428571428571 249.001 322.9428571428571 248.001 322.9428571428571 247.001 Z " pathFrom="M 322.9428571428571 249.001 L 322.9428571428571 249.001 L 329.57142857142856 249.001 L 329.57142857142856 249.001 L 329.57142857142856 249.001 L 329.57142857142856 249.001 L 329.57142857142856 249.001 L 322.9428571428571 249.001 Z" cy="112.05000000000001" cx="373.29999999999995" j="6" val="55" barHeight="136.95" barWidth="7.628571428571428"></path><g id="SvgjsG1132" class="apexcharts-bar-goals-markers"><g id="SvgjsG1134" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1136" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1138" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1140" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1142" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1144" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1146" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g></g><g id="SvgjsG1133" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1148" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath1153" d="M25.428571428571423 247.001L25.428571428571423 151.401C25.428571428571423 150.401 26.428571428571423 149.401 27.428571428571423 149.401L30.05714285714285 149.401C31.05714285714285 149.401 32.05714285714285 150.401 32.05714285714285 151.401L32.05714285714285 247.001C32.05714285714285 248.001 31.05714285714285 249.001 30.05714285714285 249.001L27.428571428571423 249.001C26.428571428571423 249.001 25.428571428571423 248.001 25.428571428571423 247.001C25.428571428571423 247.001 25.428571428571423 247.001 25.428571428571423 247.001 " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 25.428571428571423 247.001 L 25.428571428571423 151.401 C 25.428571428571423 150.401 26.428571428571423 149.401 27.428571428571423 149.401 L 30.05714285714285 149.401 C 31.05714285714285 149.401 32.05714285714285 150.401 32.05714285714285 151.401 L 32.05714285714285 247.001 C 32.05714285714285 248.001 31.05714285714285 249.001 30.05714285714285 249.001 L 27.428571428571423 249.001 C 26.428571428571423 249.001 25.428571428571423 248.001 25.428571428571423 247.001 Z " pathFrom="M 25.428571428571423 249.001 L 25.428571428571423 249.001 L 32.05714285714285 249.001 L 32.05714285714285 249.001 L 32.05714285714285 249.001 L 32.05714285714285 249.001 L 32.05714285714285 249.001 L 25.428571428571423 249.001 Z" cy="149.4" cx="75.78571428571428" j="0" val="40" barHeight="99.6" barWidth="7.628571428571428"></path><path id="SvgjsPath1155" d="M76.28571428571428 247.001L76.28571428571428 76.701C76.28571428571428 75.701 77.28571428571428 74.701 78.28571428571428 74.701L80.91428571428571 74.701C81.91428571428571 74.701 82.91428571428571 75.701 82.91428571428571 76.701L82.91428571428571 247.001C82.91428571428571 248.001 81.91428571428571 249.001 80.91428571428571 249.001L78.28571428571428 249.001C77.28571428571428 249.001 76.28571428571428 248.001 76.28571428571428 247.001C76.28571428571428 247.001 76.28571428571428 247.001 76.28571428571428 247.001 " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 76.28571428571428 247.001 L 76.28571428571428 76.701 C 76.28571428571428 75.701 77.28571428571428 74.701 78.28571428571428 74.701 L 80.91428571428571 74.701 C 81.91428571428571 74.701 82.91428571428571 75.701 82.91428571428571 76.701 L 82.91428571428571 247.001 C 82.91428571428571 248.001 81.91428571428571 249.001 80.91428571428571 249.001 L 78.28571428571428 249.001 C 77.28571428571428 249.001 76.28571428571428 248.001 76.28571428571428 247.001 Z " pathFrom="M 76.28571428571428 249.001 L 76.28571428571428 249.001 L 82.91428571428571 249.001 L 82.91428571428571 249.001 L 82.91428571428571 249.001 L 82.91428571428571 249.001 L 82.91428571428571 249.001 L 76.28571428571428 249.001 Z" cy="74.69999999999999" cx="126.64285714285714" j="1" val="70" barHeight="174.3" barWidth="7.628571428571428"></path><path id="SvgjsPath1157" d="M127.14285714285714 247.001L127.14285714285714 51.801000000000016C127.14285714285714 50.801000000000016 128.14285714285714 49.801000000000016 129.14285714285714 49.801000000000016L131.77142857142857 49.801000000000016C132.77142857142857 49.801000000000016 133.77142857142857 50.801000000000016 133.77142857142857 51.801000000000016L133.77142857142857 247.001C133.77142857142857 248.001 132.77142857142857 249.001 131.77142857142857 249.001L129.14285714285714 249.001C128.14285714285714 249.001 127.14285714285714 248.001 127.14285714285714 247.001C127.14285714285714 247.001 127.14285714285714 247.001 127.14285714285714 247.001 " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 127.14285714285714 247.001 L 127.14285714285714 51.80100000000001 C 127.14285714285714 50.80100000000001 128.14285714285714 49.80100000000001 129.14285714285714 49.80100000000001 L 131.77142857142857 49.80100000000001 C 132.77142857142857 49.80100000000001 133.77142857142857 50.80100000000001 133.77142857142857 51.80100000000001 L 133.77142857142857 247.001 C 133.77142857142857 248.001 132.77142857142857 249.001 131.77142857142857 249.001 L 129.14285714285714 249.001 C 128.14285714285714 249.001 127.14285714285714 248.001 127.14285714285714 247.001 Z " pathFrom="M 127.14285714285714 249.001 L 127.14285714285714 249.001 L 133.77142857142857 249.001 L 133.77142857142857 249.001 L 133.77142857142857 249.001 L 133.77142857142857 249.001 L 133.77142857142857 249.001 L 127.14285714285714 249.001 Z" cy="49.80000000000001" cx="177.5" j="2" val="80" barHeight="199.2" barWidth="7.628571428571428"></path><path id="SvgjsPath1159" d="M178 247.001L178 101.601C178 100.601 179 99.601 180 99.601L182.62857142857143 99.601C183.62857142857143 99.601 184.62857142857143 100.601 184.62857142857143 101.601L184.62857142857143 247.001C184.62857142857143 248.001 183.62857142857143 249.001 182.62857142857143 249.001L180 249.001C179 249.001 178 248.001 178 247.001C178 247.001 178 247.001 178 247.001 " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 178 247.001 L 178 101.601 C 178 100.601 179 99.601 180 99.601 L 182.62857142857143 99.601 C 183.62857142857143 99.601 184.62857142857143 100.601 184.62857142857143 101.601 L 184.62857142857143 247.001 C 184.62857142857143 248.001 183.62857142857143 249.001 182.62857142857143 249.001 L 180 249.001 C 179 249.001 178 248.001 178 247.001 Z " pathFrom="M 178 249.001 L 178 249.001 L 184.62857142857143 249.001 L 184.62857142857143 249.001 L 184.62857142857143 249.001 L 184.62857142857143 249.001 L 184.62857142857143 249.001 L 178 249.001 Z" cy="99.6" cx="228.35714285714286" j="3" val="60" barHeight="149.4" barWidth="7.628571428571428"></path><path id="SvgjsPath1161" d="M228.85714285714286 247.001L228.85714285714286 126.501C228.85714285714286 125.501 229.85714285714286 124.501 230.85714285714286 124.501L233.4857142857143 124.501C234.4857142857143 124.501 235.4857142857143 125.501 235.4857142857143 126.501L235.4857142857143 247.001C235.4857142857143 248.001 234.4857142857143 249.001 233.4857142857143 249.001L230.85714285714286 249.001C229.85714285714286 249.001 228.85714285714286 248.001 228.85714285714286 247.001C228.85714285714286 247.001 228.85714285714286 247.001 228.85714285714286 247.001 " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 228.85714285714286 247.001 L 228.85714285714286 126.501 C 228.85714285714286 125.501 229.85714285714286 124.501 230.85714285714286 124.501 L 233.4857142857143 124.501 C 234.4857142857143 124.501 235.4857142857143 125.501 235.4857142857143 126.501 L 235.4857142857143 247.001 C 235.4857142857143 248.001 234.4857142857143 249.001 233.4857142857143 249.001 L 230.85714285714286 249.001 C 229.85714285714286 249.001 228.85714285714286 248.001 228.85714285714286 247.001 Z " pathFrom="M 228.85714285714286 249.001 L 228.85714285714286 249.001 L 235.4857142857143 249.001 L 235.4857142857143 249.001 L 235.4857142857143 249.001 L 235.4857142857143 249.001 L 235.4857142857143 249.001 L 228.85714285714286 249.001 Z" cy="124.5" cx="279.2142857142857" j="4" val="50" barHeight="124.5" barWidth="7.628571428571428"></path><path id="SvgjsPath1163" d="M279.7142857142857 247.001L279.7142857142857 89.15100000000001C279.7142857142857 88.15100000000001 280.7142857142857 87.15100000000001 281.7142857142857 87.15100000000001L284.34285714285716 87.15100000000001C285.34285714285716 87.15100000000001 286.34285714285716 88.15100000000001 286.34285714285716 89.15100000000001L286.34285714285716 247.001C286.34285714285716 248.001 285.34285714285716 249.001 284.34285714285716 249.001L281.7142857142857 249.001C280.7142857142857 249.001 279.7142857142857 248.001 279.7142857142857 247.001C279.7142857142857 247.001 279.7142857142857 247.001 279.7142857142857 247.001 " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 279.7142857142857 247.001 L 279.7142857142857 89.15100000000001 C 279.7142857142857 88.15100000000001 280.7142857142857 87.15100000000001 281.7142857142857 87.15100000000001 L 284.34285714285716 87.15100000000001 C 285.34285714285716 87.15100000000001 286.34285714285716 88.15100000000001 286.34285714285716 89.15100000000001 L 286.34285714285716 247.001 C 286.34285714285716 248.001 285.34285714285716 249.001 284.34285714285716 249.001 L 281.7142857142857 249.001 C 280.7142857142857 249.001 279.7142857142857 248.001 279.7142857142857 247.001 Z " pathFrom="M 279.7142857142857 249.001 L 279.7142857142857 249.001 L 286.34285714285716 249.001 L 286.34285714285716 249.001 L 286.34285714285716 249.001 L 286.34285714285716 249.001 L 286.34285714285716 249.001 L 279.7142857142857 249.001 Z" cy="87.15" cx="330.07142857142856" j="5" val="65" barHeight="161.85" barWidth="7.628571428571428"></path><path id="SvgjsPath1165" d="M330.57142857142856 247.001L330.57142857142856 101.601C330.57142857142856 100.601 331.57142857142856 99.601 332.57142857142856 99.601L335.2 99.601C336.2 99.601 337.2 100.601 337.2 101.601L337.2 247.001C337.2 248.001 336.2 249.001 335.2 249.001L332.57142857142856 249.001C331.57142857142856 249.001 330.57142857142856 248.001 330.57142857142856 247.001C330.57142857142856 247.001 330.57142857142856 247.001 330.57142857142856 247.001 " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskv7im6w27l)" pathTo="M 330.57142857142856 247.001 L 330.57142857142856 101.601 C 330.57142857142856 100.601 331.57142857142856 99.601 332.57142857142856 99.601 L 335.2 99.601 C 336.2 99.601 337.2 100.601 337.2 101.601 L 337.2 247.001 C 337.2 248.001 336.2 249.001 335.2 249.001 L 332.57142857142856 249.001 C 331.57142857142856 249.001 330.57142857142856 248.001 330.57142857142856 247.001 Z " pathFrom="M 330.57142857142856 249.001 L 330.57142857142856 249.001 L 337.2 249.001 L 337.2 249.001 L 337.2 249.001 L 337.2 249.001 L 337.2 249.001 L 330.57142857142856 249.001 Z" cy="99.6" cx="380.9285714285714" j="6" val="60" barHeight="149.4" barWidth="7.628571428571428"></path><g id="SvgjsG1150" class="apexcharts-bar-goals-markers"><g id="SvgjsG1152" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1154" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1156" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1158" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1160" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1162" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g><g id="SvgjsG1164" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskv7im6w27l)"></g></g><g id="SvgjsG1151" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1131" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG1149" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="356" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="356" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1185" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1186" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1194" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1195" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1196" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
<!--end::Chart-->

<!--begin::Stats-->
<div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
    <!--begin::Row-->
    <div class="row g-0 mb-7">
        <!--begin::Col-->
        <div class="col mx-5">
            <div class="fs-6 text-gray-500">
                Avarage Sale
            </div>
            <div class="fs-2 fw-bold text-gray-800">
                $650
            </div>
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col mx-5">
            <div class="fs-6 text-gray-500">
                Comissions
            </div>
            <div class="fs-2 fw-bold text-gray-800">
                $29,500
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row g-0">
        <!--begin::Col-->
        <div class="col mx-5">
            <div class="fs-6 text-gray-500">
                Revenue
            </div>
            <div class="fs-2 fw-bold text-gray-800">
                $55,000
            </div>
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col mx-5">
            <div class="fs-6 text-gray-500">
                Expenses
            </div>
            <div class="fs-2 fw-bold text-gray-800">
                $1,130,600
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
<!--end::Stats-->
</div>
<!--end::Body-->
</div>
<!--end::Mixed Widget 12-->            

<!--begin::List Widget 4-->
<div class="card mb-5 mb-lg-10">
<!--begin::Header-->
<div class="card-header border-0 pt-5">
<h3 class="card-title align-items-start flex-column">
    <span class="card-label fw-bold text-gray-900">Trends</span>

    <span class="text-muted mt-1 fw-semibold fs-7">Latest tech trends</span>
</h3>

<div class="card-toolbar">
    <!--begin::Menu-->
    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
    
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
<!--begin::Heading-->
<div class="menu-item px-3">
<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
    Payments
</div>
</div>
<!--end::Heading-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
    Create Invoice
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link flex-stack px-3">
    Create Payment

    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
        <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
    Generate Bill
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
<a href="#" class="menu-link px-3">
    <span class="menu-title">Subscription</span>
    <span class="menu-arrow"></span>
</a>

<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Plans
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Billing
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->            
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Statements
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->            
    <div class="menu-item px-3">
        <div class="menu-content px-3">
            <!--begin::Switch-->      
            <label class="form-check form-switch form-check-custom form-check-solid">
                <!--begin::Input-->   
                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                <!--end::Input-->   

                <!--end::Label-->   
                <span class="form-check-label text-muted fs-6">
                    Recuring
                </span>
                <!--end::Label-->   
            </label>
            <!--end::Switch-->   
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3 my-1">
<a href="#" class="menu-link px-3">
    Settings
</a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 3-->
    <!--end::Menu-->
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body pt-5">
            
    <!--begin::Item-->
    <div class="d-flex align-items-sm-center mb-7">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px me-5">
            <span class="symbol-label">
                <img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">                         
            </span>
        </div>
        <!--end::Symbol-->

        <!--begin::Section-->
        <div class="d-flex align-items-center flex-row-fluid flex-wrap">                    
            <div class="flex-grow-1 me-2">
                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top Authors</a>
                
                <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
            </div>                     

            <span class="badge badge-light fw-bold my-2">+82$</span>
        </div>
        <!--end::Section-->                
    </div>
    <!--end::Item-->
            
    <!--begin::Item-->
    <div class="d-flex align-items-sm-center mb-7">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px me-5">
            <span class="symbol-label">
                <img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">                         
            </span>
        </div>
        <!--end::Symbol-->

        <!--begin::Section-->
        <div class="d-flex align-items-center flex-row-fluid flex-wrap">                    
            <div class="flex-grow-1 me-2">
                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular Authors</a>
                
                <span class="text-muted fw-semibold d-block fs-7">Randy, Steve, Mike</span>
            </div>                     

            <span class="badge badge-light fw-bold my-2">+280$</span>
        </div>
        <!--end::Section-->                
    </div>
    <!--end::Item-->
            
    <!--begin::Item-->
    <div class="d-flex align-items-sm-center mb-7">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px me-5">
            <span class="symbol-label">
                <img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">                         
            </span>
        </div>
        <!--end::Symbol-->

        <!--begin::Section-->
        <div class="d-flex align-items-center flex-row-fluid flex-wrap">                    
            <div class="flex-grow-1 me-2">
                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Users</a>
                
                <span class="text-muted fw-semibold d-block fs-7">John, Pat, Jimmy</span>
            </div>                     

            <span class="badge badge-light fw-bold my-2">+4500$</span>
        </div>
        <!--end::Section-->                
    </div>
    <!--end::Item-->
            
    <!--begin::Item-->
    <div class="d-flex align-items-sm-center mb-7">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px me-5">
            <span class="symbol-label">
                <img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">                         
            </span>
        </div>
        <!--end::Symbol-->

        <!--begin::Section-->
        <div class="d-flex align-items-center flex-row-fluid flex-wrap">                    
            <div class="flex-grow-1 me-2">
                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Active Customers</a>
                
                <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
            </div>                     

            <span class="badge badge-light fw-bold my-2">+686$</span>
        </div>
        <!--end::Section-->                
    </div>
    <!--end::Item-->
            
    <!--begin::Item-->
    <div class="d-flex align-items-sm-center mb-7">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px me-5">
            <span class="symbol-label">
                <img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">                         
            </span>
        </div>
        <!--end::Symbol-->

        <!--begin::Section-->
        <div class="d-flex align-items-center flex-row-fluid flex-wrap">                    
            <div class="flex-grow-1 me-2">
                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller Theme</a>
                
                <span class="text-muted fw-semibold d-block fs-7">Disco, Retro, Sports</span>
            </div>                     

            <span class="badge badge-light fw-bold my-2">+726$</span>
        </div>
        <!--end::Section-->                
    </div>
    <!--end::Item-->
            
    <!--begin::Item-->
    <div class="d-flex align-items-sm-center ">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px me-5">
            <span class="symbol-label">
                <img src="/metronic8/demo18/assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="">                         
            </span>
        </div>
        <!--end::Symbol-->

        <!--begin::Section-->
        <div class="d-flex align-items-center flex-row-fluid flex-wrap">                    
            <div class="flex-grow-1 me-2">
                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Fox Broker App</a>
                
                <span class="text-muted fw-semibold d-block fs-7">Finance, Corporate, Apps</span>
            </div>                     

            <span class="badge badge-light fw-bold my-2">+145$</span>
        </div>
        <!--end::Section-->                
    </div>
    <!--end::Item-->
   
</div>
<!--end::Body-->
</div>
<!--end::List Widget 4-->

<!--begin::List Widget 5-->
<div class="card mb-10">
<!--begin::Header-->
<div class="card-header align-items-center border-0 mt-4">
<h3 class="card-title align-items-start flex-column">
    <span class="fw-bold mb-2 text-gray-900">Activities</span>            
    <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
</h3>

<div class="card-toolbar">
    <!--begin::Menu-->
    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
    

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_664fd68e5d288">
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
        <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_664fd68e5d288" data-allow-clear="true" data-select2-id="select2-data-11-07qh" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
            <option></option>
            <option value="1">Approved</option>
            <option value="2">Pending</option>
            <option value="2">In Process</option>
            <option value="2">Rejected</option>
        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-12-utjo" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-wojg-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-wojg-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->            <!--end::Menu-->
</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body pt-5">
<!--begin::Timeline-->
<div class="timeline-label">
    <!--begin::Item-->
    <div class="timeline-item">
        <!--begin::Label-->
        <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
        <!--end::Label-->

        <!--begin::Badge-->
        <div class="timeline-badge">
            <i class="fa fa-genderless text-warning fs-1"></i>
        </div>
        <!--end::Badge-->

        <!--begin::Text-->
        <div class="fw-mormal timeline-content text-muted ps-3">
            Outlines keep you honest. And keep structure
        </div>
        <!--end::Text-->
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    <div class="timeline-item">
        <!--begin::Label-->
        <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
        <!--end::Label-->

        <!--begin::Badge-->
        <div class="timeline-badge">
            <i class="fa fa-genderless text-success fs-1"></i>
        </div>
        <!--end::Badge-->

        <!--begin::Content-->
        <div class="timeline-content d-flex">
            <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    <div class="timeline-item">
        <!--begin::Label-->
        <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
        <!--end::Label-->

        <!--begin::Badge-->
        <div class="timeline-badge">
            <i class="fa fa-genderless text-danger fs-1"></i>
        </div>
        <!--end::Badge-->

        <!--begin::Desc-->
        <div class="timeline-content fw-bold text-gray-800 ps-3">
            Make deposit
            <a href="#" class="text-primary">USD 700</a>.
            to ESL
        </div>
        <!--end::Desc-->
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    <div class="timeline-item">
        <!--begin::Label-->
        <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
        <!--end::Label-->

        <!--begin::Badge-->
        <div class="timeline-badge">
            <i class="fa fa-genderless text-primary fs-1"></i>
        </div>
        <!--end::Badge-->

        <!--begin::Text-->
        <div class="timeline-content fw-mormal text-muted ps-3">
            Indulging in poorly driving and keep structure keep great
        </div>
        <!--end::Text-->
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    <div class="timeline-item">
        <!--begin::Label-->
        <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
        <!--end::Label-->

        <!--begin::Badge-->
        <div class="timeline-badge">
            <i class="fa fa-genderless text-danger fs-1"></i>
        </div>
        <!--end::Badge-->

        <!--begin::Desc-->
        <div class="timeline-content fw-semibold text-gray-800 ps-3">
            New order placed <a href="#" class="text-primary">#XF-2356</a>.
        </div>
        <!--end::Desc-->
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    <div class="timeline-item">
        <!--begin::Label-->
        <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
        <!--end::Label-->

        <!--begin::Badge-->
        <div class="timeline-badge">
            <i class="fa fa-genderless text-primary fs-1"></i>
        </div>
        <!--end::Badge-->

        <!--begin::Text-->
        <div class="timeline-content fw-mormal text-muted ps-3">
            Indulging in poorly driving and keep structure keep great
        </div>
        <!--end::Text-->
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    <div class="timeline-item">
        <!--begin::Label-->
        <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
        <!--end::Label-->

        <!--begin::Badge-->
        <div class="timeline-badge">
            <i class="fa fa-genderless text-danger fs-1"></i>
        </div>
        <!--end::Badge-->

        <!--begin::Desc-->
        <div class="timeline-content fw-semibold text-gray-800 ps-3">
            New order placed <a href="#" class="text-primary">#XF-2356</a>.
        </div>
        <!--end::Desc-->
    </div>
    <!--end::Item-->

                    <!--begin::Item-->
        <div class="timeline-item">
            <!--begin::Label-->
            <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
            <!--end::Label-->

            <!--begin::Badge-->
            <div class="timeline-badge">
                <i class="fa fa-genderless text-success fs-1"></i>
            </div>
            <!--end::Badge-->

            <!--begin::Text-->
            <div class="timeline-content fw-mormal text-muted ps-3">
                Finance KPI Mobile app launch preparion meeting
            </div>
            <!--end::Text-->
        </div>
        <!--end::Item-->
            </div>
<!--end::Timeline-->
</div>
<!--end: Card Body-->
</div>
<!--end: List Widget 5-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->					</div>
            <!--end::Post-->	
        </div>




    </x-default-layout>

    <script>
        function calcu() {



            var calculo = document.getElementById("calculo").value;
            var uno = document.getElementById("uno").value;
            document.getElementById("calculo").value = calculo + uno;
            //            alert(calculo);

            //document.getElementById("comerci").value = comer;
        }

        function calcu2() {
            var calculo = document.getElementById("calculo").value;
            var uno = document.getElementById("dos").value;
            document.getElementById("calculo").value = calculo + uno;
        }

        function calcu3() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("tres").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu4() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cuatro").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu5() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cinco").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu6() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("seis").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu7() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("siete").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu8() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("ocho").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu9() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("nueve").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu0() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cero").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcu00() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("cerocero").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcupunto() {
            var calculo = document.getElementById("calculo").value;
            var num = document.getElementById("punto").value;
            document.getElementById("calculo").value = calculo + num;
        }

        function calcuborrar() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("calculo").value = " ";
        }

        function calcuc() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("calculo").value = " ";
        }

        function calcuenter() {
            var orden = document.getElementById("ordenpre").value;
            var calc = document.getElementById("calculo").value;
            if (orden == "0") {

                document.getElementById("depasub").value = calc;


            }
            if (orden == "1") {
                document.getElementById("persosub").value = calc;
            }
            if (orden == "2") {
                document.getElementById("fijosub").value = calc;
            }
            if (orden == "3") {
                document.getElementById("casisub").value = calc;
            }
            desdeenter();
            calcuborrar();

        }
        function desdeenter() {
            
            const subtotal = parseFloat(document.getElementById("depasub").value);
            const subtotal2 = parseFloat(document.getElementById("persosub").value);
            const subtotal3 = parseFloat(document.getElementById("fijosub").value);
            const subtotal4 = parseFloat(document.getElementById("casisub").value);

            const total = subtotal + subtotal2 + subtotal3 + subtotal4;

            $('#stotal').text("$" + total);
            $('#total1').text("$" + total);

            //alert('hola');




        }

        function calcuperso() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 0;
        }

        function calcudepa() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 1;
        }

        function calcupf() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 2;
        }

        function calcucasi() {
            //var calculo = document.getElementById("calculo").value;
            //var num = document.getElementById("borrar").value;
            document.getElementById("ordenpre").value = 3;
        }
    </script>

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
    <!--end::Vendors Javascript-->


    <script>

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Evento para abrir el modal de agregar comercio cuando se hace clic en el enlace
            $('#openAgregarComerciosModal').on('click', function() {
                $('#agregarComercioModal').modal('show');
            });

            // Evento para guardar la información del comercio cuando se hace clic en el botón Guardar
            $('#guardarComercioBtn').on('click', function() {
                // Obtener los valores de los campos del formulario
                var nombreComercio = $('#nombre_comercio').val();
                var telefono = $('#telefono').val();
                var fechaAlta = $('#fecha_alta').val();
                var tipoComercio = $('#tipo_comercio').val();
                var estadoComercio = $('#estado_comercio').val();
                var agenciaRegistro = $('#agencia_registro').val();
                var correoElectronico = $('#correo_electronico').val();

                // Aquí puedes hacer validaciones adicionales si es necesario

                // Crear un objeto con la información del comercio
                var comercio = {
                    nombre: nombreComercio,
                    telefono: telefono,
                    fecha_alta: fechaAlta,
                    tipo: tipoComercio,
                    estado: estadoComercio,
                    agencia_registro: agenciaRegistro,
                    correo: correoElectronico
                };


                // Simplemente mostraremos los datos en la consola como ejemplo
                console.log('Información del comercio:', comercio);

                // Cerrar el modal después de guardar
                $('#agregarComercioModal').modal('hide');
            });
        });
    </script>

    <script>
        function comerciosel() {
            const comer = document.getElementById("comercio").value;
            document.getElementById("comerci").value = comer;

        }
    </script>


    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>