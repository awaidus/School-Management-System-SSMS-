<?php

Auth::routes();

// Appraoch-1 to draw the routes
Route::get('/', 'ParentsController@index')->name('parents.index');
Route::get('/parents/create', 'ParentsController@create')->name('parents.create');
Route::get('/parents/{parent}', 'ParentsController@show')->name('parents.show'); //'{parent]' here is a variable/ wildcard
Route::get('/parents/{parent}/edit', 'ParentsController@edit')->name('parents.edit');
Route::post('/parents', 'ParentsController@store')->name('parent.store');
Route::patch('/parents/{parent}', 'ParentsController@update')->name('parents.update');
Route::delete('/parents/{parent}', 'ParentsController@destroy')->name('parents.destroy');

// Approach-2 to draw the routes
// This will generate all the routes resources automatically like index, create, show, edit, update, delet
Route::resource('students', 'StudentsController');

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
