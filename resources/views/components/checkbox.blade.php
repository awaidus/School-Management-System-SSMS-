<div class="form-group row">
    <div class="form-check offset-2">
        <input class="form-check-input" type="checkbox" id="{{ $name }}" name="{{ $name }}"
            {{ $value ? 'checked' : '' }}>
        <label class="form-check-label" for="{{ $name }}">{{ $label ?? $name }}</label>
    </div>
</div>