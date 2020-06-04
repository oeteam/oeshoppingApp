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

Route::get('backpanel', 'LoginController@index');
Route::get('backpanel/login', 'LoginController@index');
Route::post('backpanel/login/checkLogin', 'LoginController@checkLogin');

// Back Panel Dashboard
Route::get('/backpanel/dashboard', 'Backpanel\DashboardController@dashboard');

// Backpanel Users
Route::get('/backpanel/users', 'Backpanel\UserController@index');
Route::get('/backpanel/user/adduser/{id?}', 'Backpanel\UserController@adduser');
Route::get('/backpanel/users/submituser', 'Backpanel\UserController@submituser');
Route::any('/backpanel/users/userslist', 'Backpanel\UserController@userslist');
Route::get('/backpanel/user/deleteuser/{id}', 'Backpanel\UserController@deleteuser');
Route::get('/backpanel/users/changestatus', 'Backpanel\UserController@changestatus');

// Backpanel suppliers
Route::get('/backpanel/suppliers', 'Backpanel\SupplierController@index');
Route::any('/backpanel/suppliers/supplierslist', 'Backpanel\SupplierController@supplierslist');
Route::get('/backpanel/suppliers/addsupplier/{id?}', 'Backpanel\SupplierController@addsupplier');
Route::get('/backpanel/suppliers/submitsupplier', 'Backpanel\SupplierController@submitsupplier');
Route::get('/backpanel/suppliers/changestatus', 'Backpanel\SupplierController@changestatus');
Route::get('/backpanel/suppliers/deletesupplier/{id}', 'Backpanel\SupplierController@deletesupplier');



