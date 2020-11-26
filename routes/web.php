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

Route::get('/login', function () {
    return view('login/viewlogin');
});

Route::get('/register', function () {
    return view('login/viewregister');
});

Route::get('/admin', function () {
    return view('admin/index');
});

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