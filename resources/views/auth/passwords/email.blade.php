@extends('layouts.site')
@section('title', 'Login')

@section('content')
    <div class="limiter form-padding">
        <div class="container-login100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-header text-center">{{ __('RESET PASSWORD') }}</div>

                        <div class="card-body">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif 

                            <div class="wrap-login100">

                                <form class="login100-form validate-form" method="post" action="{{ route('password.email') }}">
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

                                    <div class="container-login100-form-btn">

                                        <div class="wrap-login100-form-btn">

                                            <div class="login100-form-bgbtn"></div>

                                            <button class="login100-form-btn outline-none-button" name="submit">
                                                Send Password Reset Link
                                            </button>

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