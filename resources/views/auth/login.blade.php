{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="{{ asset('back/assets/images/logo.png') }}" alt="" height="26"></span>
                    </a>
                </h2>

                <form class="" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="emailaddress">Email address</label>
                            {{-- <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email"> --}}

                            <input
                                id="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required autocomplete="email" 
                                autofocus placeholder="Enter your email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <a href="{{ route('password.request') }}" class="text-muted float-right"><small>Forgot your
                                    password?</small></a>
                            <label for="password">Password</label>
                            {{-- <input class="form-control" type="password" required="" id="password" placeholder="Enter your password"> --}}

                            <input 
                                id="password" 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                name="password" 
                                required 
                                autocomplete="current-password" 
                                placeholder="Enter your password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">

                            <div class="checkbox checkbox-custom">
                                <input 
                                    id="remember" 
                                    name="remember" 
                                    type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <div class="col-12">
                            <button 
                                class="btn btn-block btn-custom waves-effect waves-light" 
                                type="submit">
                                Login
                            </button>

                        </div>
                    </div>

                </form>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}"
                                class="text-dark ml-1"><b>Register</b></a></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection