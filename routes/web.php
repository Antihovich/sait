<?php

Route::get('/','BaseController@getindex');
Auth::routes();
Route::group(['middleware'=>['authuser']],
       function(){
Route::get('basket', 'BascetController@getIndex');
	   });
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('feedback', 'FeedbackController@getIndex');
Route::get('catalog/{id}', 'CatalogController@getIndex');
Route::get('categories', 'ProductController@getAll');

//всегда последний
Route::get('{url}', 'StaticController@getIndex');
