<div class="row">
    <div class="col-md-12 p-1">
        @include('components.input-search-ajax', [
            'name' => 'evento',
            'text' => 'Digita o evento:',
            'value' => $aluguer->evento->nome ?? '',
            'icon' => 'fa-solid fa-champagne-glasses'
        ])
    </div>
    <div class="col-md-12 p-1">
        @include('components.input-search-ajax', [
            'name' => 'material',
            'text' => 'Digita o nome do material:',
            'value' => $aluguer->material->nome ?? '',
            'icon' => 'fa-solid fa-tools'
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-number', [
            'name' => 'preco',
            'text' => 'Digita a quantidade:',
            'value' => $aluguer->quantidade ?? '',
            'icon' => 'fa-solid fa-money-bill'
        ])
    </div>
</div>
