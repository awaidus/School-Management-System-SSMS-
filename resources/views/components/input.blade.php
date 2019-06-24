<div class="form-group row">
    <label for="{{$name}}"
           class="col-3 col-form-label"
    >
        {{$label ?? $name}}
    </label>

    <div class="col">
        <input
                type="{{$type ?? 'text'}}"
                class="form-control"
                name="{{$name}}"
                value= {{old($name, $model->$name)}},
        >
    </div>
</div>