<?php

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


Route::get('/customer', function () {
    return view('customer/index');
});

Route::get('/customer/configuration', function () {
    return view('customer/configuration');
});

Route::get('/customer/orders', function () {
    return view('customer/orders');
});

Route::get('/customer/shopcart', function () {
    return view('customer/shopCart');
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

Route::get('/login', function () {
    return view('login/viewlogin');
});

Route::get('/register', function () {
    return view('login/viewregister');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/productos', 'App\Http\Controllers\ProductoController');

Route::resource('/clientes', 'App\Http\Controllers\ClienteController');

Route::get('/search', 'App\Http\Controllers\ProductoController@BuscarProductoPorNombre');

Route::resource('/usuarios', 'App\Http\Controllers\UsuarioController');