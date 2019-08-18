@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add new Attandance Record</div>
    <div class="card-body">

        @include('_validation_errors')

        <form method="POST" action="{{route('attendances.store')}}">
            @include('attendance._form')
        </form>

    </div>
</div>

@endsection