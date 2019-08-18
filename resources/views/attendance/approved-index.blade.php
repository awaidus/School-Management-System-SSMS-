@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{ route('attendances.index') }}">Back</a>

<hr>

@component('components.panel')

@slot('header')
All Approved Attendance Record
@endslot

@include('attendance._list')

@endcomponent
<hr>

@endsection