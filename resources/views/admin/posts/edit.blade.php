@extends('admin.layouts.master')
@section('title')
    Create Category  - admin
@endsection

@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            @include('admin.components.breadcrumb', [
                'name' => 'Edit Post',
                'title' => '',
                'link' => 'admin.posts.index',
                'detail' => 'Posts',
            ])
        </div>
        <!--end breadcrumb-->
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <hr>

        <form method="POST" action="{{route('admin.posts.update' , $data -> id )}}"

              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="col-12   col-xl-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Post Information</h5>

                            <div class="col-md-12">
                                <label for="input1" class="form-label">Title Post </label>
                                <input type="text" class="form-control" value="{{ $data -> title }}"    name="title"
                                       placeholder="Title">
                                @error('title')
                                <span class=" text-danger"> {{ $message }}</span>
                                @enderror

                            </div>

                            <div class="col-md-12">

                                <label for="input3" class="form-label">Thumbnail</label>
                                <img src="{{\Storage::url($data->thumbnail_img)}}" alt="" width="100">
                                <input type="file"  class="form-control"
                                       id="inputGroupFile03" name="thumbnail_img">
                                @error('thumbnail_img')
                                <span class=" text-danger"> {{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12   col-xl-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Relate</h5>

                            <div class="row g-5">
                                <div class="col-md-6">
                                    <label for="input1" class="form-label">Name Category </label>
                                    <select class="form-select mb-3 select2" id="single-select-field"  name="category_id">

                                        @foreach ($cate as $id => $item)
                                            <option value="{{ $item->id }}"  @if($data->category_id == $item->id) selected @endif>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class=" text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label for="input2" class="form-label">Is Status </label>
                                    @php
                                        $is = [
                                            'is_status' => 'primary',
                                            'is_hot'  => 'danger',
                                            'is_trend' => 'info',
                                        ];
                                    @endphp

                                    @foreach($is as $key => $color)
                                        <div class="col-md-2">
                                            <div class="form-check form-switch form-check-{{$color}}">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                       name="{{ $key }}" value="1" id="{{ $key }}"
                                                       @if($data[$key] == 1) checked @endif>
                                                <label class="form-check-label"
                                                       for="{{ $key }}">{{ \Str::convertCase($key, MB_CASE_TITLE) }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-12">

                                    <label class="form-label">Tag</label>
                                    @php($postTags = $data ->tags->pluck('id')->all())
                                    <select class="form-select" id="multiple-select-clear-field" name="tag[]" data-placeholder="Choose anything" multiple>
                                        @foreach($tag as $item )

                                            <option value="{{$item -> id }}"  @selected(in_array($item->id , $postTags)) > {{$item->name}}</option>
                                        @endforeach

                                    </select>

                                </div>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Content</h5>


                            <textarea class="form-control" name="content" id="content">{{$data -> content }}</textarea>
                            <div class="col-md-12 mt-5">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-grd-primary px-4">Submit</button>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </form>

    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

@endsection
@section('js-new')
    <script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script src="{{ asset('theme/admin/assets/plugins/select2/js/select2-custom.js') }}"></script>
@endsection
