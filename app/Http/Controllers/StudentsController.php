<?php

namespace App\Http\Controllers;

use App\Parents;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Student $student
     * @return void
     */
    public function index(Parent $parent)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @return Student
     */
    public function show(Student $student)
    {
        //We use Route-Model binding, so laravel will automatically get the related record
        //from the route as per passed "id". Field 'id' is used as search parameter.
        //thus, we have the specific $student

//        return $student->with('attendances')->paginate(10);

        return view('student.show', [
            'student' => $student->load('attendances', 'classes'),
            'attendances' => $student->attendances()->paginate(10)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @return void
     */
    public function edit(Student $student)
    {

        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
