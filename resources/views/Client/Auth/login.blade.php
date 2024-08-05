@extends('Client/layouts/master')
@section('content')
    @include('Client.Auth.css')
    <div class="main">

        <section class="sign-in">
            <div class="container1">


                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('theme/client/assets/images/login/signin-image.jpg') }}"
                                alt="sing up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Tạo một tài khoản ?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Xin Chào !</h2>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" class="register-form" id="login-form" method="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    autocomplete="email" placeholder="Email của bạn" autofocus />

                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" value="{{ old('password') }}"
                                    autocomplete="current-password" placeholder="Mật Khẩu" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term me-3"><span><span></span></span>Nhớ tài
                                    khoản</label>
                                <a href="{{ route('forgot') }}" class="label-agree-term ms-5">Tôi đã quên mật khẩu ? </a>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" id="signin" class="form-submit" value="Đăng nhập" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Hoặc đăng nhập bẳng</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
