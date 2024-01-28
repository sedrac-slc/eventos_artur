@php use App\Enum\UserTypeEnum; @endphp
@php use App\Enum\UserGenderEnum; @endphp
@extends('layouts.table', ['route' => route('users.create'), 'list' => $users])
@section('thead')
    <th>
        <i class="fa-solid fa-image"></i>
        <span>Imagem</span>
    </th>
    <th>
        <i class="fa-solid fa-signature"></i>
        <span>Nome</span>
    </th>
    <th>
        <i class="fa-solid fa-envelope"></i>
        <span>Email</span>
    </th>
    <th>
        <i class="fa-solid fa-phone"></i>
        <span>Telefone</span>
    </th>
    <th>
        <i class="fa-solid fa-calendar"></i>
        <span>Data nascimento</span>
    </th>
    <th>
        <i class="fa-solid fa-venus-mars"></i>
        <span>Gênero</span>
    </th>
    <th>
        <i class="fa-solid fa-user-tie"></i>
        <span>Cargo</span>
    </th>
    <th colspan="2">
        <i class="fa-solid fa-tools"></i>
        <span>Acção</span>
    </th>
@endsection
@section('tbody')
    @foreach ($users as $user)
        <tr>
            <td>
                @isset($user->image)
                    <img src="{{ url("storage/{$user->image}") }}" alt="" class="img-tab" />
                @else
                    -
                @endisset
            </td>
            <td @class(['pb-tab' => isset($user->image)]) >{{ $user->name }}</td>
            <td @class(['pb-tab' => isset($user->image)]) >{{ $user->email }}</td>
            <td @class(['pb-tab' => isset($user->image)]) >{{ $user->phone }}</td>
            <td @class(['pb-tab' => isset($user->image)]) >{{ $user->birthday }}</td>
            <td @class(['pb-tab' => isset($user->image)]) >{{ UserGenderEnum::values()[$user->gender] }}</td>
            <td @class(['pb-tab' => isset($user->image)]) >{{ UserTypeEnum::values()[$user->type] }}</td>
            <td @class(['pb-tab' => isset($user->image)]) >
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning btn-sm">
                    <i class="fa-solid fa-edit"></i>
                    <span>editar</span>
                </a>
            </td>
            <td @class(['pb-tab' => isset($user->image)]) >
                <button type="button" class="btn btn-outline-danger btn-sm btn-delete" data-bs-toggle="modal"
                    data-bs-target="#modalDelete" value="{{ route('users.destroy', $user->id) }}">
                    <i class="fa-solid fa-trash"></i>
                    <span>eliminar</span>
                </button>
            </td>
        </tr>
    @endforeach
@endsection
