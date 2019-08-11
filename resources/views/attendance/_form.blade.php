@csrf


<div class="form-row align-items-center">

    <div class="form-group col-auto">
        <label for="student_id">Student</label>
        <select name="student_id" class="form-control form-control-sm">
            @foreach($students as $student)
                <option value="{{$student->id }}"}}>
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

    <div class="form-group col-2 mx-0">
        <label for="remarks">Remarks</label>
        <input type="text" class="form-control form-control-sm" name="remarks">
    </div>

    <div class="col-auto mb-n3">
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </div>


</div>

