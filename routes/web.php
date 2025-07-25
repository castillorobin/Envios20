<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
//use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/usuarios/roleview', function () {
    return view('usuarios.roleview');
});
*/



Route::middleware(['auth'])->group(function () {
   Route::get('listapagosticket', [App\Http\Controllers\PagoController::class, 'listaticket'] )->name('listaticket') ;


});

//Spatie
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuario', UsuarioController::class);
});

Route::get('/guardaruser', [App\Http\Controllers\UsuarioController::class, 'guardaru'] )->name('guardaru') ;
Route::get('/guardarol', [App\Http\Controllers\RolController::class, 'guardarol'] )->name('guardarol') ;

Route::get('/usuarios/roleview/{id}', [App\Http\Controllers\RolController::class, 'roleview'] )->name('roleview') ;
Route::get('/usuarios/eliminar/{id}', [App\Http\Controllers\UsuarioController::class, 'eliminaruser'] )->name('eliminaruser') ;
Route::get('/usuarios/eliminartodo/', [App\Http\Controllers\UsuarioController::class, 'eliminartodouser'] )->name('eliminartodouser') ;

Route::get('/roles/eliminando/{id}', [App\Http\Controllers\RolController::class, 'eliminando'] )->name('eliminando') ;


Route::get('/usuarios/view/{id}', [App\Http\Controllers\UsuarioController::class, 'vista'] )->name('vista') ;

Route::get('/editarusuario/{id}', [App\Http\Controllers\UsuarioController::class, 'editarusuario'] )->name('editarusuario') ;

Route::get('usuarios/lista', [App\Http\Controllers\UsuarioController::class, 'index'] )->name('indexuser') ;

Route::get('/usuarios/role', [App\Http\Controllers\RolController::class, 'index'] )->name('indexrol') ;

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/error', function () {
    abort(500);
});
/*
Route::get('/empleados', function () {
    return view('empleados.empleados');
});
*/
/*
Route::get('/empleados/crear', function () {
    return view('empleados.crear');
});
*/



/*
Route::get('/comercio/crearcomercio', function () {
    return view('comercio.crearcomercio');
});
Route::get('/envios/envi', function () {
    return view('envios.envi');
});
*/
Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__.'/auth.php';


Route::get('/envios/detallefoto', function () {
    return view('envios.detallefoto');
});

Route::get('/stocks/asignar', function () {
    $nota = " ";
    return view('stocks.asignar', compact('nota',));
});

Route::get('/stocks/seleccionarpunto', function () {
    $nota = " ";
    return view('ruta.listapuntos', compact('nota'));
});

Route::get('/envios/registroconguia', function () {
    $nota = " ";
    return view('envios.registroconguia', compact('nota'));
});








Route::get('/envios/guiasticket', function () {
    return view('envios.guiasticket');
});


 


Route::get('envio', [App\Http\Controllers\EnvioController::class, 'index'] )->name('index') ;
Route::get('envio/indexdigitadofiltro/{id}', [App\Http\Controllers\EnvioController::class, 'indexdigitadofiltro'] )->name('indexdigitadofiltro') ;
Route::get('envio/crear', [App\Http\Controllers\EnvioController::class, 'crearenvio'] )->name('crearenvio') ;
Route::get('envioguardarp', [App\Http\Controllers\EnvioController::class, 'envioguardarp'] )->name('envioguardarp') ;
Route::get('enviopd', [App\Http\Controllers\EnvioController::class, 'enviopd'] )->name('enviopd') ;
Route::get('envioguardarpd', [App\Http\Controllers\EnvioController::class, 'envioguardarpd'] )->name('envioguardarpd') ;
Route::get('enviopf', [App\Http\Controllers\EnvioController::class, 'enviopf'] )->name('enviopf') ;
Route::get('envioguardarpf', [App\Http\Controllers\EnvioController::class, 'envioguardarpf'] )->name('envioguardarpf') ;
Route::get('envioca', [App\Http\Controllers\EnvioController::class, 'envioca'] )->name('envioca') ;
Route::get('envioguardarca', [App\Http\Controllers\EnvioController::class, 'envioguardarca'] )->name('envioguardarca') ;
Route::get('envios/lista', [App\Http\Controllers\EnvioController::class, 'envioli'] )->name('envioli') ;
Route::get('envios/conguia', [App\Http\Controllers\EnvioController::class, 'conguia'] )->name('conguia') ;
Route::get('envios/guardarconguia/{id}', [App\Http\Controllers\EnvioController::class, 'guardarconguia'] )->name('guardarconguia') ;
Route::get('envios/cancelar/{id}', [App\Http\Controllers\EnvioController::class, 'cancelar'] )->name('cancelar') ;


