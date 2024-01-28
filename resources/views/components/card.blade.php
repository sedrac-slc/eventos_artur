<div class="card">
    <div class="card-body text-white @isset($bg) {{$bg}} @endisset">
        <h5 class="card-title">
            <i class="{{ $icon }}"></i>
            <span>{{ $title }}</span>
        </h5>
        <p class="card-text">{{ $text }}</p>
        <a href="{{ $route }}" class="btn btn-sm bg-white text-dark">
            <i class="fa-solid fa-arrow-right"></i>
            <span>Abrir</span>
        </a>
    </div>
</div>
