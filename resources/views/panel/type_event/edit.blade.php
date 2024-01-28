@extends('layouts.dash')
@section('body')
    <div>
        <a class="d-flex align-items-center gap-1 text-decoration-none fs-4" href="{{ route('type-events.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>Editar</span>
        </a>
    </div>
    <form action="{{ route('type-events.update', $typeEvent->id) }}" method="POST" class="p-2">
        @csrf
        @method('PUT')
        @include('_parts.input-form-type-events',['typeEvent' => $typeEvent])
        <button class="btn btn-primary mt-4">
            <i class="fa-solid fa-save"></i>
            <span>Salvar</span>
        </button>
    </form>
@endsection
