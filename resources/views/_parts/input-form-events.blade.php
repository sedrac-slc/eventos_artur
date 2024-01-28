<div class="row">
    <div class="col-md-12 p-1">
        @include('components.input-search-ajax', [
            'name' => 'tipo_evento',
            'text' => 'Digita o tipo de evento:',
            'value' => $event->tipo_evento->nome ?? '',
            'icon' => 'fa-solid fa-champagne-glasses'
        ])
    </div>
    <div class="col-md-12 p-1">
        @include('components.input-text', [
            'name' => 'nome',
            'text' => 'Digita o nome do evento:',
            'value' => $event->nome ?? '',
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-datetime', [
            'name' => 'data_comeco',
            'text' => 'Digita data de começo:',
            'value' => $event->data_comeco ?? '',
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-datetime', [
            'name' => 'data_termino',
            'text' => 'Digita a data de termino:',
            'icon' => 'fa-solid fa-calendar-times',
            'value' => $event->data_termino ?? '',
        ])
    </div>
</div>
