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
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
	Route::get('/', 'AdminController@index')->name('home.index');
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');
	Route::resource('brand', 'BrandController');
});
