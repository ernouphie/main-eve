@extends('layouts.head')

<div class="container">
    <div class="row justify-content-center">

        <div class="form-group row m-5">
            <img src="images/login/logo.png" width="210px" height="120px" class="float-center">
        </div>

        <div class="col-sm-8 offset-sm-2 mb-5">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-3">Name</label>
                    <div class="col-sm-5">
                        <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus autocomplete>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3">E-mail Address</label>
                    <div class="col-sm-5">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-3">Phone</label>
                    <div class="col-sm-5">
                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-3">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-sm-3">Confirm Password</label>
                    <div class="col-sm-5">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-5 offset-sm-3 mt-3">
                        <button type="submit" class="btn btn-primary pl-5 pr-5">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>