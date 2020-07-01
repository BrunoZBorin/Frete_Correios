<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){return view('welcome');});

Route::get('/products', 'ProductsController@index')->name('list_products');//lista produtos
Route::get('/products/add', 'ProductsController@create')->name('create_products');//criação da produto
Route::post('/products/add', 'ProductsController@store')->name('add_products');//salva a produto com os validates
Route::post('/products/remove/{id}', 'ProductsController@destroy');//deleta o produto e seus devidos pedidos e cotações
Route::get('/products/{id}/edit', 'ProductsController@edit');//edita o produto
Route::post("/products/update", 'ProductsController@update');//faz o update do produto

Route::get('/orders/{productId}/add', 'OrdersController@create');//cria os pedidos
Route::get('/orders', 'OrdersController@index')->name('list_orders');//lista os pedidos
Route::post('/orders/{productId}/add', 'OrdersController@store');//salva os pedidos
Route::get('/orders/{id}/edit', 'OrdersController@edit');//edita os pedidos
Route::post('/orders/update', 'OrdersController@update');//faz o update dos pedidos

Route::get('/quotations', 'QuotationsController@index')->name('list_quotations');//lista cotações
Route::get('/quotations/{orderId}/add', 'QuotationsController@create');//criação da cotação
Route::post('/quotations/add', 'QuotationsController@store');//salva a cotação com os validates
Route::get('/quotations/{id}/show', 'QuotationsController@show');//mostra a cotação 
Route::post('/quotations/calculate', 'QuotationsController@calculate')->name('calculate');//calculo api correios
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
