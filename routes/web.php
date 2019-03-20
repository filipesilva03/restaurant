<?php

Route::get('/','UserController@home');
Route::get('/contactus','UserController@contactus');
Route::get('/uc/create','UserController@create');
Route::post('/uc','UserController@store');
//Remember that once the editing is done the user must go back to the show() method
// to see that the user is editted properly or not. 
// To achieve this task let's go to the update method. 
Route::get('/uc','UserController@index'); 
Route::get('/uc/{id}','UserController@show');
Route::get('/uc/{id}/edit','UserController@edit')->where('id','[0-9]+');
Route::PATCH('/uc/{id}','UserController@update')->where('id','[0-9]+');