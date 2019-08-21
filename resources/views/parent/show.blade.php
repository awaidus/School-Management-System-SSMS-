@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-1">Father: {{ $parent->father_name }}</h5>
                <h5 class="mb-1">Mother: {{ $parent->mother_name }}</h5>
            </div>

            <div class="card-body">
                <h5 class="card-title">Students' List</h5>
                <div class="list-group">
                    @foreach ($parent->students as $student)
                    <a href="/students/{{$student->id}}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Name: {{$student->name}}</h5>
                            {{--                                            <small>3 days ago</small>--}}
                        </div>
                        <p class="mb-1">{{$student->roll_no}}</p>
                        <p class="mb-1">Class Name</p>
                        {{--                                        <small>Donec id elit non mi porta.</small>--}}
                    </a>
                    @endforeach {{--end student foreach--}}
                </div>


            </div>
        </div>
    </div>
</div>



@endsection