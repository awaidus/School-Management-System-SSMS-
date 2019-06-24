@csrf


<div class="form-group row">
    <label for="father_name" class="col-3 col-form-label">Father's Name</label>
    <div class="col">
        <input type="text" class="form-control" name="father_name" value="{{old("father_name", $parent->father_name)}}">
    </div>
</div>

<div class="form-group row">
    <label for="mother_name" class="col-3 col-form-label mr-0">Mother's Name</label>
    <div class="col">
        <input type="text" class="form-control" name="mother_name" value="{{old("mother_name", $parent->mother_name)}}">
    </div>
</div>

<div class="form-group row">
    <label for="address" class="col-3 col-form-label mr-0">Address</label>
    <div class="col">
        <input type="text" class="form-control" name="address" value="{{old("address", $parent->address)}}">
    </div>
</div>

<div class="form-group row">
    <label for="phone_no" class="col-3 col-form-label mr-0">Phone No.</label>
    <div class="col">
        <input type="text" class="form-control" name="phone_no" value="{{old("phone_no", $parent->phone_no)}}" required>
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-3 col-form-label mr-0">Email</label>
    <div class="col">
        <input type="email" class="form-control" name="email" value="{{old("email", $parent->email)}}">
    </div>
</div>

<div class="form-group row">
    <div class="offset-3 pl-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
    </div>
</div>
