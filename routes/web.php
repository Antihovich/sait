<?php

Route::get('/','BaseController@getindex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//всегда последний
Route::get('{url}', 'StaticController@getIndex');
