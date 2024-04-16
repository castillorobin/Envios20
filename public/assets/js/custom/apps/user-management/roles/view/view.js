"use strict";

// Definición de la clase
var KTUsersViewRole = function () {
    // Variables compartidas
    var datatable;
    var table;

    // Inicialización del modal para ver roles
    var initViewRole = () => {
        // Establecer el orden de los datos de fecha
        const filasTabla = table.querySelectorAll('tbody tr');

        filasTabla.forEach(fila => {
            const columnasFecha = fila.querySelectorAll('td');
            const fechaReal = moment(columnasFecha[3].innerHTML, "DD MMM YYYY, LT").format(); // seleccionar la fecha de la quinta columna en la tabla
            columnasFecha[3].setAttribute('data-order', fechaReal);
        });

         // Inicializar datatable --- más información sobre datatables: https://datatables.net/manual/
         datatable = $(table).DataTable({
            "info": false,
            'order': [],
            "pageLength": 5,
            "lengthChange": false,
            'columnDefs': [
                { orderable: false, targets: 0 }, // Deshabilitar ordenamiento en la columna 0 (checkbox)
                { orderable: false, targets: 4 }, // Deshabilitar ordenamiento en la columna 4 (acciones)
            ]
        });        
    }

    // Buscar en Datatable --- referencia oficial de los docs: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filtroBusqueda = document.querySelector('[data-kt-roles-table-filter="search"]');
        filtroBusqueda.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Eliminar fila
    var handleDeleteRows = () => {
        // Seleccionar todos los botones de eliminar
        const botonesEliminar = table.querySelectorAll('[data-kt-roles-table-filter="delete_row"]');

        botonesEliminar.forEach(b => {
            // Evento de clic en el botón de eliminar
            b.addEventListener('click', function (e) {
                e.preventDefault();

                // Seleccionar la fila padre
                const padre = e.target.closest('tr');

                // Obtener el nombre del usuario
                const nombreUsuario = padre.querySelectorAll('td')[1].innerText;

                // Popup de SweetAlert2 --- referencia oficial de los docs: https://sweetalert2.github.io/
                Swal.fire({
                    text: "¿Seguro que quieres eliminar a " + nombreUsuario + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Sí, eliminar!",
                    cancelButtonText: "No, cancelar",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "¡Has eliminado a " + nombreUsuario + "!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, entendido!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            // Eliminar la fila actual
                            datatable.row($(padre)).remove().draw();
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: nombreUsuario + " no ha sido eliminado.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, entendido!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }

    // Inicializar el alternar la barra de herramientas
    var initToggleToolbar = () => {
        // Alternar la barra de herramientas de acción seleccionada
        // Seleccionar todas las casillas de verificación
        const casillasVerificacion = table.querySelectorAll('[type="checkbox"]');

        // Seleccionar elementos
        const eliminarSeleccionados = document.querySelector('[data-kt-view-roles-table-select="delete_selected"]');

        // Alternar la barra de herramientas de eliminación seleccionada
        casillasVerificacion.forEach(c => {
            // Evento de clic en la casilla de verificación
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleHerramientas();
                }, 50);
            });
        });

        // Eliminar filas seleccionadas
        eliminarSeleccionados.addEventListener('click', function () {
            // Popup de SweetAlert2 --- referencia oficial de los docs: https://sweetalert2.github.io/
            Swal.fire({
                text: "¿Seguro que quieres eliminar a los clientes seleccionados?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Sí, eliminar!",
                cancelButtonText: "No, cancelar",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        text: "¡Has eliminado a todos los clientes seleccionados!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, entendido!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function () {
                        // Eliminar todos los clientes seleccionados
                        casillasVerificacion.forEach(c => {
                            if (c.checked) {
                                datatable.row($(c.closest('tbody tr'))).remove().draw();
                            }
                        });

                        // Eliminar casilla de verificación del encabezado
                        const casillaVerificacionEncabezado = table.querySelectorAll('[type="checkbox"]')[0];
                        casillaVerificacionEncabezado.checked = false;
                    }).then(function(){
                        toggleHerramientas(); // Detectar casillas de verificación marcadas
                        initToggleToolbar(); // Volver a inicializar la barra de herramientas para recalcular las casillas de verificación
                    });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "No se han eliminado los clientes seleccionados.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, entendido!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    });
                }
            });
        });
    }

    // Alternar herramientas
    const toggleHerramientas = () => {
        // Definir variables
        const barraBase = document.querySelector('[data-kt-view-roles-table-toolbar="base"]');
        const barraSeleccionada = document.querySelector('[data-kt-view-roles-table-toolbar="selected"]');
        const contadorSeleccionado = document.querySelector('[data-kt-view-roles-table-select="selected_count"]');

        // Seleccionar elementos DOM de casillas de verificación actualizadas
        const todasCasillas = table.querySelectorAll('tbody [type="checkbox"]');

        // Detectar estado y contar las casillas de verificación
        let estadoMarcado = false;
        let contador = 0;

        // Contar casillas de verificación marcadas
        todasCasillas.forEach(c => {
            if (c.checked) {
                estadoMarcado = true;
                contador++;
            }
        });

        // Alternar barras de herramientas
        if (estadoMarcado) {
            contadorSeleccionado.innerHTML = contador;
            barraBase.classList.add('d-none');
            barraSeleccionada.classList.remove('d-none');
        } else {
            barraBase.classList.remove('d-none');
            barraSeleccionada.classList.add('d-none');
        }
    }

    return {
        // Funciones públicas
        init: function () {
            table = document.querySelector('#kt_roles_view_table');
            
            if (!table) {
                return;
            }

            initViewRole();
            handleSearchDatatable();
            handleDeleteRows();
            initToggleToolbar();
        }
    };
}();

// Cuando el documento esté listo
KTUtil.onDOMContentLoaded(function () {
    KTUsersViewRole.init();
});