Route::get('empleado', [App\Http\Controllers\EmpleadoController::class, 'empleado'] )->name('empleado') ;
Route::get('empleados/{id}', [App\Http\Controllers\EmpleadoController::class, 'empleadover'] )->name('empleadover') ;
Route::get('empleados/editar/{id}', [App\Http\Controllers\EmpleadoController::class, 'empleadoeditar'] )->name('empleadoeditar') ;
Route::get('empleadoguardar', [App\Http\Controllers\EmpleadoController::class, 'empleadoguardar'] )->name('empleadoguardar') ;
Route::get('empleado/crear', [App\Http\Controllers\EmpleadoController::class, 'crear'] )->name('crear') ;
Route::get('empleado/update/{id}', [App\Http\Controllers\EmpleadoController::class, 'empleadoupdate'] )->name('empleadoupdate') ;
Route::get('empleado/eliminar/{id}', [App\Http\Controllers\EmpleadoController::class, 'eliminar'])->name('empleado.eliminar');


Route::get('/faltas/listafaltas', function () {
    return view('faltas.listafaltas');
});




/*
Route::get('/listapagos', function () {
    return view('envios.pagoslista');
});


Route::get('/registro-orden', function () {
    return view('envios.registroorden');
});
*/

//facturacion - Cobro
Route::get('registro-orden', [App\Http\Controllers\CobroController::class, 'index'] )->name('indexcobro') ;
Route::get('cobro/agregar/', [App\Http\Controllers\CobroController::class, 'agregar'] )->name('agregarco') ;
Route::get('cobro/limpiar', [App\Http\Controllers\CobroController::class, 'limpiar'] )->name('limpiarco') ;
Route::get('cobro/ticket', [App\Http\Controllers\CobroController::class, 'ticket'] )->name('ticketco') ;
Route::get('cobro/ticketcabeza', [App\Http\Controllers\CobroController::class, 'ticketcabeza'] )->name('ticketcabeza') ;
Route::get('cobro/ticketpartes', [App\Http\Controllers\CobroController::class, 'ticketpartes'] )->name('ticketpartes') ;
Route::get('cobro/agregarcomercio', [App\Http\Controllers\CobroController::class, 'agregarcomercio'] )->name('agregarcomercio') ;
Route::get('cobro/limpieza/{tipo11}/{ticketactual}', [App\Http\Controllers\CobroController::class, 'limpieza'] )->name('limpieza') ;
Route::get('cobro/ticketlistado/{id}', [App\Http\Controllers\CobroController::class, 'ticketlistado'] )->name('ticketlistado') ;

Route::get('cobro/imprimir', [App\Http\Controllers\CobroController::class, 'imprimir'] )->name('imprimirco') ;

//Comercios
Route::get('comercio', [App\Http\Controllers\ComercioController::class, 'index'] )->name('indexco') ;
Route::get('comercio/crearcomercio', [App\Http\Controllers\ComercioController::class, 'create'] )->name('createco') ;
Route::get('comercio/guardar', [App\Http\Controllers\ComercioController::class, 'store'] )->name('storeco') ;
Route::get('comercio/vercomercio/{id}', [App\Http\Controllers\ComercioController::class, 'vercomercio'] )->name('vercomercio') ;
Route::get('comercio/editando', [App\Http\Controllers\ComercioController::class, 'editando'] )->name('editandoco') ;
 
//facturacion - Pago
Route::get('listapagos', [App\Http\Controllers\PagoController::class, 'index'] )->name('indexpago') ;
Route::get('pago/connombre', [App\Http\Controllers\PagoController::class, 'connombre'] )->name('connombre') ;

