@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="image-col col col-md-8">
            <div class="login-figure">
                <figure>
                    <img class="mx-auto d-block img-fluid login-image" src="{{ asset("images/login image.png") }}" alt="Login Image">
                </figure>
            </div>
                <div class="login-text">
                    <p class="slogan">Easy Secure Reliable</p>
                    <p class="app-name">RECORDS MANAGEMENT SYSTEM</p>
                </div>
        </div>
        <div class="login-col col col-md-4">
            <div class="login-container">
                <img class="logo" src="{{ asset("images/folder.svg") }}" alt="">
                <h3 class="logo-name">DP RECORDS</h3>
                <h6 class="logoName">SYSTEM</h6>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group col col-md-12 input-container">
                        <div>
                            <label for="email" class="col-form-label">Username</label>
                        </div>
                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col col-md-12 input-container">
                        <div>
                            <label for="password" class="col-form-label">Password</label>
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link remember" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm btn-block login-btn">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
