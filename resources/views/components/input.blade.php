<div class="form-group row">

    <label for="{{ $name }}" class="col-form-label col-2 pr-2 pl-0 text-right ">

        {{ $label ?? $name }}

    </label>

    <div class="col pl-0">
        <input type="{{ $type ?? 'text' }}" class="form-control {{ $class ?? ''}}" name="{{ $name }}" id="{{ $name }}"
            value="{{ old($name, $value ?? '') }}" autocomplete="off">

    </div>

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

</div>