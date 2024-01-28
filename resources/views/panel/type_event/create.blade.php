@extends('layouts.dash')
@section('body')
    <div>
        <a class="d-flex align-items-center gap-1 text-decoration-none fs-4" href="{{ route('type-events.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>Adicionar</span>
        </a>
    </div>
    <form action="{{ route('type-events.store') }}" method="POST" class="p-2">
        @csrf
        @include('_parts.input-form-type-events')
        <button class="btn btn-primary mt-4">
            <i class="fa-solid fa-save"></i>
            <span>Salvar</span>
        </button>
    </form>
@endsection
