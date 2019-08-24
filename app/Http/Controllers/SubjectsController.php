<?php

namespace App\Http\Controllers;

use App\ClassModel;
use App\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('class')->get();

        return view('subject.index', compact('subjects'));
    }
    public function create()
    {
        $classes = ClassModel::all();
        $subject = new Subject();
        return view('subject.create', compact('classes', 'subject'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validateRequest());

        Subject::create($request->all());

        return redirect()->route('subjects.index');
    }

    public function show(Subject $subject)
    { }

    public function edit(Subject $subject)
    {
        $classes = ClassModel::all();
        return view('subject.edit', compact('classes', 'subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        return redirect()->route('subjects.index');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index');
    }

    public function validateRequest()
    {
        return [
            'title' => ['required', 'min:3'],
            'class_id' => ['required',],
        ];
    }
}
