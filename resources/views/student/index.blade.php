@extends('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Students</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @include('components.button-create', [
            'route' => route('students.create')])

        </div>
    </div>
</div>

<div class="my-3">{{ $students->links() }}</div>

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

            @foreach ($students as $student)

            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->roll_no}}</td>
                <td></td>
                <td class="float-right mr-2">
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

    <div class="my-3">{{ $students->links() }}</div>

</div>

@endsection