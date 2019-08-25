@extends('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>System Users</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            @include('components.button-create', [
            'route' => route('register'),
            'text' => 'Register User'])
        </div>
    </div>
</div>

<div class="table-responsive">

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Is Admin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_admin}}</td>
                <td class="float-right mr-2">
                    {{-- @include('components.button-show', [
                    'route' => route('classes.show', $class),
                    'class' =>'btn-sm'])--}}

                    @include('components.button-show', [
                    'route' => route('users.associate', $user),
                    'text' => 'Associate User',
                    'class' =>'btn-sm'
                    ])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>

@endsection