@extends('layouts.dash')
@section('body')
    <div>
        <a class="d-flex align-items-center gap-1 text-decoration-none fs-4" href="{{ route('events.index') }}">
            <i class="fa-solid fa-circle-arrow-left"></i>
            <span>Editar</span>
        </a>
    </div>
    <form action="{{ route('events.update', $event->id) }}" method="POST" class="p-2">
        @csrf
        @method('PUT')
        <hr/>
        @include('_parts.input-form-events',['event' => $event])
        <button class="btn btn-primary mt-4">
            <i class="fa-solid fa-save"></i>
            <span>Salvar</span>
        </button>
    </form>
@endsection
@section('script')
    @parent
    <script src="{{ url('js/type-event.min.js') }}"></script>
@endsection
