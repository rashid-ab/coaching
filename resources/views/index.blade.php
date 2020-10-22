@extends('layouts.app')
@section('content')
   <!-- Login Section start -->
    <section class="site-main-wrapper">
        <div class="row m-0 pl-md-5 px-3 pr-md-0">
            <div class="col-md-6 col-lg-4 pl-md-0">
                <div class="logo">
                    <img src="public/images/logo.png">
                </div>
                <div class="form-login mt-custom_up">
                    <div class="login-header mb-5">
                        <h5>Login</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <button type="submit" class="text-uppercase mt-4 w-100 border-0">Continue</button>
                        <label class="w-100 mt-3 d-flex flex-wrap align-items-center"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Login Info</label>
                        <div class="reset-pass">
                            <a href="#" class="mt-4 d-block text-site-o">Reset Password?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-8 pr-md-0 d-md-block d-none">
                <img src="public/images/yoga.jpg" class="w-100 min-h-100  object-cover">
            </div>
        </div>
    </section>
      <!-- Login Section End -->
@endsection