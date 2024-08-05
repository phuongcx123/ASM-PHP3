@foreach ($data as $item)
<div class="blog-list-1 mb-25">
    <a href="{{ route('post-show' , $item ->id ) }}" class="image" style="width: 100px">
        <img src="{{ Storage::url($item->thumbnail_img)  }}"
            alt="image">
    </a>
    @php
       $date_one  = $item -> created_at ;
         $date = date('d/m/Y' , strtotime($date_one))

 @endphp
    <div class="content">
        <h6><a href="{{ route('post-show' , $item ->id ) }}">{{$item -> title}}</a></h6>
        <ul>
            <li><a href="#">Ngày {{$date}}</a></li>

        </ul>
    </div>
</div>
@endforeach
