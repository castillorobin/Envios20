<x-default-layout>
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4 ">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="/" class="text-muted text-hover-primary">Inicio</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">Empleados</li>
        </ul>
    </div>
    <div class="card mb-5 mb-xl-10">
        <div class="card-header">
            <div class="card-title">
                <h3>Empleados</h3>
            </div>
        </div>
    </div>
    <div class="card-toolbar">
        <div class="my-1 me-4">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="/empleados/crear" class="btn btn-sm fw-bold btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="min-w-250px">Nombre</th>
                        <th class="min-w-100px">Dirección</th>
                        <th class="min-w-150px">Teléfono</th>
                        <th class="min-w-150px">Email</th>
                        <th class="min-w-150px">Cargo</th>
                        <th class="min-w-150px">Acción</th>
                    </tr>
                </thead>
                <tbody class="fw-6 fw-semibold text-gray-600">
                    @for ($i=0; $i< count($vendedores); $i++) <tr>
                        <td>
                            {{ $vendedores[$i]->nombre }}
                        </td>

                        <td>
                            {{ $vendedores[$i]->direccion }}
                        </td>

                        <td>
                            {{ $vendedores[$i]->telefono }}
                        </td>

                        <td>
                            {{ $vendedores[$i]->correo }}
                        </td>

                        <td>
                            {{ $vendedores[$i]->cargo }}
                        </td>
                        <td>
                            <a href="/empleados/{{$vendedores[$i]->id}}" class="btn btn-success">Ver</a>
                        </td>
                        </tr>

                        @endfor
                </tbody>
            </table>
        </div>
    </div>
    </div>
</x-default-layout>