@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{ route('parent.create') }}">Create New Parent</a>
<hr>


@component('components.panel')
@slot('header')
<h3>Parent List</h3>
@endslot

<div class="my-3">{{ $parents->links() }}</div>

@foreach ($parents as $parent)
<div class="card">
    <div class="card-body">
        <h5 class="mb-1">Father: {{$parent->father_name}}</h5>
        <h5 class="mb-1">Mother: {{$parent->mother_name}}</h5>
        <h5 class="mb-1">Ph: {{$parent->phone_no}}</h5>

        <a href="{{route('parent.show', $parent)}}" class="btn btn-outline-primary btn-sm">
            <i class="fa fa-building"></i>
            <span>Details</span>
        </a>

        <a href="{{route('parent.edit', $parent)}}" class="btn btn-outline-info btn-sm">
            <span class="fa fa-edit"></span> Edit
        </a>
    </div>
</div>
@endforeach

<div class="my-3">{{ $parents->links() }}</div>

@endcomponent

@endsection