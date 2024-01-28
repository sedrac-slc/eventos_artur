<label for="{{ $name }}" class="form-label">
    @isset($icon)
        <i class="{{ $icon }}"></i>
    @endisset
    <span>{{ $text }}</span>
</label>
<div class="d-flex gap-1">
    <input type="search" class="form-control" name="{{ $name }}" value="{{ $value }}" id="{{ $name }}" @isset($disabled) disabled @endisset>
    <button type="button" class="btn btn-primary" id="btn_{{ $name }}">
        <i class="fa-solid fa-search"></i>
    </button>
</div>
<div class="table-response mt-1 mb-1" id="table_{{ $name }}"></div>
