@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{ route('enrollments.create') }}">Add Student to Class</a>
<hr>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>{{ $class->title }}</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
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
                            <td><a href="{{ route('enrollments.edit', [$class, $student->id]) }}"
                                    class="btn btn-outline-secondary btn-sm">Edit</td>
                        </tr>
                        @endforeach {{--end student foreach--}}
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
</div>



@endsection