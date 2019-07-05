@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <a class="btn btn-primary" href="{{route('students.create')}}">Create New Student</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">Parent List</h3>
                <div class="card-body">
                    
                    <div class="my-3">{{ $students->links() }}</div>

                    @foreach ($students as $student)
                        <div class="card">
                            <div class="card-body">
                                <h5>Name: {{$student->name}}</h5>
                                <h5>Roll #: {{$student->roll_no}}</h5>
                                <a href="{{route('students.show', $student)}}" class="btn btn-outline-primary btn-sm">Details</a>
                            </div>
                        </div>
                    @endforeach {{--end parent foreach--}}

                    <div class="my-3">{{ $students->links() }}</div>

                </div>

            </div>
        </div>
    </div>
@endsection