@extends('layouts.app')
@section('extracss')
    <style>
        #dewinterdev {
            min-height: 100vh;
            background: #0D0A0A;
        }
        #login {
            min-height: 100vh;
            width: 100%;
            background: #fff;
        }
        .text-gradient-purple {
            background: linear-gradient(to right, #8E54E9, #4776E6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .loginCardHeaderText {
            font-size: 2rem;
        }
        .card,
        .card-header,
        .card-body {
            border: none;
            background: none;
        }
        .btn-gradient-purple {
            background: linear-gradient(to right, #8E54E9, #4776E6);
        }
        .btn-gradient-purple:hover {
            background: linear-gradient(to left, #8E54E9, #4776E6);
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 position-relative d-flex justify-content-center align-items-center" id="dewinterdev">
                <h1 class="text-white display-2"><span class="text-gradient-purple">D</span>ewinter<span class="text-gradient-purple">D</span>ev</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center" id="login">
                <div class="card">
                    <div class="card-header">
                        <h2 class="row loginCardHeaderText">Welcome</h2>
                        <p class="row loginCardHeaderText text-secondary">Please login here</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <button type="submit" class="btn btn-gradient-purple text-white w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{--<div class="">
                    <div class="">Login</div>

                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
@endsection
