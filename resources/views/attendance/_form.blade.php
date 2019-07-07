@csrf


<div class="form-row">

    <div class="form-group col">
        <label for="student_id">Student</label>
        <select name="student_id" class="form-control form-control-sm">
            @foreach($students as $student)
                <option value="{{$student->id }}" {{ ( $student->id == $attendance->student_id) ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-2">
        <label for="working_day">Date</label>
        <input type="text" class="form-control form-control-sm date" name="working_day" autocomplete="off">
    </div>

    <div class="form-group col-2">
        <label for="in_at">In Time</label>
        <input type="text" class="form-control form-control-sm time" name="in_at" autocomplete="off">
    </div>

    <div class="form-group col-2">
        <label for="out_at">Out Time</label>
        <input type="text" class="form-control form-control-sm time" name="out_at" autocomplete="off">
    </div>

    <div class="form-group col-3">
        <label for="absence_reason">Absence Reason</label>
        <input type="text" class="form-control form-control-sm" name="absence_reason">
    </div>
</div>
<button type="submit" class="btn btn-primary">Save</button>

