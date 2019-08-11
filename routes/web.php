<?php



Auth::routes();


Route::get('/', 'ParentsController@index')->name('parent.index');
Route::get('/parents/create', 'ParentsController@create')->name('parent.create');
Route::get('/parents/{parent}', 'ParentsController@show')->name('parent.show'); //'{parent]' here is a variable/ wildcard
Route::get('/parents/{parent}/edit', 'ParentsController@edit')->name('parent.edit');
Route::post('/parents', 'ParentsController@store')->name('parent.store');
Route::patch('/parents/{parent}', 'ParentsController@update')->name('parent.update');


Route::resource('students', 'StudentsController');  //this will create all the routes resources automatically like
//INDEX, CREATE, SHOW, EDIT, STORE, UPDATE for 'Student' record using
// StudentsController's action.
//Route::get('/students', 'StudentsController@index')->name('student.index');
//Route::get('/students/create', 'StudentsController@create')->name('student.create');
//Route::get('/students/{student}', 'StudentsController@show')->name('student.show');
//Route::get('/student/{student}/edit', 'StudentsController@edit')->name('student.edit');
//Route::patch('/students/{student}', 'StudentsController@update')->name('student.update');


Route::get('/attendances', 'AttendancesController@index')->name('attendances.index');
Route::get('/attendances/create', 'AttendancesController@create')->name('attendances.create');
Route::post('/attendances', 'AttendancesController@store')->name('attendances.store');
Route::delete('/attendances/{attendance}', 'AttendancesController@destroy')->name('attendances.destroy');


Route::get('/missing-attendances', 'MissingAttendancesController@index')->name('missing-attendances.index');

Route::post('/missing-attendances/{attendance}/approved', 'ApprovedAttendancesController@store')->name('approved-attendances.store');



Route::get('/home', 'HomeController@index')->name('home'); // we can name the route for easy access
