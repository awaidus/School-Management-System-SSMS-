@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student: <strong>{{$student->name}}</strong>'s Record</div>
                    <div class="card-body">
                        <h3>Attendances</h3>
                        <table class="table table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">In</th>
                                <th scope="col">Out</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($student->attendances as $att)
                                <tr>
                                    <th scope="row">{{$att->working_day->format('d-m-y')}}, {{$att->working_day->format('l')}}</th>
                                    <td>{{$att->in_at->format('H:i:s')}}</td>
                                    <td>{{$att->out_at->format('H:i:s')}}</td>
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