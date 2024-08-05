@extends('Client/layouts/master')

@section('css')
    <link href="{{ asset('theme/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('theme/admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/sass/main.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container my-5">
                <div class="card rounded-4">
                    <div class="card-body p-4">
                        <div class="position-relative mb-5">
                            <img src="assets/images/gallery/profile-cover.html" class="img-fluid rounded-4 shadow"
                                alt="">
                            <div class="profile-avatar position-absolute top-100 start-50 translate-middle">
                                <img src="{{ \Storage::url($data -> userdetail -> avata_img) }}"
                                    class="img-fluid rounded-circle p-1 bg-grd-danger shadow" width="170" height="170"
                                    alt="">
                            </div>
                        </div>
                        <div class="profile-info pt-5 d-flex align-items-center justify-content-between">
                            <div class="">
                                <h3>{{ $data -> name  }}</h3>
                                 <p class="mb-0">{{ $data -> userdetail -> introduce }}</p>
                            </div>

                        </div>
                        <div class="kewords d-flex align-items-center gap-3 mt-4 overflow-x-auto">
                                <span> <strong>Favourite : </strong>{{ $data -> userdetail -> favourite }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start justify-content-between mb-3">
                                    <div class="">
                                        <h5 class="mb-0 fw-bold">Edit Profile</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <span class="material-icons-outlined fs-5">more_vert</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <form class="row g-4" method="POST" action="{{ route('profile.edit' , $data -> id ) }}" enctype="multipart/form-data" >
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-12">
                                        <label for="input3" class="form-label">Name </label>
                                        <input type="text" class="form-control" id="input3" value="{{ $data -> name }}" name="user[name]" placeholder="Name">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="input3" class="form-label">Avata</label>
                                        <input type="file" class="form-control" id="input3"  name="avata_img" placeholder="Name">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="input4" class="form-label">Favourite : </label>
                                        <input type="text"  value="{{ $data -> userdetail -> favourite }}" name="userdetail[favourite]" class="form-control" id="input4">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="input4" class="form-label">Country : </label>
                                        <input type="text" value="{{ $data ->  userdetail -> country  }}" name="userdetail[country]" class="form-control" id="input4">
                                    </div>

                                    <div class="col-md-12">
                                        <label  class="form-label">Introduce</label>
                                        <textarea class="form-control d-flex"  name="userdetail[introduce]" cols="4">{{ $data ->  userdetail -> introduce  }}
                                        </textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                           <button type="submit" class="btn btn-grd-success"> Update Profile </button>
                                            <button type="button"  class="btn btn-light px-4">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3">
                                    <div class="">
                                        <h5 class="mb-0 fw-bold">About</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <span class="material-icons-outlined fs-5">more_vert</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="full-info">
                                    <div class="info-list d-flex flex-column gap-3">
                                        <div class="info-list-item d-flex align-items-center gap-3"><span
                                                class="material-icons-outlined">account_circle</span>
                                            <p class="mb-0">Full Name: {{ $data -> name  }}</p>
                                        </div>
                                        <div class="info-list-item d-flex align-items-center gap-3"><span
                                                class="material-icons-outlined">done</span>
                                            <p class="mb-0">Status: @if ( !empty($data -> email_verified_at	))
                                                Active
                                                @else
                                                Inactive


                                            @endif</p>
                                        </div>
                                        <div class="info-list-item d-flex align-items-center gap-3"><span
                                                class="material-icons-outlined">code</span>
                                            <p class="mb-0">Role: {{ $data -> roles }}</p>
                                        </div>
                                        <div class="info-list-item d-flex align-items-center gap-3"><span
                                                class="material-icons-outlined">flag</span>
                                            <p class="mb-0">Country: VN</p>
                                        </div>
                                        <div class="info-list-item d-flex align-items-center gap-3"><span
                                                class="material-icons-outlined">language</span>
                                            <p class="mb-0">Language: Vietnamese</p>
                                        </div>
                                        <div class="info-list-item d-flex align-items-center gap-3"><span
                                                class="material-icons-outlined">send</span>
                                            <p class="mb-0">Email: {{ $data -> email }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!--end row-->
    </div>
@endsection
