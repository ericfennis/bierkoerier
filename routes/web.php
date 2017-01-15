<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/products', 'ProductsController@index')->name('products');

Route::get('/products/{id}', 'ProductsController@show')->name('show-product');

Route::get('/products/new', 'ProductsController@create')->name('create-product');
Route::post('/products/new', 'ProductsController@store');

Route::get('/products/{id}/edit', 'ProductsController@edit')->name('edit-product');
Route::put('/products/{id}/edit', 'ProductsController@update');

Route::get('/products/{id}/delete', 'ProductsController@delete')->name('delete-product');
Route::delete('/products/{id}/delete', 'ProductsController@destroy')->name('delete-product');

Route::get('/orders/new', 'OrdersController@create');
Route::post('/orders/new', 'OrdersController@store');