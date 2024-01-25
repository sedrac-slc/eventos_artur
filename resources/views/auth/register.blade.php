@extends('layouts.template')
@php use App\Enum\UserTypeEnum; @endphp
@section('content')
    <div class="position-absolute">
        <a class="text-decoration-none text-white fs-4 m-2" href="/">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>voltar</span>
        </a>
    </div>
    <main class="d-flex justify-content-center align-items-center h-full bg-dark">
        <form action="POST" action="{{ route('register') }}" class="w-50 border rounded p-4 bg-light">
            @csrf
            <div class="fs-2">
                <i class="fa-solid fa-circle-user"></i>
                <span>Faça o cadastramento</span>
            </div>
            <hr />
            @include('_parts.input-form-user',['type' => UserTypeEnum::CLIENT ])
            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-share-from-square"></i>
                <span>Registar</span>
            </button>
        </form>
    </main>
@endsection
