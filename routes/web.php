<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

//Route::get('/', function () {
    //return view('welcome');
//});

/*Route::post('/','EmpleadoController@agEmp')->name('verEmp');

Route::get('/verEmp','EmpleadoController@verE');
Route::post('/verEmp','EmpleadoController@destroy');

Route::get('/empleados','EmpleadoController@index');

Route::get('/empleados/create', 'EmpleadoController@create');
Route::post('/empleados', 'EmpleadoController@create');*/

Route::resource('empleados', 'EmpleadoController');

Route::resource('pacientes', 'PacienteController');

Route::resource('fichas', 'FichaController');