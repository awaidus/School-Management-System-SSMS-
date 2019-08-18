@csrf


@include('components.select', [
'label' => 'Students',
'name'=>'student_id',
'items'=>$students,
'value_field'=>'id',
'display_field'=>'name',
'selected_value' => $attendance->student_id
])

@include('components.input', [
'label' => 'Working Date',
'name'=>'working_day',
'value'=>$attendance->working_day,
'class'=> 'date'
])

@include('components.input', [
'label' => 'In Time',
'name'=>'in_at',
'value'=>$attendance->in_at,
'class'=>'time'
])

@include('components.input', [
'label' => 'Out Time',
'name'=>'out_at',
'value'=>$attendance->out_at,
'class'=>'time'
])

@include('components.checkbox', [
'label' => 'Missing',
'name'=>'missing',
'value'=>$attendance->missing
])

@include('components.checkbox', [
'label' => 'Approved',
'name'=>'approved',
'value'=>$attendance->approved
])

@include('components.input', [
'label' => 'Remarks',
'name'=>'remarks',
'value'=>$attendance->remarks
])

<div class="form-group row">
    <div class="offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('attendances.index') }}" class="btn btn-outline-info">Back</a>

        {{-- Delete attendance record --}}
        {{-- @if ($attendance->id > 0)
        <form method="post" action="{{ route('attendances.destroy', $attendance) }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-outline-danger" onclick="return confirmDelete()">Delete</button>
        </form>
        @endif --}}

    </div>
</div>




@section('script')
<script>
    function confirmDelete() {
            return confirm('Are you sure you want to delete?');
        }
</script>

@endsection




{{-- Horizontal Style form --}}

{{-- <div class="form-row align-items-center">

    <div class="form-group col">
        <label for="student_id">Student</label>
        <select name="student_id" class="form-control form-control-sm">
            @foreach($students as $student)
            <option value="{{$student->id }}" }}>
{{ $student->name }}
</option>
@endforeach
</select>
</div>

<div class="form-group col">
    <label for="working_day">Date</label>
    <input type="text" class="form-control form-control-sm date" name="working_day" autocomplete="off">
</div>

<div class="form-group col-1 mx-1">
    <label for="in_at">In Time</label>
    <input type="text" class="form-control form-control-sm time" name="in_at" autocomplete="off">
</div>

<div class="form-group col-1 mx-1">
    <label for="out_at">Out Time</label>
    <input type="text" class="form-control form-control-sm time" name="out_at" autocomplete="off">
</div>

<div class="col-1">
    <div class="form-check mb-n3">
        <input class="form-check-input" type="checkbox" name="missing">
        <label class="form-check-label ml-1" for="missing">Missing?</label>
    </div>
</div>

<div class="col-auto">
    <div class="form-check mb-n3">
        <input class="form-check-input" type="checkbox" name="approved">
        <label class="form-check-label" for="approved">Approved?</label>
    </div>
</div>

<div class="form-group col mx-0">
    <label for="remarks">Remarks</label>
    <input type="text" class="form-control form-control-sm" name="remarks">
</div>

<div class="col-auto mb-n3">
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</div>
</div>


<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('attendances.index') }}" class="btn btn-outline-dark">Back</a>
</div>
--}}