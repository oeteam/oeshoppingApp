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
Route::get('/backpanel/users', 'Backpanel\UserController@index');
Route::get('/backpanel/user/adduser', 'Backpanel\UserController@adduser');
Route::get('/backpanel/users/submituser', 'Backpanel\UserController@submituser');


