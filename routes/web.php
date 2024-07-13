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
*/

//Spatie
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuario', UsuarioController::class);
});

Route::get('/guardaruser', [App\Http\Controllers\UsuarioController::class, 'guardaru'] )->name('guardaru') ;
Route::get('/guardarol', [App\Http\Controllers\RolController::class, 'guardarol'] )->name('guardarol') ;

Route::get('/usuarios/view/{id}', [App\Http\Controllers\UsuarioController::class, 'vista'] )->name('vista') ;

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
Route::get('/envios/detalle', function () {
    return view('envios.detalle');
});
Route::get('/envios/editardetalle', function () {
    return view('envios.editardetalle');
});
Route::get('/envios/detallefoto', function () {
    return view('envios.detallefoto');
});

Route::get('/stocks/asignar', function () {
    return view('stocks.asignar');
});
Route::get('/stocks/seleccionarzona', function () {
    return view('stocks.seleccionarzona');
});
Route::get('/stocks/seleccionarpunto', function () {
    return view('stocks.seleccionarpunto');
});
Route::get('/configuraciones/ajustes', function () {
    return view('configuraciones.ajustes');
});
Route::get('/envios/registroconguia', function () {
    return view('envios.registroconguia');
});
Route::get('/envios/listadoticket', function () {
    return view('envios.listadoticket');
});
Route::get('/envios/detalleticket', function () {
    return view('envios.detalleticket');
});
Route::get('/envios/personalizadoticket', function () {
    return view('envios.personalizadoticket');
});
Route::get('/envios/puntoticket', function () {
    return view('envios.puntoticket');
});

Route::get('/envios/casilleroticket', function () {
    return view('envios.casilleroticket');
});

Route::get('/envios/departamentalticket', function () {
    return view('envios.departamentalticket');
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

Route::get('/entregas', function () {
    return view('envios.entregas');
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


Route::get('cobro/imprimir', [App\Http\Controllers\CobroController::class, 'imprimir'] )->name('imprimirco') ;

//Comercios
Route::get('comercio', [App\Http\Controllers\ComercioController::class, 'index'] )->name('indexco') ;
Route::get('comercio/crearcomercio', [App\Http\Controllers\ComercioController::class, 'create'] )->name('createco') ;
Route::get('comercio/guardar', [App\Http\Controllers\ComercioController::class, 'store'] )->name('storeco') ;

//facturacion - Pago
Route::get('listapagos', [App\Http\Controllers\PagoController::class, 'index'] )->name('indexpago') ;
Route::get('pago/connombre', [App\Http\Controllers\PagoController::class, 'connombre'] )->name('connombre') ;



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
Route::get('/usuarios/roleview', function () {
    return view('usuarios.roleview');
});