Route::get('pago/conticket', [App\Http\Controllers\PagoController::class, 'conticket'] )->name('conticket') ;
Route::get('pago/filtrandonombre', [App\Http\Controllers\PagoController::class, 'filtrandonombre'] )->name('filtrandonombre') ;
Route::get('pago/filtrandonombre2', [App\Http\Controllers\PagoController::class, 'filtrandonombre2'] )->name('filtrandonombre2') ;
Route::get('enviosdeticket', [App\Http\Controllers\PagoController::class, 'enviosdeticket'] )->name('enviosdeticket') ;
Route::get('enviosdeticketdatos', [App\Http\Controllers\PagoController::class, 'enviosdeticketdatos'] )->name('enviosdeticketdatos') ;
Route::get('enviosdeticketfiltro', [App\Http\Controllers\PagoController::class, 'enviosdeticketfiltro'] )->name('enviosdeticketfiltro') ;
Route::get('/envios/limpiarticket/{comercio}', [App\Http\Controllers\PagoController::class, 'limpiarticket'] )->name('limpiarticket') ;

Route::get('pago/pagoticket/', [App\Http\Controllers\PagoController::class, 'pagoticket'] )->name('pagoticket') ;
Route::get('pago/pagoticket2/', [App\Http\Controllers\PagoController::class, 'pagoticket2'] )->name('pagoticket2') ;
Route::get('pago/exportarticket/{ticketc}', [App\Http\Controllers\PagoController::class, 'exportarticket'] )->name('exportarticket') ;
Route::get('pago/exportarcomercio/{comercio}', [App\Http\Controllers\PagoController::class, 'exportarcomercio'] )->name('exportarcomercio') ;

Route::get('pago/exportarticketrepo/{ticketc}', [App\Http\Controllers\PagoController::class, 'exportarticketrepo'] )->name('exportarticketrepo') ;
Route::get('pago/exportarticketentre/{ticketc}', [App\Http\Controllers\PagoController::class, 'exportarticketentre'] )->name('exportarticketentre') ;

//Administracion Tickets
Route::get('/envios/listadoticket', [App\Http\Controllers\PagoController::class, 'listadoticket'] )->name('listadoticket') ;
Route::get('/envios/ticketdatos', [App\Http\Controllers\PagoController::class, 'ticketdatos'] )->name('ticketdatos') ;
Route::get('/envios/detalleticket/{id}', [App\Http\Controllers\PagoController::class, 'detalleticket'] )->name('detalleticket') ;
Route::get('/envios/personalizadoticket/{id}', [App\Http\Controllers\PagoController::class, 'personalizadoticket'] )->name('personalizadoticket') ;
Route::get('/envios/puntoticket/{id}', [App\Http\Controllers\PagoController::class, 'puntoticket'] )->name('puntoticket') ;
Route::get('/envios/departamentalticket/{id}', [App\Http\Controllers\PagoController::class, 'departamentalticket'] )->name('departamentalticket') ;
Route::get('/envios/casilleroticket/{id}', [App\Http\Controllers\PagoController::class, 'casilleroticket'] )->name('casilleroticket') ;
Route::get('/envios/filtrandoenvios', [App\Http\Controllers\EnvioController::class, 'filtrandoenvios'] )->name('filtrandoenvioss') ;
Route::get('/envios/filtrandoenvios2', [App\Http\Controllers\EnvioController::class, 'filtrandoenvios2'] )->name('filtrandoenvioss2') ;
Route::get('/envios/detalle/{id}', [App\Http\Controllers\EnvioController::class, 'detalle'] )->name('detalleenvioss') ;
Route::get('/envios/editardetalle/{id}', [App\Http\Controllers\EnvioController::class, 'editardetalle'] )->name('editardetalle') ;
Route::get('/envios/detalleeditando', [App\Http\Controllers\EnvioController::class, 'detalleeditando'] )->name('detalleeditando') ;
Route::get('/envios/limpiarfiltro', [App\Http\Controllers\EnvioController::class, 'limpiarfiltro'] )->name('limpiarfiltro') ;

//Reportes
Route::get('/envios/reporteganancias', [App\Http\Controllers\EnvioController::class, 'reporteganancias'] )->name('reporteganancias') ;
Route::get('/envios/reportegananciasdatos', [App\Http\Controllers\EnvioController::class, 'reportegananciasdatos'] )->name('reportegananciasdatos') ;

