@foreach ($data['new'] as $item)
<div class="col-md-6 col-sm-6">
    <div class="blog-grid-1 two">
        <a href="{{ route('post-show' , $item ->id ) }}" class="image">
            <img src="{{ Storage::url($item->thumbnail_img) }}"
                alt="image">
        </a>
        <div class="content">
            <ul>
                <li><a href="#">{{ $item -> category -> name  }}</a></li>
            </ul>
            <h4><a href="{{ route('post-show' , $item ->id ) }}">{{ $item ->title }}</a></h4>
            <div class="bottom-area">
                <a href="{{ route('post-show' , $item ->id ) }}" class=" eg-btn arrow-btn two">Xem chi tiết<i class="bi bi-arrow-right"></i></a>

            </div>
        </div>
    </div>
</div>

@endforeach
