<div class="breadcrumb-section mb-100">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ </a></li>
                @if (request()->is('post/*'))
                    <li class="breadcrumb-item"><a href="{{ route('post') }}">Tin Tức</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>

            </ol>
        </nav>
    </div>
</div>
