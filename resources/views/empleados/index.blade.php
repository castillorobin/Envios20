<x-default-layout>

<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Heading-->
        <div class="card-title">
            <h3>Empleados</h3>
        </div>
        <!--end::Heading-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <div class="my-1 me-4">
                
            </div> 

           
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-0">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="min-w-250px">Nombre</th>
                        <th class="min-w-100px">Dirección</th>
                        <th class="min-w-150px">Teléfono</th>
                        <th class="min-w-150px">Email</th>
                        <th class="min-w-150px">Cargo</th>
                    </tr>
                </thead>
                <!--end::Thead-->

                <!--begin::Tbody-->
                <tbody class="fw-6 fw-semibold text-gray-600">
                @for ($i=0; $i< count($vendedores); $i++)
                                            <tr>
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
                        </tr>
                          
                        @endfor        
                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Card body-->
</div>


</x-default-layout>