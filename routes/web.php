<?php

Route::get('/','BaseController@getindex');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('feedback', 'FeedbackController@getIndex');
Route::get('catalog/{id}', 'CatalogController@getIndex');
Route::get('categories', 'ProductController@getAll');
Route::get('basket/add/{id}','BascetController@getAdd');
Route::get('basket', 'BascetController@getAll');
Route::get('basket/dell/{id}','BascetController@getDell');
Route::get('basket/clear','BascetController@getClear');
Route::get('orderreg', 'BascetController@index');
Route::post('order', 'OrderController@postIndex');
Route::get('admin/order/one/{id}', 'Admin/OrderController@getIndex');


//всегда последний
Route::get('{url}', 'StaticController@getIndex');
