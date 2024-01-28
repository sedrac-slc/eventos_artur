@extends('layouts.dash')
@section('body')
    <div>
        <a class="d-flex align-items-center gap-1 text-decoration-none fs-4" href="{{ route('material-type-events.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>Editar</span>
        </a>
    </div>
    <form action="{{ route('material-type-events.update',$materialTipoEvento->id) }}" method="POST" class="p-2" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('_parts.input-form-material-type-event',['materialTipoEvento' => $materialTipoEvento])
        @include('components.input-hidden',['name'=> 'tipo_evento_search', 'value' => route('type-events.search-by-name')])
        @include('components.input-hidden',['name'=> 'material_search', 'value' => route('materials.search-by-name')])
        <button class="btn btn-primary mt-4">
            <i class="fa-solid fa-save"></i>
            <span>Salvar</span>
        </button>
    </form>
@endsection
@section('script')
    @parent
    <script src="{{ url('js/type-event.min.js') }}"></script>
    <script src="{{ url('js/material.min.js') }}"></script>
@endsection
