@extends('layouts.table',['route' => route('events.create'), 'list' => $events])
@section('thead')
    <th>
        <i class="fa-solid fa-envelope"></i>
        <span>Nome</span>
    </th>
    <th>
        <i class="fa-solid fa-champagne-glasses"></i>
        <span>Evento</span>
    </th>
    <th>
        <i class="fa-solid fa-calendar"></i>
        <span>Data começo</span>
    </th>
    <th>
        <i class="fa-solid fa-calendar-times"></i>
        <span>Data termino</span>
    </th>
    <th colspan="2">
        <i class="fa-solid fa-tools"></i>
        <span>Acção</span>
    </th>
@endsection
@section('tbody')
    @foreach ($events as $event)
        <tr>
            <td>{{ $event->nome }}</td>
            <td>{{ $event->tipo_evento->nome }}</td>
            <td>{{ $event->data_comeco }}</td>
            <td>{{ $event->data_termino }}</td>
            <td>
                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-outline-warning btn-sm">
                    <i class="fa-solid fa-edit"></i>
                    <span>editar</span>
                </a>
            </td>
            <td >
                <button  type="button" class="btn btn-outline-danger btn-sm btn-delete" data-bs-toggle="modal" data-bs-target="#modalDelete" value="{{ route('events.destroy', $event->id) }}">
                    <i class="fa-solid fa-trash"></i>
                    <span>eliminar</span>
                </a>
            </td>
        </tr>
    @endforeach
@endsection
@section('')

@endsection
