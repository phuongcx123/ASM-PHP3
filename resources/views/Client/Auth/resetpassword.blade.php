@extends('Client/layouts/master')
@section('content')
@include('Client.Auth.css')
    <div class="main">

        <section class="signup">
            <div class="container1">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Reset Password</h2>
                        @if ($errors->any())
                            <div class="text-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" class="register-form" id="register-form" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text"  id="password"  name="password"  autocomplete="new-password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="password_confirmation" id="password-confirm"  autocomplete="new-password" placeholder="Repeat your password"/>
                            </div>
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('theme/client/assets/images/login/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