Route::get('/envios/reporteingresos', [App\Http\Controllers\EnvioController::class, 'reporteingresos'] )->name('reporteingresos') ;
Route::get('/envios/reporteingresosdatos', [App\Http\Controllers\EnvioController::class, 'reporteingresosdatos'] )->name('reporteingresosdatos') ;

Route::get('/envios/reportepago', [App\Http\Controllers\PagoController::class, 'reportepago'] )->name('reportepago') ;
Route::get('/envios/rpagodatos', [App\Http\Controllers\PagoController::class, 'rpagodatos'] )->name('rpagodatos') ;
Route::get('/envios/lisdopagosdatos/{id}', [App\Http\Controllers\PagoController::class, 'lisdopagosdatos'] )->name('lisdopagosdatos') ;
Route::get('/envios/lisdoentregadatos/{id}', [App\Http\Controllers\PagoController::class, 'lisdoentregadatos'] )->name('lisdoentregadatos') ;

Route::get('/envios/reportepagoticket', [App\Http\Controllers\PagoController::class, 'reportepagoticket'] )->name('reportepagoticket') ;
Route::get('/envios/rpagodatosticket', [App\Http\Controllers\PagoController::class, 'rpagodatosticket'] )->name('rpagodatosticket') ;
Route::get('/envios/lisdopagosdatosticket/{id}', [App\Http\Controllers\PagoController::class, 'lisdopagosdatosticket'] )->name('lisdopagosdatosticket') ;
Route::post('/envios/pagotodo/', [App\Http\Controllers\PagoController::class, 'pagotodo'] )->name('pagotodo') ;
/*
envios/detalleeditando

Route::get('/envios/editardetalle', function () {
    return view('envios.editardetalle');
});

Route::get('/envios/detalle', function () {
    return view('envios.detalle');
});

*/

//Entregas
Route::get('entregas', [App\Http\Controllers\EntregaController::class, 'index'] )->name('indexentre') ;
Route::get('/entrega/agregar', [App\Http\Controllers\EntregaController::class, 'agregar'] )->name('agregarentre') ;
Route::get('/entrega/agregarparte', [App\Http\Controllers\EntregaController::class, 'agregarparte'] )->name('agregarparteentre') ;
Route::get('/entrega/limpiar/{id}', [App\Http\Controllers\EntregaController::class, 'limpiar'] )->name('limpiar') ;
Route::get('/entrega/ticketentrega', [App\Http\Controllers\EntregaController::class, 'ticketentrega'] )->name('ticketentrega') ;
Route::get('/listadoentregas', [App\Http\Controllers\EntregaController::class, 'listadoentregas'] )->name('listadoentregas') ;
Route::get('/envios/entregadatos', [App\Http\Controllers\EntregaController::class, 'entregadatos'] )->name('entregadatos') ;

//Stock
Route::get('/stocks/seleccionarzona', [App\Http\Controllers\StockController::class, 'index'] )->name('indexstock') ;
Route::get('/stocks/zonadatos', [App\Http\Controllers\StockController::class, 'zonadatos'] )->name('zonadatos') ;
Route::get('/stocks/puntodatos', [App\Http\Controllers\StockController::class, 'puntodatos'] )->name('puntodatos') ;
Route::get('/stocks/agregarguia', [App\Http\Controllers\StockController::class, 'agregarguia'] )->name('agregarguia') ;
Route::get('/stocks/agregarmasguia', [App\Http\Controllers\StockController::class, 'agregarmasguia'] )->name('agregarmasguia') ;
Route::get('/stocks/guardarasignar', [App\Http\Controllers\StockController::class, 'guardarasignar'] )->name('guardarasignar') ;
Route::get('/stocks/cambiar', [App\Http\Controllers\StockController::class, 'cambiar'] )->name('cambiar') ;
Route::get('/stocks/cambiarguia', [App\Http\Controllers\StockController::class, 'cambiarguia'] )->name('cambiarguia') ;
Route::get('/stocks/agregarmascambiarguia', [App\Http\Controllers\StockController::class, 'agregarmascambiarguia'] )->name('agregarmascambiarguia') ;
Route::get('/stocks/guardarcambiarguia', [App\Http\Controllers\StockController::class, 'guardarcambiarguia'] )->name('guardarcambiarguia');
Route::get('/stocks/asignarrepartidor', [App\Http\Controllers\StockController::class, 'asignarrepartidor'] )->name('asignarrepartidor');
Route::get('/stocks/agregarrepartidor', [App\Http\Controllers\StockController::class, 'agregarrepartidor'] )->name('agregarrepartidor');
Route::get('/stocks/agregarrepartidorlote', [App\Http\Controllers\StockController::class, 'agregarrepartidorlote'] )->name('agregarrepartidorlote');

