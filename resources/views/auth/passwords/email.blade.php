
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
                    <div class="text-center">
                        <p class="text-muted">Enter your email address and we'll send you an email with instructions to
                            reset your password. </p>
                    </div>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="emailaddress">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Reset
                                    Password</button>
                            </div>
                        </div>
                    </form>

                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Back to <a href="{{ route('login') }}"
                                    class="text-dark ml-1"><b>Login</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection