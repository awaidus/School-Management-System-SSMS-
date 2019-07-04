<div class="form-group row">
    <label for="{{ $name }}" class="col-form-label col-2 pr-0 ">

        {{ $label ?? $name }}

    </label>

    <div class="col pl-0">
        <input
                type="{{ $type ?? 'text' }}"
                class="form-control"
                name="{{ $name }}"
                id="{{ $name }}"
                value="{{ old($name, $value ?? '') }}"
        >
    </div>
</div>