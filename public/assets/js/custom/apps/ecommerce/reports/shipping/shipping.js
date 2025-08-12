"use strict";

// Class definition
var KTAppEcommerceReportShipping = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[0].innerHTML, "MMM DD, YYYY").format(); // select date from 4th column in table
            dateRow[0].setAttribute('data-order', realDate);
        });


        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
             dom:
  "<'row'<'col-12'tr>>" +
  "<'row align-items-center mt-3'<'col-md-4'l><'col-md-4 text-center'i><'col-md-4 d-flex justify-content-end'p>>",
            "info": false,
            'order': [],
            'pageLength': 10,
            language: {
    // Opción A: archivo local (pon el JSON en /public/vendor/datatables/i18n/es-ES.json)
   url: "https://cdn.datatables.net/plug-ins/2.0.0/i18n/es-ES.json"
    // Opción B (alternativa): CDN oficial (ajusta a tu versión 1.x o 2.x)
    // url: "https://cdn.datatables.net/plug-ins/2.0.0/i18n/es-ES.json"
    // url: "https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json"

    
  }
        });
    }

    // Init daterangepicker
    var initDaterangepicker = () => {
        var start = moment().subtract(29, "days");
        var end = moment();
        var input = $("#kt_ecommerce_report_shipping_daterangepicker");

        function cb(start, end) {
            input.html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
        }

        input.daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                "Ahora": [moment(), moment()],
                "Ayer": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                "últimos 15 dias": [moment().subtract(14, "days"), moment()],
                "últimos 30 dias": [moment().subtract(29, "days"), moment()],
                "Mes actual": [moment().startOf("month"), moment().endOf("month")],
                "Mes pasado": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
            },
            locale: {
        
        "customRangeLabel": "Personalizado",
  }
        }, cb);

        cb(start, end);
    }

    // Handle status filter dropdown
    var handleStatusFilter = () => {
        const filterStatus = document.querySelector('[data-kt-ecommerce-order-filter="status"]');
        $(filterStatus).on('change', e => {
            let value = e.target.value;
            if (value === 'all') {
                value = '';
            }
            datatable.column(3).search(value).draw();
        });
    }

    // Hook export buttons
    var exportButtons = () => {
        const documentTitle = 'Shipping Report';
        var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    title: documentTitle
                },
                {
                    extend: 'excelHtml5',
                    title: documentTitle
                },
                {
                    extend: 'csvHtml5',
                    title: documentTitle
                },
                {
                    extend: 'pdfHtml5',
                    title: documentTitle
                } 
            ]
        }).container().appendTo($('#kt_ecommerce_report_shipping_export'));

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll('#kt_ecommerce_report_shipping_export_menu [data-kt-ecommerce-export]');
        exportButtons.forEach(exportButton => {
            exportButton.addEventListener('click', e => {
                e.preventDefault();

                // Get clicked export value
                const exportValue = e.target.getAttribute('data-kt-ecommerce-export');
                const target = document.querySelector('.dt-buttons .buttons-' + exportValue);

                // Trigger click event on hidden datatable export buttons
                target.click();
            });
        });
    }


    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-ecommerce-order-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_ecommerce_report_shipping_table');

            if (!table) {
                return;
            }

            initDatatable();
            initDaterangepicker();
            exportButtons();
            handleSearchDatatable();
            handleStatusFilter();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceReportShipping.init();
});
