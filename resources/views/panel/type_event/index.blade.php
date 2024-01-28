@extends('layouts.table',['route' => route('type-events.create'), 'list' => $typeEvents])
@section('thead')
    <th>
        <i class="fa-solid fa-envelope"></i>
        <span>Nome</span>
    </th>
    <th colspan="2">
        <i class="fa-solid fa-tools"></i>
        <span>Acção</span>
    </th>
@endsection
@section('tbody')
    @foreach ($typeEvents as $typeEvent)
        <tr>
            <td>{{ $typeEvent->nome }}</td>
            <td>
                <a href="{{ route('type-events.edit', $typeEvent->id) }}" class="btn btn-outline-warning btn-sm">
                    <i class="fa-solid fa-edit"></i>
                    <span>editar</span>
                </a>
            </td>
            <td >
                <button  type="button" class="btn btn-outline-danger btn-sm btn-delete" data-bs-toggle="modal" data-bs-target="#modalDelete" value="{{ route('type-events.destroy', $typeEvent->id) }}">
                    <i class="fa-solid fa-trash"></i>
                    <span>eliminar</span>
                </a>
            </td>
        </tr>
    @endforeach
@endsection
