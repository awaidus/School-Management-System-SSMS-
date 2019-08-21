@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{ route('classes.create') }}">Create New Class</a>
<a class="btn btn-outline-info" href="{{ route('enrollments.create') }}">Add Student to Class</a>

<hr>

@component('components.panel')
@slot('header')
All Classes List
@endslot

<div class="my-3">{{ $classes->links() }}</div>

<div class="row">
    @foreach ($classes as $class)
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header text-white bg-primary">
                {{ $class->title }}
            </div>
            <div class="card-body">
                <h3 class="card-title">Students Enrolled:
                    <span class="badge badge-primary">{{ $class->students_count }}</span>
                </h3>
                <a href="{{route('classes.show', $class)}}" class="btn btn-outline-primary btn-sm">Details</a>
                <a href="{{route('classes.edit', $class)}}" class="btn btn-outline-info btn-sm">Edit</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="my-3">{{ $classes->links() }}</div>

@endcomponent

@endsection