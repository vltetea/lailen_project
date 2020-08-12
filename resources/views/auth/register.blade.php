@extends('layouts.site')
@section('title', 'Login')

@section('content')
    <div class="limiter form-padding">
        <div class="container-login100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-header text-center">{{ __('USER REGISTRATION') }}</div>

                        <div class="card-body">
                            <div class="wrap-login100">

                                <form class="login100-form validate-form" method="post" action="{{ route('register') }}">
                                    @csrf

                                    <div class="wrap-input100 validate-input" data-validate = "Required Field">

                                        <input class="input100 outline-none @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                        <span class="focus-input100" data-placeholder="Enter your name"></span>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "abc@email.com">

                                        <input class="input100 outline-none @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" autocomplete="email">
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
                                        <span class="focus-input100 @error('password') is-invalid @enderror" data-placeholder="Enter your password" autocomplete="new-password"></span>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Required Field">

                                        <span class="btn-show-pass">
                                            <i class="fa fa-eye"></i>
                                        </span>

                                        <input class="input100 outline-none" type="password" name="password_confirmation" id="password_confirmation">
                                        <span class="focus-input100" data-placeholder="Confirm your password" autocomplete="new-password"></span>

                                    </div>

                                    <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">

                                            <div class="login100-form-bgbtn"></div>

                                            <button class="login100-form-btn outline-none-button" name="submit">
                                                REGISTER
                                            </button>

                                        </div>

                                        <div class="form-head-padding">
                                            @if (Route::has('login'))
                                                <a class="btn btn-link text-center" href="{{ route('login') }}">
                                                    {{ __('Login') }}
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