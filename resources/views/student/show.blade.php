@extends('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Student Details</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @can('admin')
            @include('components.button-edit', [
            'route' => route('students.edit', $student)])
            @endcan

        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">Class Details</div>
                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item">Name: <strong>{{$student->name}}</strong></li>
                        <li class="list-group-item">Roll No: {{$student->roll_no}}</li>
                        <li class="list-group-item">Class: </li>
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