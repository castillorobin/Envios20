<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
			<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'fs-2') !!}</span>
					<span class="menu-title">Dashboards</span>
					<span class="menu-arrow"></span>
				</span>
			</div>
			<div class="menu-item pt-5">
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">Secciones</span>
				</div>
			</div>

			@can('recursos-ver')

			<div class="menu-item menu-sub-indention menu-accordion" id="menu-item-1" data-kt-menu-trigger="click">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
					<span class="menu-title">Recursos Humanos</span>
					<span class="menu-arrow"></span>
				</span>
 
				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3" style="background-color: transparent;">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Gestion de empleado</span>
							<span class="menu-arrow"></span>
						</a>
						@can('recursos-crear')
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="/empleado/crear" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Crear empleado</span>
								</a>
							</div>
							@endcan
							<div class="menu-item">
								<a href="/empleado" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lista de empleados</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				@can('recursos-crear')
				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3" style="background-color: transparent;">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Gestion de Usuarios</span>
							<span class="menu-arrow"></span>
						</a>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="/usuarios/lista" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lista de usuarios</span>
								</a>
							</div>

							<div class="menu-item">
								<a href="/usuarios/role" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lista de roles</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				@endcan
				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3" style="background-color: transparent;">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Control de permisos y faltas</span>
							<span class="menu-arrow"></span>
						</a>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="#" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Crear permisos y faltas</span>
								</a>
							</div>

							<div class="menu-item">
								<a href="#" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lista de permisos y faltas</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3" style="background-color: transparent;">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Control de entradas y salidas</span>
							<span class="menu-arrow"></span>
						</a>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="#" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Crear entradas y salidas</span>
								</a>
							</div>

							<div class="menu-item">
								<a href="#" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lista de entradas y salidas</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endcan

			@can('financiera-ver')

			<div class="menu-item menu-sub-indention menu-accordion" id="menu-item-2" data-kt-menu-trigger="click">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('dollar', 'fs-2') !!}</span>
					<span class="menu-title">Gestion financiera</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Nominas</span>
							<span class="menu-arrow"></span>
						</a>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="#" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lista de empleados</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3" style="background-color: transparent;">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Gastos e ingresos</span>
							<span class="menu-arrow"></span>
						</a>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="#" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Crear</span>
								</a>
							</div>

							<div class="menu-item">
								<a href="#" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Listado</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3" style="background-color: transparent;">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Reportes</span>
							<span class="menu-arrow"></span>
						</a>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="/envios/reporteganancias" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Reporte de ganancias</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="/envios/reporteingresos" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Reporte de ingresos</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			@endcan

			@can('ordenes-ver')
			<div data-kt-menu-trigger="click" id="menu-item-3" class="menu-item menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('scooter-2', 'fs-2') !!}</span>
					<span class="menu-title">Gestion de ordenes</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion">
					<!--
					<div class="menu-item">
						<a class="menu-link" href="/envio/crear">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Crear orden</span>
						</a>
					</div>
				-->
					<div class="menu-item">
						<a class="menu-link" href="/envios/lista">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Búsqueda manual </span>
						</a>
					</div>

					<div class="menu-item">
						<a class="menu-link" href="/enviosdeticket">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Búsqueda por ticket</span>
						</a>
					</div>
					@can('ordenes-crear')
					<div class="menu-item">
						<a class="menu-link" href="/envios/registroconguia">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Registro con guia </span>
						</a>
					</div>

					@endcan
					
				</div>
			</div>
			@endcan

			@can('comercios-ver')
			<div data-kt-menu-trigger="click" id="menu-item-4" class="menu-item menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('home', 'fs-2') !!}</span>
					<span class="menu-title">Gestion de comercios</span>
					<span class="menu-arrow"></span>
				</span>
				
				<div class="menu-sub menu-sub-accordion">
				@can('comercios-crear')
					<div class="menu-item">
						<a class="menu-link" href="/comercio/crearcomercio">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Crear comercio</span>
						</a>
					</div>
					@endcan
					<div class="menu-item">
						<a class="menu-link" href="/comercio">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Lista de comercio </span>
						</a>
					</div>
				</div>
			</div>
			@endcan

			@can('factura-ver')
			<div data-kt-menu-trigger="click" id="menu-item-5" class="menu-item menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('document', 'fs-2') !!}</span>
					<span class="menu-title">Facturacion</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item">
						<a class="menu-link" href="/registro-orden">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Cobrar</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/listapagos">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Pagar por Comercio</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/listapagosticket">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Pagar por Ticket</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/entregas">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Entregar</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/listadoentregas">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Listado de entregas</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/envios/listadoticket">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Listado de ticket</span>
						</a>
					</div>
					
				</div>
			</div>
			@endcan
			@can('stock-ver')
			<div data-kt-menu-trigger="click" id="menu-item-6" class="menu-item menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
					<span class="menu-title">Control de stock</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item menu-accordion" data-kt-menu-trigger="click">
						<a href="#" class="menu-link py-3" style="background-color: transparent;">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Seleccion de paqueteria</span>
							<span class="menu-arrow"></span>
						</a>

						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="/stocks/seleccionarzona" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Seleccion por zona</span>
								</a>
							</div>

							<div class="menu-item">
								<a href="/stocks/seleccionarpunto" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Seleccion por punto</span>
								</a>
							</div>
						</div>
					</div>
					@can('stock-editar')
					<div class="menu-item">
						<a class="menu-link" href="/stocks/asignar">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Asignar ubicaciones</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/stocks/cambiar">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Cambiar ubicaciones</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/stocks/asignarrepartidor">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Asignar repartidor por guia</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="/stocks/asignarrepartidorcaja">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Asignar repartidor por caja</span>
						</a>
					</div>

					<div class="menu-item">
						<a class="menu-link" href="/stocks/asignarestado">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Asignar Estado</span>
						</a>
					</div>


					<div class="menu-item">
						<a class="menu-link" href="/stocks/agregarfoto">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Agregar foto</span>
						</a>
					</div>
					@endcan


					<div class="menu-item">
						<a class="menu-link" href="#">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ver ubicacion</span>
						</a>
					</div>
				</div>
			</div>
			@endcan

			@can('configurar-ver')
			<div data-kt-menu-trigger="click" id="menu-item-7" class="menu-item menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
					<span class="menu-title">Configuraciones</span>
					<span class="menu-arrow"></span>
				</span>

				<div class="menu-sub menu-sub-accordion">
					<div class="menu-item">
						<a class="menu-link" href="/configuraciones/ajustes">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Configuraciones de ruta</span>
						</a>
					</div>
				</div>
				

			</div>
			@endcan
		</div>
	</div>
</div>