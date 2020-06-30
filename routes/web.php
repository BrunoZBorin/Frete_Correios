<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){return view('welcome');});
Route::get('/teste', function(){return view('teste');});

Route::get('/products', 'ProductsController@index')->name('list_products');
Route::get('/products/add', 'ProductsController@create')->name('create_products');
Route::post('/products/add', 'ProductsController@store')->name('add_products');
Route::post('/products/remove/{id}', 'ProductsController@destroy');

Route::get('/orders/{productId}/add', 'OrdersController@create');
Route::get('/orders', 'OrdersController@index')->name('list_orders');
Route::post('/orders/{productId}/add', 'OrdersController@store');
Route::post('/orders/remove/{id}', 'OrdersController@destroy');

Route::get('/quotations/{orderId}/add', 'QuotationsController@create');
Route::post('/quotations/{productId}/add', 'QuotationsController@store');
Route::post('/quotations/{productId}/calculate', 'QuotationsController@calculate');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
