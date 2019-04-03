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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/profile', 'ProfileController');
Route::resource('/product', 'ProductController');
Route::resource('/order', 'OrderController');


// admin
Route::get('panel-admin','admin\AdminController@index')->name('panel-admin');

// Route::get('admin-product','admin\AdminController@index')->name('panel-admin');
