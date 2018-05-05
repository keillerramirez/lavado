<?php

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
    return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('clientes', 'ClientesController');

Route::resource('vehiculos', 'VehiculosController');

Route::resource('tipoLavados', 'Tipo_lavadosController');

Route::resource('tipoLavados', 'Tipo_lavadosController');

Route::resource('tipoVehiculos', 'Tipo_VehiculosController');