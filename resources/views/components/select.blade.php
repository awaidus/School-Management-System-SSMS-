<div class="form-group row">

    <label for="{{ $name }}" class="col-form-label col-2 pr-2 pl-0 text-right">{{ $label ?? $name}}</label>

    <div class="col pl-0">
        <select class="form-control" name="{{ $name }}">
            <option value='--12'></option>
            @foreach($items as $item)
            <option value="{{$item->$value_field }}"
                {{ ($item->$value_field == ($selected_value ?? false) )  ? 'selected' : '' }}>
                {{ $item->$display_field }}
            </option>
            @endforeach

        </select>

    </div>
</div>