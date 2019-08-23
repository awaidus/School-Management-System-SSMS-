@extends('layouts.dashboard')

@section('content')
<div class="card">
    <div class="card-header">Add Student to Class</strong></div>
    <div class="card-body">

        @include('_validation_errors')

        <form method="POST" action="{{ route('enrollments.store') }}">
            @include('class._form_enrollment')
        </form>

    </div>
</div>

@endsection