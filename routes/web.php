<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
Route::get('/empleados/crear', function () {
    return view('empleados.crear');
});
Route::get('/comercio/crearcomercio', function () {
    return view('comercio.crearcomercio');
});
/*
Route::get('/envios/envi', function () {
    return view('envios.envi');
});
*/
Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__.'/auth.php';

Route::get('envio', [App\Http\Controllers\EnvioController::class, 'index'] )->name('index') ;
Route::get('envio/indexdigitadofiltro/{id}', [App\Http\Controllers\EnvioController::class, 'indexdigitadofiltro'] )->name('indexdigitadofiltro') ;
Route::get('envio/crear', [App\Http\Controllers\EnvioController::class, 'crearenvio'] )->name('crearenvio') ;
Route::get('envioguardarp', [App\Http\Controllers\EnvioController::class, 'envioguardarp'] )->name('envioguardarp') ;
Route::get('enviopd', [App\Http\Controllers\EnvioController::class, 'enviopd'] )->name('enviopd') ;
Route::get('enviopf', [App\Http\Controllers\EnvioController::class, 'enviopf'] )->name('enviopf') ;
Route::get('envioca', [App\Http\Controllers\EnvioController::class, 'envioca'] )->name('envioca') ;


Route::get('empleado', [App\Http\Controllers\EmpleadoController::class, 'empleado'] )->name('empleado') ;
Route::get('empleados/{id}', [App\Http\Controllers\EmpleadoController::class, 'empleadover'] )->name('empleadover') ;
Route::get('empleados/editar/{id}', [App\Http\Controllers\EmpleadoController::class, 'empleadoeditar'] )->name('empleadoeditar') ;
Route::get('empleadoguardar', [App\Http\Controllers\EmpleadoController::class, 'empleadoguardar'] )->name('empleadoguardar') ;