@extends('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>{{ $heading ?? 'Attendances' }}</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @include('components.button-create', [
            'route' => route('attendances.create'),
            'text' => (auth()->user()->is_admin ? 'Add New Record' : 'Submit Leave Application'),
            ])

            <a class="btn btn-outline-info" href="{{ route('approved-attendances.index') }}">Approved</a>
            <a class="btn btn-outline-info" href="{{ route('missing-attendances.index') }}">Missing</a>

        </div>
    </div>
</div>


@include('attendance._list')


@endsection