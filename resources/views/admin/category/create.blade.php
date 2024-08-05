@extends('admin.layouts.master')
@section('title')
    Create Category  - admin
@endsection

@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            @include('admin.components.breadcrumb', [
                'name' => 'Add  Category',
                'title' => '',
                'link' => 'admin.categories.index',
                'detail' => 'Categories',
            ])
        </div>
        <!--end breadcrumb-->
        <hr>


        <div class="row justify-content-center">
            <div class="col-12   col-xl-6">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Category Add From </h5>
                        <form class="row g-3" method="POST" action="{{route('admin.categories.store')}}"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-6">
                                <label for="input1" class="form-label">Name Category </label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                       placeholder="Name Category">
                                @error('name')
                                <span class=" text-danger"> {{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="input2" class="form-label">Is Status </label>
                                @php
                                    $is = [
                                        'is_status' => 'primary',
                                    ];
                                @endphp

                                @foreach($is as $key => $color)
                                    <div class="col-md-2">
                                        <div class="form-check form-switch form-switch-{{ $color }}">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                   name="{{ $key }}" value="1" id="{{ $key }}"
                                                   @if($key == 'is_status') checked @endif>
                                            <label class="form-check-label"
                                                   for="{{ $key }}">{{ \Str::convertCase($key, MB_CASE_TITLE) }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-12">
                                <label for="input3" class="form-label">Thumbnail</label>
                                <input type="file" value="{{old('thumbnail_img')}}" class="form-control" id="inputGroupFile03" name="thumbnail_img">
                                @error('thumbnail_img')
                                <span class=" text-danger"> {{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                                    <button type="reset" class="btn btn-grd-royal px-4">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

