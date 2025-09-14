<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
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

      @php
        $isRH = request()->is('empleado*') || request()->is('usuarios*') || request()->is('stocks/*rh*'); // ajusta a tus rutas
      @endphp

      <div class="menu-item menu-sub-indention menu-accordion {{ $isRH ? 'here show' : '' }}"
           id="menu-item-1" data-kt-menu-trigger="click">
        <span class="menu-link">
          <span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
          <span class="menu-title">Recursos Humanos</span>
          <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion">
          {{-- Gestión de empleado (grupo intermedio) --}}
          @php
            $isEmpleado = request()->is('empleado*');
          @endphp
          <div class="menu-item menu-accordion {{ $isEmpleado ? 'here show' : '' }}" data-kt-menu-trigger="click">
            <span class="menu-link py-3">
              <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
              <span class="menu-title">Gestión de empleado</span>
              <span class="menu-arrow"></span>
            </span>

            <div class="menu-sub menu-sub-accordion">
              @can('recursos-crear')
              <div class="menu-item">
                <a href="{{ url('/empleado/crear') }}"
                   class="menu-link py-3 {{ request()->is('empleado/crear') ? 'active' : '' }}">
                  <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                  <span class="menu-title">Crear empleado</span>
                </a>
              </div>
              @endcan

              <div class="menu-item">
                <a href="{{ url('/empleado') }}"
                   class="menu-link py-3 {{ request()->is('empleado') ? 'active' : '' }}">
                  <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                  <span class="menu-title">Lista de empleados</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- Gestión de Usuarios (otro grupo intermedio) --}}
        @can('recursos-crear')
        @php $isUsuarios = request()->is('usuarios*'); @endphp
        <div class="menu-sub menu-sub-accordion">
          <div class="menu-item menu-accordion {{ $isUsuarios ? 'here show' : '' }}" data-kt-menu-trigger="click">
            <span class="menu-link py-3">
              <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
              <span class="menu-title">Gestión de Usuarios</span>
              <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion">
              <div class="menu-item">
                <a href="{{ url('/usuarios/lista') }}"
                   class="menu-link py-3 {{ request()->is('usuarios/lista') ? 'active' : '' }}">
                  <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                  <span class="menu-title">Lista de usuarios</span>
                </a>
              </div>

              <div class="menu-item">
                <a href="{{ url('/usuarios/role') }}"
                   class="menu-link py-3 {{ request()->is('usuarios/role') ? 'active' : '' }}">
                  <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                  <span class="menu-title">Lista de roles</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endcan
      </div>

      
			@endcan

			@can('financiera-ver')

			@php
  $inFin = request()->is('listapagos') || request()->is('listapagosticket') ||
           request()->is('envios/reporteganancias') || request()->is('envios/reporteingresos');
@endphp

<div class="menu-item menu-sub-indention menu-accordion {{ $inFin ? 'here show' : '' }}" id="menu-item-fin" data-kt-menu-trigger="click">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('dollar', 'fs-2') !!}</span>
    <span class="menu-title">Gestión financiera</span>
    <span class="menu-arrow"></span>
  </span>

  {{-- Nóminas (placeholder, sin rutas) --}}
  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
      <span class="menu-link py-3">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Nóminas</span>
        <span class="menu-arrow"></span>
      </span>
      <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
          <a href="#" class="menu-link py-3">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Lista de empleados</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Gastos e ingresos (placeholder, sin rutas) --}}
  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
      <span class="menu-link py-3">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Gastos e ingresos</span>
        <span class="menu-arrow"></span>
      </span>
      <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
          <a href="#" class="menu-link py-3">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Crear</span>
          </a>
        </div>
        <div class="menu-item">
          <a href="#" class="menu-link py-3">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Listado</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Reportes --}}
  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item menu-accordion {{ (request()->is('envios/reporteganancias') || request()->is('envios/reporteingresos')) ? 'here show' : '' }}" data-kt-menu-trigger="click">
      <span class="menu-link py-3">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Reportes</span>
        <span class="menu-arrow"></span>
      </span>
      <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
          <a href="{{ url('/envios/reporteganancias') }}" class="menu-link py-3 {{ request()->is('envios/reporteganancias') ? 'active' : '' }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Reporte de ganancias</span>
          </a>
        </div>
        <div class="menu-item">
          <a href="{{ url('/envios/reporteingresos') }}" class="menu-link py-3 {{ request()->is('envios/reporteingresos') ? 'active' : '' }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Reporte de ingresos</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
			@endcan

			@can('ordenes-ver')
			@php
  $inOrdenes = request()->is('envios/lista') || request()->is('enviosdeticket') || request()->is('envios/registroconguia');
