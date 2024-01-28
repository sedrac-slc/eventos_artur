@extends('layouts.table', ['route' => route('aluguers.create'), 'list' => $aluguers])
@section('thead')
    <th>
        <i class="fa-solid fa-image"></i>
        <span>Imagem</span>
    </th>
    <th>
        <i class="fa-solid fa-tools"></i>
        <span>Materías</span>
    </th>
    <th>
        <i class="fa-solid fa-champagne-glasses"></i>
        <span>Evento</span>
    </th>
    <th>
        <i class="fa-solid fa-edit"></i>
        <span>Tipo</span>
    </th>
    <th>
        <i class="fa-solid fa-calendar"></i>
        <span>Data começo</span>
    </th>
    <th>
        <i class="fa-solid fa-calendar-times"></i>
        <span>Data termino</span>
    </th>
    <th>
        <i class="fa-solid fa-money-bill"></i>
        <span>Quantidade</span>
    </th>
    <th colspan="2">
        <i class="fa-solid fa-tools"></i>
        <span>Acção</span>
    </th>
@endsection
@section('tbody')
    @foreach ($aluguers as $aluguer)
        <tr>
            <td>
                @isset($aluguer->material->image)
                    <img src="{{ url("storage/{$aluguer->material->image}") }}" alt="" class="img-tab" />
                @else
                    -
                @endisset
            </td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>{{ $aluguer->material->nome }}</td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>{{ $aluguer->evento->nome }}</td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>{{ $aluguer->evento->tipo_evento->nome }}</td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>{{ $aluguer->evento->data_comeco }}</td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>{{ $aluguer->evento->data_termino }}</td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>{{ $aluguer->quantidade }}</td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>
                <a href="{{ route('aluguers.edit', $aluguer->id) }}" class="btn btn-outline-warning btn-sm d-flex gap-1 align-items-center">
                    <i class="fa-solid fa-edit"></i>
                    <span>editar</span>
                </a>
            </td>
            <td @class(['pb-tab' => isset($aluguer->material->image)])>
                <button type="button" class="btn btn-outline-danger btn-sm btn-delete d-flex gap-1 align-items-center" data-bs-toggle="modal"
                    data-bs-target="#modalDelete" value="{{ route('aluguers.destroy', $aluguer->id) }}">
                    <i class="fa-solid fa-trash"></i>
                    <span>eliminar</span>
                </button>
            </td>
        </tr>
    @endforeach
@endsection
