@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Edit Attandance Record</div>
    <div class="card-body">

        @include('_validation_errors')

        <form method="POST" action="{{route('attendances.update', $attendance)}}">
            @method('PATCH')
            @include('attendance._form')
        </form>

    </div>
</div>

@endsection