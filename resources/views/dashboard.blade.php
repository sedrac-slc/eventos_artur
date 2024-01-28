@php use App\Enum\UserTypeEnum; @endphp
@php use App\Enum\UserGenderEnum; @endphp
@extends('layouts.dash')
@section('body')
    <section class="bg-dark rounded text-white p-3">
        <div class="row text-center">
            <div class="col-md-2">
                @isset(auth()->user()->image)
                    <img src="{{ url('storage/' . auth()->user()->image) }}" alt="" class="img-perfil">
                @else
                @endisset
            </div>
            <div class="col-md-10">
                <div class="row h-100">
                    <div class="col-md-4 p-2">
                        <i class="fa-solid fa-audio-description"></i>
                        <strong>Nome:</strong>
                        <span>{{ auth()->user()->name }}</span>
                    </div>
                    <div class="col-md-4 p-2">
                        <i class="fa-solid fa-envelope"></i>
                        <strong>Email:</strong>
                        <span>{{ auth()->user()->email }}</span>
                    </div>
                    <div class="col-md-4 p-2">
                        <i class="fa-solid fa-phone"></i>
                        <strong>Telemovel:</strong>
                        <span>{{ auth()->user()->phone }}</span>
                    </div>
                    <div class="col-md-4 p-2">
                        <i class="fa-solid fa-venus-mars"></i>
                        <strong>Gênero:</strong>
                        <span>{{ UserGenderEnum::values()[auth()->user()->gender] }}</span>
                    </div>
                    <div class="col-md-4 p-2">
                        <i class="fa-solid fa-calendar"></i>
                        <strong>Data nascimento:</strong>
                        <span>{{ auth()->user()->birthday }}</span>
                    </div>
                    <div class="col-md-4 p-2">
                        <i class="fa-solid fa-user-tie"></i>
                        <strong>Cargo:</strong>
                        <span>{{ UserTypeEnum::values()[auth()->user()->type] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row mt-4">
        <div class="col-md-4 p-2">
            @include('components.card', [
                'title' => 'Usuarios',
                'icon' => 'fa-solid fa-users',
                'text' => 'Gerenciamento de todos usuários da plataforma',
                'route' => route('users.index'),
                'bg' => 'bg-primary',
            ])
        </div>
        <div class="col-md-4 p-2">
            @include('components.card', [
                'title' => 'Materías',
                'icon' => 'fa-solid fa-tools',
                'text' => 'Gerenciamento de todos materías para eventos',
                'route' => route('materials.index'),
                'bg' => 'bg-warning',
            ])
        </div>
        <div class="col-md-4 p-2">
            @include('components.card', [
                'title' => 'Tipos Eventos',
                'icon' => 'fa-solid fa-edit',
                'text' => 'Gerenciamento de todos os tipos eventos da plataforma',
                'route' => route('type-events.index'),
                'bg' => 'bg-success',
            ])
        </div>
        <div class="col-md-4 p-2">
            @include('components.card', [
                'title' => 'Eventos',
                'icon' => 'fa-solid fa-champagne-glasses',
                'text' => 'Gerenciamento de todos eventos da plataforma',
                'route' => route('events.index'),
                'bg' => 'bg-info',
            ])
        </div>
        <div class="col-md-4 p-2">
            @include('components.card', [
                'title' => 'Preços',
                'icon' => 'fa-solid fa-money-bill',
                'text' => 'Gerenciamento dos preços do material consoante o tipo de evento',
                'route' => route('material-type-events.index'),
                'bg' => 'bg-secondary',
            ])
        </div>
        <div class="col-md-4 p-2">
            @include('components.card', [
                'title' => 'Aluguer',
                'icon' => 'fa-solid fa-circle-info',
                'text' => 'Gerenciamento de todos aluguer da plataforma',
                'route' => route('aluguers.index'),
                'bg' => 'bg-danger',
            ])
        </div>
    </section>
@endsection
