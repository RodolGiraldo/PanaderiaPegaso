<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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



Route::get('/owner', function () {
    return view('owner/salesowner');
});

Route::get('/vendor', function(){
    return view('vendor/index');
});

Route::get('/domiciliary',function(){
    return view('domiciliary/index');
});

Route::get('/domiciliary/order',function(){
    return view('domiciliary/detallepedido');
});

/* Rutas para redireccion de las vistas del admin */
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
//Route::get('/admin/customers', 'App\Http\Controllers\AdminController@viewCustomer');
// ----------------------------------------------------------- //


/* Rutas para redireccion de las vistas del cliente */

Route::get('/customer','App\Http\Controllers\ClienteController@viewIndexCustomer');

Route::get('/customer/configuration', function () {
    return view('customer/configuration');
});

Route::get('/customer/orders', 'App\Http\Controllers\ClienteController@orders');

Route::get('/customer/shopcart', function () {
    return view('customer/shopCart');
});


// ----------------------------------------------------------- //

Route::get('/','App\Http\Controllers\LoginController@index');

Route::post('/login','App\Http\Controllers\LoginController@login');



Route::resource('/productos', 'App\Http\Controllers\ProductoController');

Route::resource('/clientes', 'App\Http\Controllers\ClienteController');

Route::get('/search', 'App\Http\Controllers\ProductoController@BuscarProductoPorNombre');

Route::resource('/usuarios', 'App\Http\Controllers\UsuarioController');

Route::resource('/forgot','App\Http\Controllers\ValidarController');

Route::get('/forgot/reco','App\Http\Controllers\ValidarController@reco');