@endphp

<div data-kt-menu-trigger="click" id="menu-item-ordenes" class="menu-item menu-accordion {{ $inOrdenes ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('scooter-2', 'fs-2') !!}</span>
    <span class="menu-title">Gestión de órdenes</span>
    <span class="menu-arrow"></span>
  </span>
  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('envios/lista') ? 'active' : '' }}" href="{{ url('/envios/lista') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Búsqueda manual</span>
      </a>
    </div>
    <div class="menu-item">
      <a class="menu-link {{ request()->is('enviosdeticket') ? 'active' : '' }}" href="{{ url('/enviosdeticket') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Búsqueda por ticket</span>
      </a>
    </div>
    @can('ordenes-crear')
    <div class="menu-item">
      <a class="menu-link {{ request()->is('envios/registroconguia') ? 'active' : '' }}" href="{{ url('/envios/registroconguia') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Registro con guía</span>
      </a>
    </div>
    @endcan
  </div>
</div>
			@endcan

			@can('comercios-ver')
			@php
  $inComercios = request()->is('comercio') || request()->is('comercio/crearcomercio');
@endphp

<div data-kt-menu-trigger="click" id="menu-item-comercios" class="menu-item menu-accordion {{ $inComercios ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('home', 'fs-2') !!}</span>
    <span class="menu-title">Gestión de comercios</span>
    <span class="menu-arrow"></span>
  </span>
  <div class="menu-sub menu-sub-accordion">
    @can('comercios-crear')
    <div class="menu-item">
      <a class="menu-link {{ request()->is('comercio/crearcomercio') ? 'active' : '' }}" href="{{ url('/comercio/crearcomercio') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Crear comercio</span>
      </a>
    </div>
    @endcan
    <div class="menu-item">
      <a class="menu-link {{ request()->is('comercio') ? 'active' : '' }}" href="{{ url('/comercio') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Lista de comercio</span>
      </a>
    </div>
  </div>
</div>
			@endcan

			@can('factura-ver')
			@php
  $inFact = request()->is('registro-orden') || request()->is('listapagosticket') ||
            request()->is('entregas') || request()->is('envios/reportepagoticket');
@endphp

<div data-kt-menu-trigger="click" id="menu-item-fact" class="menu-item menu-accordion {{ $inFact ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon"><i class="ki-duotone ki-bill ki-2x" style="font-size: 24px;">
	<span class="path1 "></span>
					<span class="path2 "></span>
					<span class="path3 "></span>
					<span class="path4 "></span>
					<span class="path5 "></span>
					<span class="path6 "></span>
					</i></span>
    <span class="menu-title">Facturación</span>
    <span class="menu-arrow"></span>
  </span>
  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('registro-orden') ? 'active' : '' }}" href="{{ url('/registro-orden') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Recepción de paquete</span>
      </a>
    </div>
    <div class="menu-item">
      <a class="menu-link {{ request()->is('listapagosticket') ? 'active' : '' }}" href="{{ url('/listapagosticket') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Pago por Ticket</span>
      </a>
    </div>
    <div class="menu-item">
      <a class="menu-link {{ request()->is('entregas') ? 'active' : '' }}" href="{{ url('/entregas') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Entrega de paquete</span>
      </a>
    </div>
    <div class="menu-item">
      <a class="menu-link {{ request()->is('envios/reportepagoticket') ? 'active' : '' }}" href="{{ url('/envios/reportepagoticket') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Estado de tickets</span>
      </a>
    </div>
  </div>
</div>

			@php
  $inCaja = request()->is('caja/cajero') || request()->is('caja/jefe');
@endphp

<div data-kt-menu-trigger="click" id="menu-item-caja" class="menu-item menu-accordion {{ $inCaja ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
    <span class="menu-title">Caja</span>
    <span class="menu-arrow"></span>
  </span>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('caja/cajero') ? 'active' : '' }}" href="{{ url('/caja/cajero') }}">
        <span class="menu-bullet"><span class="fas fa-cash-register"></span></span>
        <span class="menu-title">Movimientos de caja</span>
      </a>
    </div>
  </div>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('caja/jefe') ? 'active' : '' }}" href="{{ url('/caja/jefe') }}">
        <span class="menu-bullet"><span class="fas fa-user-alt"></span></span>
        <span class="menu-title">Cuadre de caja</span>
      </a>
    </div>
  </div>
