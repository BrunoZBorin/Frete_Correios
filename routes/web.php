<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){return view('welcome');});

Route::get('/products', 'ProductsController@index')->name('list_products');
Route::get('/products/add', 'ProductsController@create')->name('create_products');
Route::post('/products/add', 'ProductsController@store')->name('add_products');
Route::post('/products/remove/{id}', 'ProductsController@destroy');
Route::get('/products/{id}/edit', 'ProductsController@edit');
Route::post("/products/update", 'ProductsController@update');

Route::get('/orders/{productId}/add', 'OrdersController@create');
Route::get('/orders', 'OrdersController@index')->name('list_orders');
Route::post('/orders/{productId}/add', 'OrdersController@store');
Route::post('/orders/remove/{id}', 'OrdersController@destroy');
Route::get('/orders/{id}/edit', 'OrdersController@edit');
Route::post('/orders/update', 'OrdersController@update');

Route::get('/quotations', 'QuotationsController@index')->name('list_quotations');
Route::get('/quotations/{orderId}/add', 'QuotationsController@create');
Route::post('/quotations/{productId}/add', 'QuotationsController@store');
Route::get('/quotations/{id}/edit', 'QuotationsController@edit');
Route::post('/quotations/update', 'QuotationsController@update');

Route::post('/quotations/{productId}/calculate', 'QuotationsController@calculate');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
