@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header text-center">
            <h3>Edit Parent Record</h3>
        </div>
        <div class="card-body">
            @include('_validation_errors')

            <form method="POST" action="{{route('parent.update', $parent)}}">
                @method('PATCH')
                @include('parent._form')

            </form>

        </div>
    </div>

@endsection
