@csrf


<div class="form-group row">
    <label for="name" class="col-3 col-form-label">Name</label>
    <div class="col">
        <input type="text" class="form-control" name="name" value="{{old("name", $student->name)}}">
    </div>
</div>

<div class="form-group row">
    <label for="roll_no" class="col-3 col-form-label mr-0">Roll No.</label>
    <div class="col">
        <input type="text" class="form-control" name="roll_no" value="{{old("roll_no", $student->roll_no)}}">
    </div>
</div>

<div class="form-group row">
    <label for="dob" class="col-3 col-form-label mr-0">Birth Date</label>
    <div class="col">
        <input type="date" class="form-control" name="dob" value="{{old("dob", $student->dob)}}">
    </div>
</div>

<div class="form-group row">
    <label for="doa" class="col-3 col-form-label mr-0">Admission Date</label>
    <div class="col">
        <input type="date" class="form-control" name="doa" value="{{old("doa", $student->doa)}}" required>
    </div>
</div>

<div class="form-group row">
    <div class="offset-3 pl-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
    </div>
</div>
