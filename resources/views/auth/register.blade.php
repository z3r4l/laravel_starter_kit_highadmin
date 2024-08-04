{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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

                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="username">Name</label>
                            {{-- <input class="form-control" type="email" id="username" required=""
                                placeholder="Michael Zenaty"> --}}
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="john Doe">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="emailaddress">Email address</label>
                            {{-- <input class="form-control" type="email" id="emailaddress" required=""
                                placeholder="john@deo.com"> --}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="john@doe.com">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="password">Password</label>
                            {{-- <input class="form-control" type="password" required="" id="password"
                                placeholder="Enter your password"> --}}
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="password">Confirm Password</label>
                            {{-- <input class="form-control" type="password" required="" id="password"
                                placeholder="Enter your password"> --}}
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">

                            <div class="checkbox checkbox-custom">
                                <input id="remember" type="checkbox" checked="">
                                <label for="remember">
                                    I accept <a href="#" class="text-custom">Terms and Conditions</a>
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <div class="col-12">
                            <button class="btn btn-block btn-custom waves-effect waves-light"
                                type="submit">Submit</button>
                        </div>
                    </div>

                </form>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Already have an account? <a href="{{ route('login') }}"
                                class="text-dark ml-1"><b>Login</b></a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection