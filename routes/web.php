<?php

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', 'UserController@index');

Auth::routes();

Route::get('/', 'PersonsContoller@index');
Route::get('/home', 'HomeController@index')->name('home');
