<x-default-layout>



<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 pt-4 mb-4">
	<!--begin::Title-->
	<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Melo Express</h1>
	<!--end::Title-->
	<!--begin::Breadcrumb-->
	<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
		<!--begin::Item-->
		<li class="breadcrumb-item text-muted">
			<a href="/" class="text-muted text-hover-primary">Inicio</a>
		</li>
		<!--end::Item-->
		<!--begin::Item-->
		<li class="breadcrumb-item">
			<span class="bullet bg-gray-400 w-5px h-2px"></span>
		</li>
		<!--end::Item-->
		<!--begin::Item-->
		<li class="breadcrumb-item text-muted">Empleados</li>
		<!--end::Item-->
	</ul>   
	<!--end::Breadcrumb-->
</div>
<!--end::Page title-->








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
                <!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6"> 
	
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
		
		<!--begin::Actions-->
		<div class="d-flex align-items-center gap-2 gap-lg-3">
			
			<!--begin::Secondary button-->
			
			
			<!--end::Secondary button-->
			<!--begin::Primary button-->
			<a href="/empleados/crear" class="btn btn-sm fw-bold btn-primary" >Agregar</a>
			
			<!--end::Primary button-->
		</div>
		
		<!--end::Actions -->
	</div>
	
	<!--end::Toolbar container -->
</div>

<!--end::Toolbar-->
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
                        <th class="min-w-150px">Acción</th>
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
                            <td>
                            <a href="/empleados" class="btn btn-success">Ver</a>
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