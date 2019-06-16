@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h3>Parent List</h3>
                        <table class="table table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Parent Name</th>
                                <th scope="col">Students</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($parents as $parent)
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <div>Father: {{$parent->father_name}}</div>
                                        <div>Mothet: {{$parent->mother_name}}</div>

                                        <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                            <button type="button" class="btn btn-primary">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </div>


                                    </td>
                                    <td>
                                        @foreach ($parent->students as $student)
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div>Name: {{$student->name}}</div>
                                                    <div>Roll#: {{$student->roll_no}}</div>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection