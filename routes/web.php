<?php

Route::get('/','UserController@home');
Route::get('/contactus','UserController@contactus');
Route::get('/uc/create','UserController@create');
Route::post('/uc','UserController@store');
Route::get('/uc','UserController@index'); 
Route::get('/uc/{id}','UserController@show');


