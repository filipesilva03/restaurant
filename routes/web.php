<?php

Route::get('/','UserController@home');
Route::get('/contactus','UserController@contactus');

//This route is created as per the norms of
// Resources for future video reference.
// I have my personal naming convention say for example.
// Controller name is UserController than I would create prefix as
// /uc/something in shortname. :)
Route::get('/uc/create','UserController@create');
// We are adding the usercontroller here and calling the store method() 
// as per the resource norms. :)
Route::post('/uc','UserController@store');



