<?php

Route::get('/','BaseController@getindex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('feedback', 'FeedbackController@getIndex');
//всегда последний
Route::get('{url}', 'StaticController@getIndex');
