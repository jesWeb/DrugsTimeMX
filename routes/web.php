<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClientesController;
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
    //login
    Route::get('/user/login', [AuthController::class, 'index'])->name('loginAuth');
    //registro
    Route::get('/user/signup', [AuthController::class, 'create'])->name('registerAuth');
   //gu
   Route::post('/user/resgister', [AuthController::class, 'registerCreate'])->name('registerCreate');

   Route::get('/user/activacion', [AuthController::class, 'activacion'])->name('activacion');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
});


// cliente//

Route::prefix('cliente')->group(function () {
    Route::get('/info', [ClientesController::class, 'info'])->name('infoCliente');
    Route::get('/user/login', [AuthController::class, 'index'])->name('loginAuth');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
});

//peticiones para mostrar datos
 //peticiones para mostrar datos
 Route::prefix('peticiones')->group(function () {
    //Cliente
    Route::post('/user/resgister', [AuthController::class, 'registerCreate'])->name('registerCreate');
    Route::post('/user/saveSettingsC', [ClientesController::class, 'saveSettingsC'])->name('saveSettingsC');
    Route::post('/user/perfilC', [ClientesController::class, 'perfilC'])->name('perfilC');

});





