@extends('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Subjects</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @include('components.button-create', [
            'route' => route('subjects.create')])

        </div>
    </div>
</div>

<div class="table-responsive">

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Subject Title</th>
                <th>Class</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{$subject->title}}</td>
                <td>{{$subject->class->title}}</td>
                <td>

                    @include('components.button-edit', [
                    'route' => route('subjects.edit', $subject),
                    'class' =>'btn-sm'])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection