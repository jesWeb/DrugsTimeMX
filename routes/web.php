<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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
    Route::get('/user/signup', [AuthController::class, 'create'])->name('registerAuth');
    Route::get('/user/login', [AuthController::class, 'index'])->name('loginAuth');
    Route::get('/user/activacion', [AuthController::class, 'activacion'])->name('activacion');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
});
// cliente//
Route::prefix('cliente')->group(function () {

});

//peticiones para mostrar datos
Route::prefix('peticiones')->group(function () {
    //Cliente
    Route::post('/user/resgister', [AuthController::class, 'registerCreate'])->name('registerCreate');
    Route::post('/user/saveSettingsC', [ClientesController::class, 'saveSettingsC'])->name('saveSettingsC');
    Route::post('/user/perfilC', [ClientesController::class, 'perfilC'])->name('perfilC');

});

