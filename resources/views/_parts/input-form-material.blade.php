<div class="row">
    @isset($disabledImage)
        <div class="col-md-12 p-1">
            <div class="d-flex align-items-center gap-1" id="disabledPanel">
                <input class="form-check" type="checkbox" name="" id="active-img" value="0">
                <label for="active-img" class="form-label mt-1">Alterar imagem</label>
            </div>
        </div>
    @endisset
    <div class="col-md-12 p-1">
        @include('components.input-file', [
            'name' => 'image',
            'text' => 'Escolha a imagem:',
            'value' => $material->image ?? '',
            'disabled' => $disabledImage ?? null,
        ])
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-6 p-1">
        @include('components.input-text', [
            'name' => 'nome',
            'text' => 'Digita o nome:',
            'value' => $material->nome ?? '',
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-number', [
            'name' => 'quantidade',
            'text' => 'Digita a quantidade:',
            'icon' => 'fa-solid fa-phone',
            'value' => $material->quantidade ?? '',
        ])
    </div>
</div>
@isset($disabledImage)
    @include('_parts.script-file')
@endisset
