@extends('layouts.dash')
@section('body')
    <div>
        <a class="d-flex align-items-center gap-1 text-decoration-none fs-4" href="{{ route('users.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>Editar</span>
        </a>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="p-2" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('_parts.input-form-user',['user'=>$user, 'password_disabled' => true, 'disabledImage' => true])
        <button class="btn btn-primary mt-4">
            <i class="fa-solid fa-save"></i>
            <span>Salvar</span>
        </button>
    </form>
@endsection
