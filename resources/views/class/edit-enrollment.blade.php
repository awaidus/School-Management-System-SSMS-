@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Edit Student Enrollment to Class</strong></div>
    <div class="card-body">

        @include('_validation_errors')

        {{-- <form method="POST" action="{{ route('enrollments.update', $class) }}"> --}}
        <form method="POST" action="{{ route('enrollments.update', $class) }}">
            @method('PATCH')
            @include('class._form_enrollment')
        </form>

        @isset($class)

        @include('components.button-delete', ['route'=> route('enrollments.destroy', $class)])

        @endisset


    </div>
</div>

@endsection