Route::get('/stocks/asignarrepartidorcaja', [App\Http\Controllers\StockController::class, 'asignarrepartidorcaja'] )->name('asignarrepartidorcaja');
Route::get('/stocks/agregarrepartidorcaja', [App\Http\Controllers\StockController::class, 'agregarrepartidorcaja'] )->name('agregarrepartidorcaja');

Route::get('/stocks/asignarestado', [App\Http\Controllers\StockController::class, 'asignarestado'] )->name('asignarestado');
Route::get('/stocks/asignarestadodatos', [App\Http\Controllers\StockController::class, 'asignarestadodatos'] )->name('asignarestadodatos');
Route::get('/stocks/agregarestado', [App\Http\Controllers\StockController::class, 'agregarestado'] )->name('agregarestado');
Route::get('/stocks/guardarestado', [App\Http\Controllers\StockController::class, 'guardarestado'] )->name('guardarestado');
Route::get('/stocks/buscarcaja', [App\Http\Controllers\StockController::class, 'buscarcaja'] )->name('buscarcaja');
Route::get('/stocks/buscarcajadatos', [App\Http\Controllers\StockController::class, 'buscarcajadatos'] )->name('buscarcajadatos');

Route::get('/stocks/paquetesasignados', [App\Http\Controllers\StockController::class, 'paquetesasignados'] )->name('paquetesasignados');
Route::get('/stocks/paquetesasignadosdatos', [App\Http\Controllers\StockController::class, 'paquetesasignadosdatos'] )->name('paquetesasignadosdatos');

//Devoluciones
Route::get('/stocks/entreganoret', [App\Http\Controllers\StockController::class, 'entreganoret'] )->name('entreganoret');
Route::get('/stocks/entreganoretdatos', [App\Http\Controllers\StockController::class, 'entreganoretdatos'] )->name('entreganoretdatos');
Route::get('/stocks/guardarentrega', [App\Http\Controllers\StockController::class, 'guardarentrega'] )->name('guardarentrega');
Route::get('/stocks/reportedevo', [App\Http\Controllers\StockController::class, 'reportedevo'] )->name('reportedevo');
Route::get('/stocks/reportedevodatos', [App\Http\Controllers\StockController::class, 'reportedevodatos'] )->name('reportedevodatos');
Route::get('/stocks/filtrarnotre', [App\Http\Controllers\StockController::class, 'filtrarnotre'] )->name('filtrarnotre');

//Picking
Route::get('/stocks/generarp', [App\Http\Controllers\StockController::class, 'generarp'] )->name('generarp');
Route::get('/stocks/generarpdatos', [App\Http\Controllers\StockController::class, 'generarpdatos'] )->name('generarpdatos');
Route::get('/stocks/guardarreenvio', [App\Http\Controllers\StockController::class, 'guardarreenvio'] )->name('guardarreenvio');
Route::get('/stocks/guardardevol', [App\Http\Controllers\StockController::class, 'guardardevol'] )->name('guardardevol');

Route::get('/stocks/listapi', [App\Http\Controllers\StockController::class, 'listapi'] )->name('listapi');

Route::get('/stocks/detallepick/{id}', [App\Http\Controllers\StockController::class, 'detallepick'] )->name('detallepick');
Route::get('/stocks/realizado/{id}', [App\Http\Controllers\StockController::class, 'realizado'] )->name('realizado');
Route::get('/stocks/filtrarpicking', [App\Http\Controllers\StockController::class, 'filtrarpicking'] )->name('filtrarpicking');


