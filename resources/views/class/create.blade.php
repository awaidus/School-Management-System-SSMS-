@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create new Class record</div>
    <div class="card-body">

        @include('_validation_errors')

        <form method="POST" action="{{ route('classes.store') }}">
            @include('class._form')
        </form>

    </div>
</div>

@endsection