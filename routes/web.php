<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\tb_areasController;
use App\Http\Controllers\tb_empleadosController;
use App\Http\Controllers\tb_relacion_areasController;
use App\Http\Controllers\tb_sueldosController;
use App\Http\Controllers\tb_tipos_empleadosController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('empleados',tb_empleadosController::class);
Route::resource('empleado',tb_areasController::class);
Route::resource('emplead',tb_relacion_areasController::class);
Route::resource('emplea',tb_sueldosController::class);
Route::resource('emple',tb_tipos_empleadosController::class);

Route::get('/edit/{id}', [tb_empleadosController::class, 'edit'])->name('empleados.edit');
Route::get('/create', [tb_empleadosController::class, 'create'])->name('empleados.create');







