@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{ route('attendances.create') }}">Add Attendance</a>
<a class="btn btn-outline-info" href="{{ route('approved-attendances.index') }}">Approved Attendances</a>
<a class="btn btn-outline-info" href="{{ route('missing-attendances.index') }}">Missing Attendances</a>
<hr>



@component('components.panel')

@slot('header')
All Attendance Record
@endslot

@include('attendance._list')
@endcomponent

@endsection