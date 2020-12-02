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


Route::get('/','App\Http\Controllers\LoginController@index');

Route::get('/register','App\Http\Controllers\LoginController@viewregister');

Route::post('/login','App\Http\Controllers\LoginController@login');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');

Route::get('/admincustomers', function () {
    return view('admin/customersadmin/indexcustomers');
});

Route::get('/adminusers', function () {
    return view('admin/useradmin/indexuser');
});
Route::get('/adminproducts', function () {
    return view('admin/productsadmin/indexproducts');
});
Route::get('/adminsales', function () {
    return view('admin/salesadmin/indexsales');
});

Route::get('/adminedituser', function () {
    return view('admin/useradmin/edituser');
});

Route::get('/admineditproduct', function () {
    return view('admin/productsadmin/editproduct');
});

Route::get('/admineditsale', function () {
    return view('admin/salesadmin/editsale');
});

Route::get('/admincreateuser', function () {
    return view('admin/useradmin/createuser');
});

Route::get('/admincreateproduct', function () {
    return view('admin/productsadmin/createproduct');
});

Route::get('/adminowner', function () {
    return view('owner/salesowner');
});