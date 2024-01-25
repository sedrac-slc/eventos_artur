@extends('layouts.template')
@section('content')
    <div class="position-absolute">
        <a class="text-decoration-none text-white fs-4 m-2" href="/">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>voltar</span>
        </a>
    </div>
    <main class="d-flex justify-content-center align-items-center h-full bg-dark">
        <form action="POST" action="{{ route('login') }}" class="w-50 border rounded p-4 bg-light">
            @csrf
            <div class="fs-2">
                <i class="fa-solid fa-circle-user"></i>
                <span>Faça o login</span>
            </div>
            <hr />
            <div class="mb-3">
                @include('components.input-email',['id'=>'email','name'=>'email','text'=>'Digita o seu email:'])
            </div>
            <div class="mb-3">
                @include('components.input-password',['id'=>'password','name'=>'password','text'=>'Digita a sua senha:'])
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMi">
                <label class="form-check-label" for="rememberMi">Lembra-se de mí</label>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-share-from-square"></i>
                <span>Logar</span>
            </button>
        </form>
    </main>
@endsection
