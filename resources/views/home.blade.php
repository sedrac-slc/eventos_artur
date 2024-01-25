@extends('layouts.template')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Eventos Artur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="fa-solid fa-home"></i>
                            <span>Página Inicial</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#information">
                            <i class="fa-solid fa-circle-info"></i>
                            <span>Informações</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#group">
                            <i class="fa-solid fa-users"></i>
                            <span>Sobre nós</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Bem vindo ao website da empre eventos artur</h1>
                        <p class="lead text-white-50 mb-4">Oferecemos os nossos serviços para qualquer tipo de eventos que
                            pretendes organizar, faça aluguer dos nossos materias!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            @auth
                                <a class="btn btn-outline-light btn-lg px-4" href="{{ url('/dashboard') }}">
                                    <i class="fa-solid fa-user"></i>
                                    <span>Painel de control</span>
                                </a>
                            @else
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ route('login') }}">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <span>Login</span>
                                </a>
                                @if (Route::has('register'))
                                    <a class="btn btn-outline-light btn-lg px-4" href="{{ route('register') }}">
                                        <i class="fa-solid fa-id-badge"></i>
                                        <span>Cadastramento</span>
                                    </a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about">
        <div class="container pt-4 pb-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="fs-3" id="information">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Informações</span>
                    </div>
                    <p class="lead">Somos uma empresa organizadora de eventos e aluguer de matérias ou equipamentos de
                        eventos:</p>
                    <ul>
                        <li>Temos matérias para eventos de casamentos, artístico, religiosa e de outros tipos</li>
                        <li>Podes alugar todos materias até ao limite do nosso stock</li>
                        <li>Apresentamos preços acessíveis e variáveis consoante a tipo de eventos</li>
                        <li>Temos experiência comprovada nesses serviços</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="services">
        <div class="container pt-4 pb-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8" id="group">
                    <h2>Sobre nós</h2>
                    <p class="lead">
                        Somos uma equipa organizadora de eventos sediado na província de Benguela em Angola, a
                        nossa equipa é formado várias pessoas por motivo de sigilo não iremos apresentar informações destas
                        pessoas.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5 bg-dark">
        <div class="container pt-4 pb-4">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website {{ date('Y') }}</p>
        </div>
    </footer>
@endsection
