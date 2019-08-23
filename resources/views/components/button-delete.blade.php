<div class="form-group row">
    <div class="col offset-2 pl-0">
        <div class="alert border border-danger" role="alert">
            <h4 class="alert-heading">Delete the Record</h4>
            <form method="post" action="{{ $route }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-outline-danger {{$class ?? '' }}" onclick="return confirmDelete()">
                    <i class="far fa-trash-alt"></i>
                    <span>Delete</span>
                </button>
            </form>
        </div>
    </div>
</div>

@section('script')
<script>
    function confirmDelete() {
            return confirm('Are you sure you want to delete the record?');
        }
</script>

@endsection