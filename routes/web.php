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
Route::get('admin/pedido','AdministradorController@pedido');
//*********PRODUCTOS***************
Route::get('admin/producto/producto','AdministradorController@producto');
Route::get('admin/producto/nuevoProducto','AdministradorController@nuevoProducto');
Route::post('admin/producto/nuevoProducto', 'ProductoController@crear');
Route::get('admin/producto/editarProducto','AdministradorController@editarProducto');

//*********STOCK***************
Route::get('admin/stock','AdministradorController@stock');
//*********CLIENTES***************
Route::get('admin/cliente/cliente','AdministradorController@cliente');
Route::get('admin/cliente/nuevoCliente','AdministradorController@nuevoCliente');
Route::get('admin/cliente/editarCliente','AdministradorController@editarCliente');
//*********GASTOS***************
Route::get('admin/gasto/gasto','AdministradorController@gasto');
Route::get('admin/gasto/nuevoGasto','AdministradorController@nuevoGasto');
Route::get('admin/gasto/editarGasto','AdministradorController@editarGasto');


Route::get("superlogout",function(){
	Session::flush();
});