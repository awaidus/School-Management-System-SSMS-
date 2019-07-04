@csrf


<div class="form-group row">
    <label for="parent_id" class="col-2 col-form-label pr-0">Parents</label>
    <div class="col pl-0">
        <select class="form-control" name="parent_id">
            @foreach($parents as $parent)
                <option value="{{$parent->id }}" {{ ( $parent->id == $student->parent_id) ? 'selected' : '' }}>
                    {{ $parent->father_name }}
                </option>
            @endforeach
        </select>
    </div>
</div>

@include('components.input', ['label' => 'Student Name', 'name'=>'name', 'value'=>$student->name])
@include('components.input', ['label' => 'Roll #', 'name'=>'roll_no', 'value'=>$student->roll_no])
@include('components.input', ['label' => 'Birth Date', 'name'=>'dob', 'value'=>$student->dob, 'type'=> 'date'])
@include('components.input', ['label' => 'Admission Date', 'name'=>'doa', 'value'=>$student->doa, 'type'=> 'date'])

@include('components.submit');

