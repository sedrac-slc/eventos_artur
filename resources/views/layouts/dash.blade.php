@extends('layouts.template')
@section('content')
    <nav class="navbar navbar-dark bg-dark fixed-top h-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start text-bg-dark w-25" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                        <i class="fa-solid fa-bars"></i>
                        <span>Menu</span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">
                                <i class="fa-solid fa-home"></i>
                                <span>Página Inicial</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="fa-solid fa-solar-panel"></i>
                                <span>Painel de control</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <i class="fa-solid fa-users"></i>
                                <span>Usuários</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('materials.index') }}">
                                <i class="fa-solid fa-tools"></i>
                                <span>Materías</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('type-events.index') }}">
                                <i class="fa-solid fa-edit"></i>
                                <span>Tipos Eventos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('events.index') }}">
                                <i class="fa-solid fa-champagne-glasses"></i>
                                <span>Eventos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('material-type-events.index') }}">
                                <i class="fa-solid fa-money-bill"></i>
                                <span>Preços</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aluguers.index') }}">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Aluguer</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section class="container h-body">
        @yield('body')
    </section>
    @yield('modal')
@endsection
