<?php

use App\Exports\MedicamentosExport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\medicamentosController;

use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\ReportesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//prefix de auth que es el ogin  agrupar prefix//
Route::prefix('auth')->group(function () {
    Route::get('/user/login', [AuthController::class, 'index'])->name('loginAuth');
    Route::get('/user/signup', [AuthController::class, 'create'])->name('registerAuth');
    Route::post('/user/resgister', [AuthController::class, 'registerCreate'])->name('registerCreate');
    Route::get('/user/activacion', [AuthController::class, 'activacion'])->name('activacion');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::POST('/InicioSession', [AuthController::class, 'Reingreso'])->name('Reingreso');
});


// cliente//

Route::prefix('cliente')->group(function () {
    Route::get('/info', [ClientesController::class, 'info'])->name('infoCliente');
    Route::get('/perfil', [ClientesController::class, 'perfil'])->name('perfilCliente');
    Route::get('/reportes', [ReportesController::class, 'ReporteCliente'])->name('Reporte.export');
    Route::get('/Tureporte', [ReportesController::class, 'Tureporte'])->name('Tureporte');
    Route::get('/reportePDF', [ReportesController::class, 'reportePDF'])->name('reportePDF');
    Route::get('/grafica', [ClientesController::class, 'grafica'])->name('GraficaCliente');
    Route::get('/user/login', [AuthController::class, 'index'])->name('loginAuth');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
});

//peticiones para mostrar datos
Route::prefix('peticiones')->group(function () {
    //Cliente
    Route::post('/user/resgister', [AuthController::class, 'registerCreate'])->name('registerCreate');
    Route::post('/user/saveSettingsC', [ClientesController::class, 'saveSettingsC'])->name('saveSettingsC');
    Route::post('/user/perfilC', [ClientesController::class, 'perfilC'])->name('perfilC');
    Route::get('/user/get/municipios', [ClientesController::class, 'municipios'])->name('getMunicipio');
    Route::get('/graficas/graficaMedicamento', [ClientesController::class, 'graficaMedicamento'])->name('graficaMedicamento');
    Route::get('/graficas/graficaTratamiento', [ClientesController::class, 'graficaTratamiento'])->name('graficaTratamiento');
    Route::get('/graficas/graficaSlider', [ClientesController::class, 'graficaSlider'])->name('graficaSlider');
});


///////////////Cuidador/////////////////
Route::prefix('cuidador')->group(function () {
    Route::get('/view', [CuidadorController::class, 'index'])->name('cuidador');
    Route::get('/create', [CuidadorController::class, 'CAdd'])->name('cuidadorAdd');
    Route::post('/create/cuidador', [CuidadorController::class, 'cuidadorCreate'])->name('cuidadorCreate');
    Route::get('/delate/cuidador/{id}', [CuidadorController::class, 'cuidadordelate'])->name('cuidadordelate');
});
////////Tratamiento//////
Route::prefix('tratamientos')->group(function () {
    Route::get('/view', [TratamientoController::class, 'index'])->name('tratamiento');
    Route::get('/create', [TratamientoController::class, 'TrataC'])->name('TratamientoAdd');
    Route::post('/create/tratamiento', [TratamientoController::class, 'TratamientoCreate'])->name('TratamientoCreate');
    Route::get('/delate/tratamientos/{id}', [TratamientoController::class, 'Tratamientodelate'])->name('TratamientoDelate');
});
/////Medicamento////
Route::prefix('medicamentos')->group(function () {
    Route::get('user/view/medicamentos', [medicamentosController::class, 'viewMedicamento'])->name('viewMedicamento');
    Route::post('delate/medicamentos/{id}', [medicamentosController::class, 'delateMedicamento'])->name('delateMedicamento');
    Route::get('/view/medicamentos', [medicamentosController::class, 'viewMedicamento'])->name('viewMedicamento');
    Route::get('/create', [medicamentosController::class, 'MediAdd'])->name('MediAdd');
    Route::post('/create/medicamento', [medicamentosController::class, 'createMedicamento'])->name('createMedicamento');
   // Route::get('/delate/medicamentos/{id}', [medicamentosController::class, 'eliminarMedi'])->name('eliminarMedi');
});
////MAquina//

Route::prefix('maquina')->group(function () {
    Route::get('/view/maquina', [MaquinaController::class, 'maquinasW'])->name('maquinasW');
    Route::get('/create', [MaquinaController::class, 'MaquiAdd'])->name('MaquiAdd');
    Route::post('/create/maquinas', [MaquinaController::class, ' createMaqui  '])->name('createMaqui');
    Route::get('/delete/maquina/{id}', [MaquinaController::class, 'delateMaquina'])->name('delateMaquina');
});

