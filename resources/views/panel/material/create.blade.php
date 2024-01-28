@extends('layouts.dash')
@section('body')
    <div>
        <a class="d-flex align-items-center gap-1 text-decoration-none fs-4" href="{{ route('materials.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>Adicionar</span>
        </a>
    </div>
    <form action="{{ route('materials.index') }}" method="POST" class="p-2" enctype="multipart/form-data">
        @csrf
        @include('_parts.input-form-material')
        <button class="btn btn-primary mt-4">
            <i class="fa-solid fa-save"></i>
            <span>Salvar</span>
        </button>
    </form>
@endsection
