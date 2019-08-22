<div class="form-group row">

    <div class="custom-control custom-checkbox offset-2">
        <input class="custom-control-input" type="checkbox" id="{{ $name }}" name="{{ $name }}"
            {{ $value ? 'checked' : '' }}>
        <label class="custom-control-label" for="{{ $name }}">{{ $label ?? $name }}</label>
    </div>

</div>