@extends('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Classes</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @include('components.button-create', [
            'route' => route('classes.create')])

            <a class="btn btn-outline-info" href="{{ route('enrollments.create') }}">
                <i class="fas fa-user-plus"></i>
                <span>Add Student to Class</span>
            </a>
        </div>
    </div>
</div>

<div class="table-responsive">
    <div class="my-3">{{ $classes->links() }}</div>


    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Class Title</th>
                <th>No. of Students</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{$class->title}}</td>
                <td><span class="badge badge-primary">{{ $class->students_count }}</span></td>
                <td class="float-right mr-2">
                    @include('components.button-show', [
                    'route' => route('classes.show', $class),
                    'class' =>'btn-sm'])

                    @include('components.button-edit', [
                    'route' => route('classes.edit', $class),
                    'class' =>'btn-sm'])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-3">{{ $classes->links() }}</div>


</div>

@endsection