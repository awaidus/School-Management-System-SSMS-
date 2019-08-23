@extends('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Parent Details</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            <h5 class="mb-1">Father: {{ $parent->father_name }}</h5>
            <h5 class="mb-1">Mother: {{ $parent->mother_name }}</h5>
        </h4>
        <h6 class="card-subtitle mb-2 text-muted">
            Phone: {{ $parent->phone }}
        </h6>
        <p class="card-text">
            <div>Email: {{ $parent->email }}</div>
            <div>Address: {{ $parent->address }}</div>
        </p>
        <a href="{{route('parents.edit', $parent)}}" class="card-link">Ediit</a>
    </div>
</div>

<h3 class="m-4">Students</h3>
<hr>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Student's Name</th>
                <th>Roll No.</th>
                <th>Class</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($parent->students as $student)

            <tr>
                <td></td>
                <td>{{$student->name}}</td>
                <td>{{$student->roll_no}}</td>
                <td></td>
                <td>
                    @include('components.button-show', [
                    'route' => route('students.show', $student),
                    'class' =>'btn-sm'])

                    @include('components.button-edit', [
                    'route' => route('students.edit', $student),
                    'class' =>'btn-sm'])
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</div>

@endsection