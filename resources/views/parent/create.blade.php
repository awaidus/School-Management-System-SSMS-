@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create new parent record for Student</div>
    <div class="card-body">

        @include('_validation_errors')

        <form method="POST" action="{{ route('parents.store') }}">
            @include('parent._form')
        </form>

    </div>
</div>

@endsection