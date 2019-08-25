<?php

Auth::routes();

// Apply auth middleware to all routes. 
// Now only authorize person can access the site 
Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('home');

    // Appraoch-1 to draw the routes
    Route::get('/parents', 'ParentsController@index')->name('parents.index');
    Route::get('/parents/create', 'ParentsController@create')->name('parents.create');
    Route::get('/parents/{parent}', 'ParentsController@show')->name('parents.show'); //'{parent]' here is a variable/ wildcard
    Route::get('/parents/{parent}/edit', 'ParentsController@edit')->name('parents.edit');
    Route::post('/parents', 'ParentsController@store')->name('parents.store');
    Route::patch('/parents/{parent}', 'ParentsController@update')->name('parents.update');
    Route::delete('/parents/{parent}', 'ParentsController@destroy')->name('parents.destroy');

    // Approach-2 to draw the routes
    // This will generate all the routes resources automatically like index, create, show, edit, update & delete 
    Route::resource('students', 'StudentsController');

    Route::resource('classes', 'ClassesController');

    Route::resource('attendances', 'AttendancesController');

    Route::get('/missing-attendances', 'MissingAttendancesController@index')->name('missing-attendances.index');
    Route::post('/missing-attendances/mail', 'MissingAttendancesController@mail')->name('missing-attendances.mail');

    Route::get('/approved-attendances', 'ApprovedAttendancesController@index')->name('approved-attendances.index');
    Route::post('/missing-attendances/{attendance}/approved', 'ApprovedAttendancesController@store')->name('approved-attendances.store');


    Route::get('/enrollments/classes', 'StudentsEnrollmentController@create')->name('enrollments.create');
    Route::post('/classes/enrollments', 'StudentsEnrollmentController@store')->name('enrollments.store');
    Route::get('/classes/enrollments/{class}/{student}', 'StudentsEnrollmentController@edit')->name('enrollments.edit');
    Route::patch('/classes/enrollments/{class}', 'StudentsEnrollmentController@update')->name('enrollments.update');
    Route::delete('/classes/enrollments/{class}', 'StudentsEnrollmentController@destroy')->name('enrollments.destroy');

    Route::resource('subjects', 'SubjectsController');
});
