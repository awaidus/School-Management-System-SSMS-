<div class="form-group row">
    <div class="offset-2">
        <button type="submit" class="{{ $class ?? 'btn btn-success' }}">
            <i class="fas fa-save"></i>
            <span>{{ $text ?? 'Submit' }}</span>
        </button>
        <a href="{{ $route_back ?? $prev_url ?? url()->previous() }}" class="btn btn-outline-dark">
            <i class="fas fa-arrow-left"></i>
            <span>Back</span>
        </a>
    </div>
</div>