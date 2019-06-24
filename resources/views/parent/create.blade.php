@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new parent record for Student</div>
                <div class="card-body">
                    @include('_validation_errors')

                    <form method="POST" action="/parents">
                        @include('parent._form')
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection