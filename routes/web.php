<?php

use Illuminate\Support\Facades\Route;


Route::get('/products', 'ProductsController@index')->name('list_products');
Route::get('/products/add', 'ProductsController@create')->name('create_products');
Route::post('/products/add', 'ProductsController@store')->name('add_products');
Route::post('/products/remove/{id}', 'ProductsController@destroy')->name('remove_products');
Route::get('/orders/{productId}/add', 'OrdersController@create');