</div>




			@php
  $inReportes = request()->is('envios/listadoticket') || request()->is('envios/reportepago') ||
                request()->is('listadoentregas') || request()->is('stocks/reportedevo');
@endphp

<div data-kt-menu-trigger="click" id="menu-item-reportes" class="menu-item menu-accordion {{ $inReportes ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
    <span class="menu-title">Reportes</span>
    <span class="menu-arrow"></span>
  </span>

  <div class="menu-sub menu-sub-accordion">
    <a class="menu-link {{ request()->is('envios/listadoticket') ? 'active' : '' }}" href="{{ url('/envios/listadoticket') }}">
      <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
      <span class="menu-title">Reporte de recepción</span>
    </a>
  </div>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('envios/reportepago') ? 'active' : '' }}" href="{{ url('/envios/reportepago') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Reporte de pagos</span>
      </a>
    </div>
  </div>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('listadoentregas') ? 'active' : '' }}" href="{{ url('/listadoentregas') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Reporte de entregas</span>
      </a>
    </div>
  </div>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('stocks/reportedevo') ? 'active' : '' }}" href="{{ url('/stocks/reportedevo') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Reporte de devoluciones</span>
      </a>
    </div>
  </div>
</div>



			@endcan
			@can('stock-ver')
			@php
  // SOLO las rutas que son realmente del módulo "Control de stock"
  $stockRoutes = [
    'stocks/seleccionarpunto',
    'stocks/preparacionpunto',
    'stocks/asignar',
    'stocks/cambiar',
    'stocks/asignarrepartidor',
    'stocks/asignarrepartidorcaja',
    'stocks/buscarcaja',
    'stocks/paquetesasignados',
   
    // si "asignar devolución" tiene ruta propia, ponla aquí:
    'stocks/asignar-devolucion',
  ];

  // Rutas que NO deben abrir "Control de stock" (pertenecen a otras secciones)
  $stockExcluded = [
    'stocks/entreganoret',     // Devoluciones
    'stocks/reportedevo',
        // Reportes
    // agrega aquí cualquiera otra bajo /stocks/ que pertenezca a otra sección
  ];

  $inStock  = request()->is($stockRoutes)
            && !request()->is($stockExcluded);

  $inSelec = request()->is(['stocks/seleccionarpunto', 'stocks/preparacionpunto']);
  $inUbic  = request()->is(['stocks/asignar', 'stocks/cambiar']);
  $inAsig  = request()->is([
    'stocks/asignarrepartidor',
    'stocks/asignarrepartidorcaja',
    'stocks/buscarcaja',
    'stocks/paquetesasignados',
    'stocks/asignarestado',
    'stocks/asignar-devolucion',
  ]);
@endphp

<div data-kt-menu-trigger="click"
     id="menu-item-stock"
     class="menu-item menu-accordion {{ $inStock ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
    <span class="menu-title">Control de stock</span>
    <span class="menu-arrow"></span>
  </span>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item menu-accordion {{ $inSelec ? 'here show' : '' }}" data-kt-menu-trigger="click">
      <span class="menu-link py-3">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Selección de paquetería</span>
        <span class="menu-arrow"></span>
      </span>
      <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
          <a href="{{ url('/stocks/seleccionarpunto') }}" class="menu-link py-3 {{ request()->is('stocks/seleccionarpunto') ? 'active' : '' }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Preparación por zona</span>
          </a>
        </div>
        
      </div>
       <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
          <a href="{{ url('/stocks/preparacionpunto') }}" class="menu-link py-3 {{ request()->is('stocks/preparacionpunto') ? 'active' : '' }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Preparación por punto</span>
          </a>
        </div>
        
      </div>
    </div>
  </div>
    <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('stocks/agregarfoto') ? 'active' : '' }}" href="{{ url('stocks/agregarfoto') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Toma de fotografia</span>
      </a>
    </div>
  </div>


  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item menu-accordion {{ $inUbic ? 'here show' : '' }}" data-kt-menu-trigger="click">
      <span class="menu-link py-3">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Ubicaciones</span>
        <span class="menu-arrow"></span>
      </span>
      <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
          <a class="menu-link py-3 {{ request()->is('stocks/asignar') ? 'active' : '' }}" href="{{ url('/stocks/asignar') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Asignar ubicaciones</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link py-3 {{ request()->is('stocks/cambiar') ? 'active' : '' }}" href="{{ url('/stocks/cambiar') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Cambiar ubicaciones</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  @can('stock-editar')
  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item menu-accordion {{ $inAsig ? 'here show' : '' }}" data-kt-menu-trigger="click">
      <span class="menu-link py-3">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Asignación</span>
        <span class="menu-arrow"></span>
      </span>
      <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
          <a class="menu-link py-3 {{ request()->is('stocks/asignarrepartidor') ? 'active' : '' }}" href="{{ url('/stocks/asignarrepartidor') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Asignación de guía</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link py-3 {{ request()->is('stocks/asignarrepartidorcaja') ? 'active' : '' }}" href="{{ url('/stocks/asignarrepartidorcaja') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Asignación de caja</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link py-3 {{ request()->is('stocks/buscarcaja') ? 'active' : '' }}" href="{{ url('/stocks/buscarcaja') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Búsqueda por caja</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link py-3 {{ request()->is('stocks/paquetesasignados') ? 'active' : '' }}" href="{{ url('/stocks/paquetesasignados') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Reporte de repartidor</span>
          </a>
        </div>
        
<!--begin::Menu item
        <div class="menu-item">
          <a class="menu-link py-3 {{ request()->is('stocks/*devolucion*') ? 'active' : '' }}" href="{{ url('/') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Asignar devolución</span>
          </a>
        </div>
-->
      </div>
    </div>
  </div>
  @endcan
</div>
			@endcan

			
			@php
  $inConfig = request()->is('configuraciones/ajustes') || request()->is('caja/ajustes') || request()->is('configuraciones/agencia');
@endphp

<div data-kt-menu-trigger="click" id="menu-item-config" class="menu-item menu-accordion {{ $inConfig ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
    <span class="menu-title">Configuraciones</span>
    <span class="menu-arrow"></span>
  </span>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('configuraciones/ajustes') ? 'active' : '' }}" href="{{ url('/configuraciones/ajustes') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Configuraciones de ruta</span>
      </a>
    </div>
  </div>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('caja/ajustes') ? 'active' : '' }}" href="{{ url('/caja/ajustes') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Configuraciones de caja</span>
      </a>
    </div>
  </div>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('configuraciones/agencia') ? 'active' : '' }}" href="{{ url('/configuraciones/agencia') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Configuraciones de agencia</span>
      </a>
    </div>
  </div>
</div>

			
			@php
  $inDevo = request()->is('stocks/entreganoret') || request()->is('stocks/asignarestado') || request()->is('stocks/cuadrepaquete');   
@endphp

<div data-kt-menu-trigger="click" id="menu-item-devo" class="menu-item menu-accordion {{ $inDevo ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
    <span class="menu-title">Devoluciones</span>
    <span class="menu-arrow"></span>
  </span>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('stocks/entreganoret') ? 'active' : '' }}" href="{{ url('/stocks/entreganoret') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Entregar no retirado</span>
      </a>
    </div>
  </div>

  <div class="menu-sub menu-sub-accordion">
          <a class="menu-link {{ request()->is('stocks/asignarestado') ? 'active' : '' }}" href="{{ url('/stocks/asignarestado') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">No retirados</span>
          </a>
  </div>

  <div class="menu-sub menu-sub-accordion">
          <a class="menu-link {{ request()->is('stocks/cuadrepaquete') ? 'active' : '' }}" href="{{ url('/stocks/cuadrepaquete') }}">
            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            <span class="menu-title">Cuadre de paquetería</span>
          </a>
  </div>



 </div>



			@php
  $inPicking = request()->is('stocks/generarp') || request()->is('stocks/listapi');
@endphp

<div data-kt-menu-trigger="click" id="menu-item-picking" class="menu-item menu-accordion {{ $inPicking ? 'here show' : '' }}">
  <span class="menu-link">
    <span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
    <span class="menu-title">Órdenes de picking</span>
    <span class="menu-arrow"></span>
  </span>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('stocks/generarp') ? 'active' : '' }}" href="{{ url('/stocks/generarp') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Generar Picking</span>
      </a>
    </div>
  </div>

  <div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
      <a class="menu-link {{ request()->is('stocks/listapi') ? 'active' : '' }}" href="{{ url('/stocks/listapi') }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">Lista de picking</span>
      </a>
    </div>
  </div>
</div>










			
		</div>
	</div>
</div>