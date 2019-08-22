<?php

Auth::routes();

Route::get('/', 'ParentsController@index')->name('parent.index');
Route::get('/parents/create', 'ParentsController@create')->name('parent.create');
Route::get('/parents/{parent}', 'ParentsController@show')->name('parent.show'); //'{parent]' here is a variable/ wildcard
Route::get('/parents/{parent}/edit', 'ParentsController@edit')->name('parent.edit');
Route::post('/parents', 'ParentsController@store')->name('parent.store');
Route::patch('/parents/{parent}', 'ParentsController@update')->name('parent.update');

Route::resource('students', 'StudentsController');  //this will create all the routes resources automatically like
//Route::get('/students', 'StudentsController@index')->name('student.index');
//Route::get('/students/create', 'StudentsController@create')->name('student.create');
//Route::get('/students/{student}', 'StudentsController@show')->name('student.show');
//Route::get('/student/{student}/edit', 'StudentsController@edit')->name('student.edit');
//Route::patch('/students/{student}', 'StudentsController@update')->name('student.update');

Route::resource('classes', 'ClassesController');
Route::resource('attendances', 'AttendancesController');

Route::get('/missing-attendances', 'MissingAttendancesController@index')->name('missing-attendances.index');

Route::get('/approved-attendances', 'ApprovedAttendancesController@index')->name('approved-attendances.index');
Route::post('/missing-attendances/{attendance}/approved', 'ApprovedAttendancesController@store')->name('approved-attendances.store');

//Route::resource('enrollments', 'StudentsEnrollmentController');  

Route::get('/enrollments', 'StudentsEnrollmentController@create')->name('enrollments.create');
Route::post('/enrollments', 'StudentsEnrollmentController@store')->name('enrollments.store');
Route::get('/enrollments/{class}/{student}', 'StudentsEnrollmentController@edit')->name('enrollments.edit');
Route::patch('/enrollments/{class}', 'StudentsEnrollmentController@update')->name('enrollments.update');
Route::delete('/enrollments/{class}', 'StudentsEnrollmentController@destroy')->name('enrollments.destroy');

Route::resource('subjects', 'SubjectsController');
