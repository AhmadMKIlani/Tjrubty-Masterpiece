@extends('../../publicSite.layout.master')



@section('title','Login')
@section('content')
<section class="ftco-section" style="background: -webkit-gradient(linear, left top, right top, from(#75ce6d), to(#bae5bf));">
    <div class="container mt-5">
        <div class="row justify-content-center mb-5 pb-2 ">
            <div class="container  py-5">
                <div class="row flex-column align-items-center justify-content-center ">
                    <div class="col-md-8 ">
                        <div class="card">
                            <div class="card-header text-center"><h2>{{ __('Login') }}</h2></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail
                                            Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{
                                            __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4 float-right mt-2">
                                            <button type="submit" class="btn btn-primary ">
                                                {{ __('Login') }}
                                            </button>
                                            <br>
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                            <div>
                                                <p>No account?
                                                    <a href="{{ route('register') }}" style=" text-decoration: underline;">Please Register!</a>
                                                </p>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
    @endsection