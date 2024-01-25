<label for="{{ $name }}" class="form-label">
    <i class="{{ $icon ?? 'fa-solid fa-layer-group' }}"></i>
    <span>{{ $text }}</span>
</label>
<select class="form-select" name="{{ $name }}" value="{{ $value ?? '' }}" id="{{ $name }}">
    @foreach ($options as $key => $value)
        <option value="{{ $key }}"> {{ $value }}</option>
    @endforeach
</select>
