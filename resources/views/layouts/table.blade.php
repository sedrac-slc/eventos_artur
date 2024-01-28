@extends('layouts.dash')
@section('body')
    <div>
        <a href="{{ $route }}" class="btn btn-outline-primary btn-sm">
            <i class="fa-solid fa-plus"></i>
            <span>Adicionar</span>
        </a>
    </div>
    <div class="table-responsive mt-4 text-center border rounded bg-white">
        <table class="table table-hover table-borderless table-sm">
            <thead>
                <tr>
                    @yield('thead')
                </tr>
            </thead>
            <tbody>
                @yield('tbody')
            </tbody>
        </table>
    </div>
    @isset($list)
        @if ($list->total() == 0)
            <div class="msg-empty">
                Nenhum registo encontrado.
            </div>
        @endif
        @if ($list->total() > 15)
            <hr class="bg-primary" />
        @endif
        <div id="pag" class="mt-3">
            {{ $list->links() }}
        </div>
    @endisset
@endsection
@section('modal')
    @include('components.modal-delete')
@endsection
