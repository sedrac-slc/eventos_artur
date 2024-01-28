<div class="row">
    <div class="col-md-12 p-1">
        @include('components.input-text', [
            'name' => 'nome',
            'text' => 'Digita o seu nome:',
            'value' => $typeEvent->nome ?? '',
        ])
    </div>
</div>
