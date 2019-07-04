@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Create Student Record</h3>
                </div>
                <div class="card-body">

                    @include('_validation_errors')

                    <form method="POST" action="{{route('students.store')}}">

                        @include('student._form')

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

