<label for="{{ $name }}" class="form-label">
    @isset($icon)
        <i class="{{ $icon }}"></i>
    @endisset
    <span>{{ $text }}</span>
</label>
<input type="{{ $type }}" class="form-control" name="{{ $name }}" value="{{ $value }}" id="{{ $name }}">
