@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Student: <strong>{{$student->name}}</strong>'s Record</h3>
                        <a href="{{route('student.edit', $student)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                    </div>
                    <div class="card-body">
                        <h3>Bio</h3>
                        <ul class="list-group">
                            <li class="list-group-item">Class Name: </li>
                            <li class="list-group-item">Roll No: </li>
                            <li class="list-group-item">Father Name: </li>
                            <li class="list-group-item">Mother Name: </li>
                        </ul>

                        <h3>Attendances</h3>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">In</th>
                                <th scope="col">Out</th>
                                <th scope="col">Absence Reason</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($attendances as $att)
                                <tr>
                                    <th scope="row">{{$att->working_day->format('d-m-y')}}, {{$att->working_day->format('l')}}</th>
                                    <td>{{$att->in_at->format('H:i:s')}}</td>
                                    <td>{{$att->out_at->format('H:i:s')}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $attendances->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection