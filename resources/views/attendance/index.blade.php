@extends('layouts.app')

@section('content')

    <a class="btn btn-primary" href="{{ route('missing-attendances.index') }}">Missing Attendances</a>
    <hr>

    @component('components.panel')

        @slot('header')
            <h3>Add New Attendance Record</h3>
        @endslot

        @include('_validation_errors')

        <form method="POST" action="{{route('attendances.store')}}">
            @include('attendance._form')
        </form>

    @endcomponent
    <hr>

    @component('components.panel')
        @slot('header')
            <h3>All Attendance Record</h3>
        @endslot
        @include('attendance._list')
    @endcomponent

@endsection

