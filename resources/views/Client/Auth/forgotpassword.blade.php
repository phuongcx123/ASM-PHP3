@extends('Client/layouts/master')
@section('content')
    @include('Client.Auth.css')
    <div class="main">

        <section class="sign-in">
            <div class="container1">
                <div class="signin-content">


                    <div class="signin-form">
                        <h2 class="form-title">Bạn Đã quên mật khẩu ? </h2>
                        @if (session('msg'))
                            {{ session('msg') }}
                        @endif
                        <form method="POST" class="register-form" id="login-form" method="{{ route('forgot') }}">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email"
                                       placeholder="Vui lòng nhập Email của bạn... "/>
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Gửi"/>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