//Rutas
Route::get('/configuraciones/ajustes', [App\Http\Controllers\RutaController::class, 'index'] )->name('indexruta') ;
Route::get('/ruta/agregar', [App\Http\Controllers\RutaController::class, 'agregar'] )->name('agregarruta') ;
Route::get('/stocks/guardarasignarrepartidor', [App\Http\Controllers\StockController::class, 'guardarasignarrepartidor'] )->name('guardarasignarrepartidor');
Route::get('/stocks/guardarasignarrepartidorcaja', [App\Http\Controllers\StockController::class, 'guardarasignarrepartidorcaja'] )->name('guardarasignarrepartidorcaja');

Route::get('/stocks/agregarfoto', [App\Http\Controllers\StockController::class, 'agregarfoto'] )->name('aagregarfoto');
Route::get('/stocks/agregarguiafoto', [App\Http\Controllers\StockController::class, 'agregarguiafoto'] )->name('agregarguiafoto');
Route::get('/stocks/guardarfoto', [App\Http\Controllers\StockController::class, 'guardarfoto'] )->name('aguardarfoto');
Route::get('/guardandofoto', [App\Http\Controllers\StockController::class, 'guardandofoto'] )->name('guardandofoto');


Route::get('/ruta/editar/{id}', [App\Http\Controllers\RutaController::class, 'editarruta'] )->name('editarruta') ;
Route::get('/ruta/editandoruta', [App\Http\Controllers\RutaController::class, 'editandoruta'] )->name('editandoruta') ;
Route::get('/ruta/eliminar/{id}', [App\Http\Controllers\RutaController::class, 'eliminarruta'] )->name('eliminarruta') ;



//Caja
Route::get('/caja/cajero', [App\Http\Controllers\CajaController::class, 'cajero'] )->name('cajero') ;
Route::get('/caja/jefe', [App\Http\Controllers\CajaController::class, 'jefe'] )->name('jefe') ;
Route::get('/caja/guardar', [App\Http\Controllers\CajaController::class, 'store'])->name('caja.store');
Route::get('/caja/listado/{id}', [App\Http\Controllers\CajaController::class, 'listado'])->name('caja.listado');
Route::get('/caja/listadofiltro', [App\Http\Controllers\CajaController::class, 'listadofiltro'])->name('caja.listadofiltro');
Route::get('/caja/ajustes', [App\Http\Controllers\CajaController::class, 'ajustes'] )->name('ajustes') ;
Route::get('/caja/guardarconcepto', [App\Http\Controllers\CajaController::class, 'guardarconcepto'] )->name('guardarconcepto') ;

Route::get('/caja/editar/{id}', [App\Http\Controllers\CajaController::class, 'editar'])->name('caja.editar');
Route::get('/caja/eliminar/{id}', [App\Http\Controllers\CajaController::class, 'eliminar'])->name('caja.eliminar');
Route::get('/caja/editandoconcepto', [App\Http\Controllers\CajaController::class, 'editandoconcepto'])->name('caja.editandoconcepto');
/*

Rutas 
Route::get('/configuraciones/ajustes', function () {
    return view('configuraciones.ajustes');
});

Stock
Route::get('/stocks/seleccionarzona', function () {
    return view('stocks.seleccionarzona');
});



***************

Route::get('/entregas', function () {
    return view('envios.entregas');
});
Route::get('/envios/casilleroticket', function () {
    return view('envios.casilleroticket');
});
Route::get('/envios/departamentalticket', function () {
    return view('envios.departamentalticket');
});

Route::get('/envios/puntoticket', function () {
    return view('envios.puntoticket');
});


Route::get('/envios/personalizadoticket', function () {
    return view('envios.personalizadoticket');
});

Route::get('/envios/detalleticket', function () {
    return view('envios.detalleticket');
});

Route::get('/envios/listadoticket', function () {
    return view('envios.listadoticket');
});
*/

/*

Route::get('/comercio', function () {
    return view('comercio.index');
});
Route::get('/usuarios/lista', function () {
    return view('usuarios.usuariolista');
});

Route::get('/usuarios/view', function () {
    return view('usuarios.usuerview');
});
*/



