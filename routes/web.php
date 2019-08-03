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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('productos', 'ProductoController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('ventas','VentasController');


Route::post('/getBill', "ReporteController@getBill");
Route::get('/facturas', "ReporteController@index");
Route::get('/facturas/listafactura', "ReporteController@getBill");
Route::get('/facturas/usuariosfactura', "ReporteController@getBillbyUser");
Route::get('/facturas/productosfactura', "ReporteController@getBillbyProduct");



//Route::post('/getBillbyProduct', "ReporteController@getBillbyProduct");


