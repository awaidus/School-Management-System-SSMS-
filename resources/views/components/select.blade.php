<div class="form-group row">
    <label for="{{ $name }}" class="col-form-label col-2 pr-0 ">
        {{ $label ?? $name }}
    </label>

    <div class="col pl-0">
        <select class="form-control" name="{{ $name }}" id="{{ $name }}">
            @foreach($options as $opt)
                <option value="{{$opt->id }}" {{  $selected ? 'selected' : '' }}>
                    {{ $opt->$display }}
                </option>
            @endforeach
        </select>

    </div>
</div>
