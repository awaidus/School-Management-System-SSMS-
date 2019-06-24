<?php



Auth::routes();


Route::get('/', 'ParentsController@index')->name('parent.index');
Route::get('/parents/create', 'ParentsController@create')->name('parent.create');
Route::get('/parents/{parent}', 'ParentsController@show')->name('parent.show'); //'{parent]' here is a variable/ wildcard
Route::get('/parents/{parent}/edit', 'ParentsController@edit')->name('parent.edit');
Route::post('/parents', 'ParentsController@store')->name('parent.store');
Route::patch('/parents/{parent}', 'ParentsController@update')->name('parent.update');

Route::get('/students/{student}', 'StudentsController@show')->name('student.show');
Route::get('/student/{student}/edit', 'StudentsController@edit')->name('student.edit');
Route::patch('/students/{student}', 'StudentsController@update')->name('student.update');








Route::get('/home', 'HomeController@index')->name('home'); // we can use any name for easy access of specific route
