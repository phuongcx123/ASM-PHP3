<div class="breadcrumb-title pe-3">{{$name }}</div>
<div class="ps-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"> <a href="{{route('admin.categories.index')}}">{{$title}}</a>
            </li>


            <li class="breadcrumb-item active" aria-current="page"><a href="{{route($link)}}">{{$detail}}</a></li>
        </ol>
    </nav>
</div>
