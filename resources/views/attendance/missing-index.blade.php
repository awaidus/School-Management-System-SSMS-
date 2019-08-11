@extends('layouts.app')

@section('content')

    @component('components.panel')

        @slot('header')
            <h3>All Missing Attendance Record</h3>
        @endslot

        @include('attendance._list')


    @endcomponent

    <hr>


@endsection


