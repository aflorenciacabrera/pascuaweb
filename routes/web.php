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

//*********INICIO Y BIENVENIDA***************
Route::get('bienvenido','AdministradorController@bienvenido');
Route::get('inicio','AdministradorController@inicio');
//*********ACCESOS Y REGISTRO***************
Route::get('admin/acceso','AdministradorController@acceso');
Route::get('admin/registro','AdministradorController@registro');

//*********PEDIDOS***************
Route::get('admin/pedidos','AdministradorController@pedidos');
//*********PRODUCTOS***************
Route::get('admin/productos/productos','AdministradorController@productos');
Route::get('admin/productos/nuevoProductos','AdministradorController@nuevoProductos');
Route::post('admin/productos/productos', 'ProductoController@crear');
//*********STOCK***************
Route::get('admin/stock','AdministradorController@stock');
//*********CLIENTES***************
Route::get('admin/clientes','AdministradorController@clientes');
//*********GASTOS***************
Route::get('admin/gastos','AdministradorController@gastos');




Route::get("superlogout",function(){
	Session::flush();
});