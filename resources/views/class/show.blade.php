@extends('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Class Details</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @include('components.button-create', [
            'route' => route('enrollments.create')])

        </div>
    </div>
</div>

<h1>{{ $class->title }}</h1>

<h4>Students</h4>

<div class="table-responsive">

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Student Name</th>
                <th scope="col">Roll #</th>
                <th scope="col">Join Date</th>
                <th scope="col">Leave Date</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($class->students as $student)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->roll_no}}</td>
                <td>{{$student->class_enrollment->date_from}}</td>
                <td>{{$student->class_enrollment->date_to}}</td>
                <td class="float-right mr-2">
                    @include('components.button-edit', [
                    'route' => route('enrollments.edit', [$class, $student->id]),
                    'class' =>'btn-sm'])

            </tr>
            @endforeach {{--end student foreach--}}
        </tbody>
    </table>

</div>

<h4>Subjects</h4>
<div class="table-responsive">

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subject</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($class->subjects as $subject)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$subject->title}}</td>
                <td class="float-right mr-2">
                    @include('components.button-edit', [
                    'route' => route('subjects.edit', [$subject] ),
                    'class' =>'btn-sm'])
            </tr>
            @endforeach {{--end student foreach--}}
        </tbody>
    </table>

</div>

@endsection