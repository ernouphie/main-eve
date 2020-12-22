@extends('layouts.head')

<div class="container">
    <div class="row justify-content-center">
        <div class="form-group row m-5">
            <img src="images/login/logo.png" width="210px" height="120px" class="float-center">
        </div>
        <div class="col-sm-8 offset-sm-2 mb-5">
            <form method="POST" action="{{ route('login') }}">
            @csrf

                <div class="form-group row">
                    <label for="email" class="col-sm-3">E-mail Address</label>
                    <div class="col-sm-5">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus autocomplete>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-3">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-5 offset-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2 offset-sm-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="col-sm-5">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>