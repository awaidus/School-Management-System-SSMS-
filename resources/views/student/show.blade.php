@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body text-center">
                <h3>Student: <strong>{{$student->name}}</strong></h3>
                <div>
                    <a href="{{route('students.edit', $student)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">Class Details</div>
                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item">Class Name: </li>
                        <li class="list-group-item">Roll No: </li>
                        <li class="list-group-item">
                            <div>Father Name: {{ $student->parents->father_name }}</div>
                            <div>Mother Name: {{ $student->parents->mother_name }}</div>
                            <div>(Ph#: {{ $student->parents->phone_no }})</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">Attendances Details</div>
                <div class="card-body">
                    No missing attendances
                </div>
            </div>
        </div>

    </div> {{-- end Row --}}

</div>
@endsection


{{-- <h3>Attendances</h3>
                    <div class="my-3">{{ $attendances->links() }}
</div>
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
            <th class="py-0" scope="row">{{ $att->working_day->format('d-m-y') }}
                , {{$att->working_day->format('l')}}</th>
            <td class="py-0">{{$att->in_at->format('H:i:s')}}</td>
            <td class="py-0">{{$att->out_at->format('H:i:s')}}</td>
            <td class="py-0">{{$att->absence_reason}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="my-3">{{ $attendances->links() }}</div> --}}