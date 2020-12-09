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
    return view('owner/salesowner',[
        'pedidos' => DB::select("select pe.\"idPedido\",pe.\"direccionPedido\",cl.\"nombreCliente\",pepo.\"cantidad\",es.\"nombreEstado\",pepo.\"precioTotal\",pro.\"nombreProducto\",es.\"nombreEstado\"
        FROM pedidos pe 
            INNER JOIN pedido_productos pepo
                ON pe.\"idPedido\" = pepo.\"idPedido\"
         INNER JOIN productos pro
             ON pro.\"codigoProducto\" = pepo.\"codigoProducto\"
         INNER JOIN estado_pedidos espe
             ON espe.\"idPedido\" = pe.\"idPedido\" 
         INNER JOIN estados es
             ON es.\"codigoEstado\" = espe.\"codigoEstado\"
         INNER JOIN clientes cl
             ON cl.\"idCliente\" = pe.\"idCliente\"
         ")
    ]);
});

Route::get('/vendor', function(){
    return view('vendor/index');
});

Route::get('/domiciliary',function(){
    return view('domiciliary/index',[
        'pedidos' => DB::select("select pe.\"idPedido\",pe.\"direccionPedido\",cl.\"nombreCliente\",pepo.\"cantidad\",es.\"nombreEstado\",pepo.\"precioTotal\",pro.\"nombreProducto\",es.\"nombreEstado\"
        FROM pedidos pe 
            INNER JOIN pedido_productos pepo
                ON pe.\"idPedido\" = pepo.\"idPedido\"
         INNER JOIN productos pro
             ON pro.\"codigoProducto\" = pepo.\"codigoProducto\"
         INNER JOIN estado_pedidos espe
             ON espe.\"idPedido\" = pe.\"idPedido\" 
         INNER JOIN estados es
             ON es.\"codigoEstado\" = espe.\"codigoEstado\"
         INNER JOIN clientes cl
             ON cl.\"idCliente\" = pe.\"idCliente\"
         where espe.\"codigoEstado\" = 1 or espe.\"codigoEstado\" = 2")
   ]);
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

//Rutas para el carrito

Route::post('/cart-add','App\Http\Controllers\CarritoController@add');
Route::get('/cart-checkout','App\Http\Controllers\CarritoController@cart');

Route::post('/cart-clear','App\Http\Controllers\CarritoController@clear');
Route::post('/cart-removeitem','App\Http\Controllers\CarritoController@removeitem');

Route::get('/customer/orders/pay', 'App\Http\Controllers\CarritoController@viewPay');
Route::post('/customer/orders/pay', 'App\Http\Controllers\CarritoController@pay');
// -----------------------------------------------------------//

Route::get('/','App\Http\Controllers\LoginController@index');

Route::post('/login','App\Http\Controllers\LoginController@login');



Route::resource('/productos', 'App\Http\Controllers\ProductoController');

Route::resource('/clientes', 'App\Http\Controllers\ClienteController');

Route::get('admin/customer/search', 'App\Http\Controllers\ProductoController@BuscarProductoPorNombre');

Route::resource('/usuarios', 'App\Http\Controllers\UsuarioController');

Route::resource('/forgot','App\Http\Controllers\ValidarController');

Route::get('/forgot/reco','App\Http\Controllers\ValidarController@reco');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
