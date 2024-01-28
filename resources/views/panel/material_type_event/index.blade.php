@extends('layouts.table', ['route' => route('material-type-events.create'), 'list' => $materialTipoEventos])
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
        <i class="fa-solid fa-edit"></i>
        <span>Tipos Eventos</span>
    </th>
    <th>
        <i class="fa-solid fa-money-bill"></i>
        <span>Preço</span>
    </th>
    <th colspan="2">
        <i class="fa-solid fa-tools"></i>
        <span>Acção</span>
    </th>
@endsection
@section('tbody')
    @foreach ($materialTipoEventos as $materialTipoEvento)
        <tr>
            <td>
                @isset($materialTipoEvento->material->image)
                    <img src="{{ url("storage/{$materialTipoEvento->material->image}") }}" alt="" class="img-tab" />
                @else
                    -
                @endisset
            </td>
            <td @class(['pb-tab' => isset($materialTipoEvento->material->image)])>{{ $materialTipoEvento->material->nome }}</td>
            <td @class(['pb-tab' => isset($materialTipoEvento->material->image)])>{{ $materialTipoEvento->tipo_evento->nome }}</td>
            <td @class(['pb-tab' => isset($materialTipoEvento->material->image)])>{{ $materialTipoEvento->preco }}</td>
            <td @class(['pb-tab' => isset($materialTipoEvento->material->image)])>
                <a href="{{ route('material-type-events.edit', $materialTipoEvento->id) }}"
                    class="btn btn-outline-warning btn-sm">
                    <i class="fa-solid fa-edit"></i>
                    <span>editar</span>
                </a>
            </td>
            <td @class(['pb-tab' => isset($materialTipoEvento->material->image)])>
                <button type="button" class="btn btn-outline-danger btn-sm btn-delete" data-bs-toggle="modal"
                    data-bs-target="#modalDelete"
                    value="{{ route('material-type-events.destroy', $materialTipoEvento->id) }}">
                    <i class="fa-solid fa-trash"></i>
                    <span>eliminar</span>
                    </a>
            </td>
        </tr>
    @endforeach
@endsection
