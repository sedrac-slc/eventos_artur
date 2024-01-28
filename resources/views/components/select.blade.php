<label for="{{ $name }}" class="form-label">
    <i class="{{ $icon ?? 'fa-solid fa-layer-group' }}"></i>
    <span>{{ $text }}</span>
</label>
<select class="form-select" name="{{ $name }}" value="{{ $value ?? '' }}" id="{{ $name }}">
    @foreach ($options as $key => $text)
        <option value="{{ $key }}" @if($key == $value) selected @endif> {{ $text }}</option>
    @endforeach
</select>
