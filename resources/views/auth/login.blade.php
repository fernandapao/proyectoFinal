@extends('layouts.appLogin')

@section('content')
    <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
            <!-- Logo -->
            <div class="app-brand mb-4">
                <a href="/" class="app-brand-link gap-2">

                    <span class="app-brand-logo demo">
                        <img src="{{ asset('images/m-logo.png') }}" class="img-fluid" alt="">
                    </span>
                </a>
            </div>
            <!-- /Logo -->
            <h3 class="mb-1">Bienvenido a AeroAsist ! 👋</h3>
            <p class="mb-4">Inicie sesión en su cuenta y comience la aventura.</p>


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                <small>{{ __('Forgot Your Password?') }}</small>
                            </a>
                        @endif
                    </div>


                    <div class="col-md-12 form-password-toggle">
                        <div class="input-group input-group-merge">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                aria-describedby="password" required autocomplete="current-password">
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        </div>


                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary d-grid w-100 waves-effect waves-light">
                            {{ __('Login') }}
                        </button>



                    </div>
                </div>
            </form>





        </div>
    </div>


@endsection
