<?php



Auth::routes();


Route::get('/', 'ParentsController@index')->name('parent.index');
Route::get('/parents/create', 'ParentsController@create')->name('parent.create');
Route::get('/parents/{parent}', 'ParentsController@show')->name('parent.show');
Route::get('/parents/{parent}/edit', 'ParentsController@edit')->name('parent.edit');
Route::post('/parents', 'ParentsController@store')->name('parent.store');
Route::patch('/parents/{parent}', 'ParentsController@update')->name('parent.update');

Route::get('/students/{student}', 'StudentsController@show')->name('student.show'); //'{student]' here is a variable/ wildcard








Route::get('/home', 'HomeController@index')->name('home'); // we can use any name for easy access of specific route
