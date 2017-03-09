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

/************** Routes ********************/

Route::get('/','DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('login', 'Auth\LoginController@doLogin');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/change-password', 'UserController@showPasswordResetForm')->name("change-password");

Route::post('/update-password', 'UserController@resetPassword')->name('update-password');;

Route::resource('plots', 'PlotsController');
