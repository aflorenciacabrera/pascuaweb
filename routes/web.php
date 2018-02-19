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
    return view('bienvenido');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Controladores de Vistas


Route::get('bienvenido','AdministradorController@bienvenido');
Route::get('admin/acceso','AdministradorController@acceso');
Route::get('admin/registro','AdministradorController@registro');

Route::get('admin/pedidos','AdministradorController@pedidos');
Route::get('admin/productos','AdministradorController@productos');
Route::get('admin/stock','AdministradorController@stock');
Route::get('admin/clientes','AdministradorController@clientes');
Route::get('admin/gastos','AdministradorController@gastos');

Route::get('inicio','AdministradorController@inicio');



Route::get("superlogout",function(){
	Session::flush();
});