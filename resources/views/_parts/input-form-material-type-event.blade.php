<div class="row">
    <div class="col-md-12 p-1">
        @include('components.input-search-ajax', [
            'name' => 'tipo_evento',
            'text' => 'Digita o tipo de evento:',
            'value' => $materialTipoEvento->tipo_evento->nome ?? '',
            'icon' => 'fa-solid fa-edit'
        ])
    </div>
    <div class="col-md-12 p-1">
        @include('components.input-search-ajax', [
            'name' => 'material',
            'text' => 'Digita o nome do material:',
            'value' => $materialTipoEvento->material->nome ?? '',
            'icon' => 'fa-solid fa-tools'
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-number', [
            'name' => 'preco',
            'text' => 'Digita o preço:',
            'value' => $materialTipoEvento->preco ?? '',
            'icon' => 'fa-solid fa-money-bill'
        ])
    </div>
</div>
