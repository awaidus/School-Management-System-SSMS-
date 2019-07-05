@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <a class="btn btn-primary" href="{{ route('parent.create') }}">Create New Parent</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">Parent List</h3>
                <div class="card-body">
                    
                    <div class="my-3">{{ $parents->links() }}</div>
                    
                    @foreach ($parents as $parent)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-1">Father: {{$parent->father_name}}</h5>
                                <h5 class="mb-1">Mother: {{$parent->mother_name}}</h5>
                                <h5 class="mb-1">Ph: {{$parent->phone_no}}</h5>
                                <a href="{{route('parent.show', $parent)}}" class="btn btn-outline-primary btn-sm">Details</a>
                            </div>
                        </div>
                    @endforeach {{--end parent foreach--}}

                    <div class="my-3">{{ $parents->links() }}</div>

                </div>
            </div>
        </div>
    </div>
@endsection