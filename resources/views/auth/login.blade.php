@extends('layouts.auth')
@section('title', 'Login')

@section('content')
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">{{ __('Login') }}</h3>
        </div>
        <form class="kt-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="{{ __('E-Mail Address') }}">
                @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="row kt-login__extra">
                <div class="col">
                    <label class="kt-checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        <span></span>
                    </label>
                </div>
                <div class="col kt-align-right">
                    @if (Route::has('password.request'))
                        <a href="{{route('password.request')}}" class="kt-login__link">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <div class="kt-login__actions">
                <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">{{ __('Login') }}</button>
            </div>
        </form>
    </div>
{{--    <div class="kt-login__account">--}}
{{--        <span class="kt-login__account-msg">--}}
{{--            Don't have an account yet ?--}}
{{--        </span>--}}
{{--        &nbsp;&nbsp;--}}
{{--        <a href="{{route('register')}}" class="kt-login__account-link">{{ __('Register') }}</a>--}}
{{--    </div>--}}
@endsection
