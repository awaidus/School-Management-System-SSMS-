@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Edit Class Record</div>
    <div class="card-body">

        @include('_validation_errors')

        <form method="POST" action="{{route('classes.update', $class)}}">
            @method('PATCH')
            @include('class._form')
        </form>

        @isset($class)

        @include('components.button-delete', ['route'=> route('classes.destroy', $class)])

        @endisset

    </div>
</div>

@endsection