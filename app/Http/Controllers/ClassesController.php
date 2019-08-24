<?php

namespace App\Http\Controllers;

use App\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClassesController extends Controller
{

    public function index()
    {
        $classes = ClassModel::withCount('students')->paginate(50);

        return view('class.index', compact('classes'));
    }

    public function create()
    {
        $class = new ClassModel();
        return view('class.create', compact('class'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => ['required', 'min:3', 'unique:classes,title']
            ]
        );

        ClassModel::create($request->all());

        return redirect()->route('classes.index');
    }

    public function show(ClassModel $class)
    {
        return view('class.show', [
            'class' => $class->load(['students', 'subjects'])
        ]);
    }

    public function edit(ClassModel $class)
    {
        return view('class.edit', compact('class'));
    }

    public function update(Request $request, ClassModel $class)
    {
        $request->validate(
            [
                'title' => ['required', 'min:3', Rule::unique('classes')->ignore($class->id)]
            ]
        );

        $class->update($request->all());

        return redirect()->route('classes.index');
    }


    public function destroy(ClassModel $class)
    {
        $class->delete();
        return redirect()->route('classes.index');
    }
}
