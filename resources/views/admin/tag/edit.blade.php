
@extends('admin.layouts.master')
@section('title')
   Edit  Category  - admin
@endsection

@section('content')
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
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            @include('admin.components.breadcrumb', [
                'name' => 'Edit  Tag : ' ,
                'title' => '',
                'link' => 'admin.tags.index',
                'detail' => 'Tags',
            ])
        </div>
        <!--end breadcrumb-->
        <hr>


        <div class="row justify-content-center">
            <div class="col-12   col-xl-6">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Tag: {{$data -> name}} </h5>
                        <form class="row g-3" method="POST" action="{{route('admin.tags.update', $data -> id  )}}"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="col-md-6">
                                <label for="input1" class="form-label">Name Category </label>
                                <input type="text" class="form-control"  value="{{$data -> name}}"  name="name"
                                       placeholder="Name Category">
                                @error('name')
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

