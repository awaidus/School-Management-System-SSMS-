@extends('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Edit Student Record</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

        </div>
    </div>
</div>
@include('_validation_errors')

<form method="POST" action="{{route('students.update', $student)}}">
    @method('PATCH')
    @include('student._form')
</form>
@isset($student)

@include('components.button-delete', ['route'=> route('students.destroy', $student)])

@endisset

@endsection