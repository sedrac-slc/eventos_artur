@extends('layouts.dash')
@section('body')
    <div>
        <a class="d-flex align-items-center gap-1 text-decoration-none fs-4" href="{{ route('aluguers.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>Adicionar</span>
        </a>
    </div>
    <form action="{{ route('aluguers.store') }}" method="POST" class="p-2" enctype="multipart/form-data">
        @csrf
        @include('_parts.input-form-aluguers')
        @include('components.input-hidden',['name'=> 'evento_search', 'value' => route('events.search-by-name')])
        @include('components.input-hidden',['name'=> 'material_search', 'value' => route('materials.search-by-name')])
        <button class="btn btn-primary mt-4">
            <i class="fa-solid fa-save"></i>
            <span>Salvar</span>
        </button>
    </form>
@endsection
@section('script')
    @parent
    <script src="{{ url('js/evento.min.js') }}"></script>
    <script src="{{ url('js/material.min.js') }}"></script>
@endsection
