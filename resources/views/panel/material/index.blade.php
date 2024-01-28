@extends('layouts.table',['route' => route('materials.create'), 'list' => $materials ])
@section('thead')
    <th>
        <i class="fa-solid fa-image"></i>
        <span>Imagem</span>
    </th>
    <th>
        <i class="fa-solid fa-envelope"></i>
        <span>Nome</span>
    </th>
    <th>
        <i class="fa-solid fa-phone"></i>
        <span>Quantidade</span>
    </th>
    <th colspan="2">
        <i class="fa-solid fa-tools"></i>
        <span>Acção</span>
    </th>
@endsection
@section('tbody')
    @foreach ($materials as $material)
        <tr>
            <td>
                @isset($material->image)
                    <img src="{{ url("storage/{$material->image}") }}" alt="" class="img-tab"/>
                @else
                    -
                @endisset
            </td>
            <td @class(['pb-tab' => isset($material->image)]) >{{ $material->nome }}</td>
            <td @class(['pb-tab' => isset($material->image)]) >{{ $material->quantidade }}</td>
            <td @class(['pb-tab' => isset($material->image)]) >
                <a href="{{ route('materials.edit', $material->id) }}" class="btn btn-outline-warning btn-sm">
                    <i class="fa-solid fa-edit"></i>
                    <span>editar</span>
                </a>
            </td>
            <td @class(['pb-tab' => isset($material->image)]) >
                <button  type="button" class="btn btn-outline-danger btn-sm btn-delete" data-bs-toggle="modal" data-bs-target="#modalDelete" value="{{ route('materials.destroy', $material->id) }}">
                    <i class="fa-solid fa-trash"></i>
                    <span>eliminar</span>
                </a>
            </td>
        </tr>
    @endforeach
@endsection
