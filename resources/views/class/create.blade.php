@extends('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Add Class</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @include('components.button-create', [
            'route' => route('classes.create')])

        </div>
    </div>
</div>

@include('_validation_errors')

<form method="POST" action="{{ route('classes.store') }}">
    @include('class._form')
</form>

@endsection