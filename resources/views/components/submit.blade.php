<div class="form-group row">
    <div class="offset-2">
        <button type="submit" class="{{ $class ?? 'btn btn-success' }}">
            {{ $text ?? 'Submit' }}
        </button>
        <a href="{{ $route_back ?? $prev_url ?? url()->previous() }}" class="btn btn-outline-dark">Back</a>
    </div>
</div>