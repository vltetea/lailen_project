@extends('layouts.site')
@section('title', 'Login')

@section('content')
    <div class="limiter form-padding">
        <div class="container-login100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-header text-center">{{ __('USER LOGIN') }}</div>

                        <div class="card-body">
                            <div class="wrap-login100">

                                <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
                                    @csrf

                                    <div class="wrap-input100 validate-input" data-validate = "abc@email.com">

                                        <input class="input100 outline-none @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                        <span class="focus-input100" data-placeholder="Enter your email"></span>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Required Field">

                                        <span class="btn-show-pass">
                                            <i class="fa fa-eye"></i>
                                        </span>

                                        <input class="input100 outline-none" type="password" name="password" id="password">
                                        <span class="focus-input100 @error('password') is-invalid @enderror" data-placeholder="Enter your password" autocomplete="current-password"></span>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-login100-form-btn">

                                        <div class="wrap-login100-form-btn">

                                            <div class="login100-form-bgbtn"></div>

                                            <button class="login100-form-btn outline-none-button" name="submit">
                                                Login
                                            </button>

                                        </div>

                                        <div class="form-head-padding">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('register') }}">
                                                    {{ __('Register') }}
                                                </a>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                
                                    </div>

                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection