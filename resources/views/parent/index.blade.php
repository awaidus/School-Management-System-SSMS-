@extends('layouts.dashboard')

@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Parents</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

            @include('components.button-create', [
            'route' => route('parents.create')])

        </div>
    </div>
</div>


<div class="table-responsive">
    <div class="my-3">{{ $parents->links() }}</div>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Phone #</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parents as $parent)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{$parent->father_name}}</td>
                <td>{{$parent->mother_name}}</td>
                <td>{{$parent->phone_no}}</td>
                <td>{{$parent->email}}</td>
                <td>
                    @include('components.button-show', [
                    'route' => route('parents.show', $parent),
                    'class' =>'btn-sm'])

                    @include('components.button-edit', [
                    'route' => route('parents.edit', $parent),
                    'class' =>'btn-sm'])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-3">{{ $parents->links() }}</div>

</div>


@endsection