@extends('admin.layouts.master')
@section('title')
    Create Category  - admin
@endsection

@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            @include('admin.components.breadcrumb', [
                'name' => 'Add  Post',
                'title' => '',
                'link' => 'admin.posts.index',
                'detail' => 'Categories',
            ])
        </div>
        <!--end breadcrumb-->
        <hr>

        <form method="POST" action="{{route('admin.posts.store')}}"

              enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12   col-xl-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Post Information</h5>

                            <div class="col-md-12">
                                <label for="input1" class="form-label">Title Post </label>
                                <input type="text" class="form-control" value="{{ old('title') }}" name="title"
                                       placeholder="Title">
                                @error('title')
                                <span class=" text-danger"> {{ $message }}</span>
                                @enderror

                            </div>

                            <div class="col-md-12">
                                <label for="input3" class="form-label">Thumbnail</label>
                                <input type="file"  class="form-control"
                                       id="inputGroupFile03" name="thumbnail_img">

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
                                        <option selected hidden value="">Name category</option>
                                        @foreach ($cate as $id => $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                                       @if($key == 'is_status') checked @endif>
                                                <label class="form-check-label"
                                                       for="{{ $key }}">{{ \Str::convertCase($key, MB_CASE_TITLE) }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-12">

                                        <label class="form-label">Tag</label>
                                    <select class="form-select" id="multiple-select-clear-field" name="tag[]" data-placeholder="Choose anything" multiple>
                                        @foreach($tag as $item )
                                            <option value="{{$item -> id }}"> {{$item->name}}</option>
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


                            <textarea class="form-control" name="content" id="content"></textarea>
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
