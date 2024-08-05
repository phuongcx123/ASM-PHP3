@extends('admin.layouts.master')
@section('title')
    Create Category  - admin
@endsection

@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            @include('admin.components.breadcrumb', [
                'name' => 'Show Post',
                'title' => '',
                'link' => 'admin.posts.index',
                'detail' => 'Post',
            ])
        </div>
        <!--end breadcrumb-->
        <hr>
        <div class="container m-auto mt-4">
            <div class="card" >
                <img src= "{{ \Storage::url($data -> thumbnail_img) }}"  class="m-auto" alt="{{$data -> title }}" width="800px">
                <div class="card-body">
                  <h5 class="card-title">{{ $data -> title }}</h5>
                  <p class="align-items-center"><i class='bx bxs-user-rectangle' ></i> : {{ $data -> user -> name }}   <span> | <i class='bx bxs-time-five' ></i> : {{ $data -> created_at  }} </span> | <i class='bx bx-category'></i> : {{ $data -> category -> name  }} <span></span></p>
                 {!! $data -> content !!}
                        <span class="d-flex mb-3"><strong>Tags : </strong> @foreach ($data -> tags as $item)
                            <span class="text-danger  mx-1">#{{ $item -> name }}</span>
                        @endforeach</span>
                    <span class="mt-5"><a class="btn btn-grd-voilet" href="{{route('admin.posts.index')}}"> Quay lại </a>
                    <a class="btn ms-3 btn-grd-deep-blue" href="{{route('admin.posts.edit' , $data -> id )}}"> Chỉnh Sửa  </a>
                    </span>
                </div>
              </div>
        </div>

    </div>
@endsection


