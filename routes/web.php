<?php

use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\MunicipiosController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('departamentos',DepartamentosController::class);
Route::resource('municipios',MunicipiosController::class);
