@extends('layouts.app')

@section('title', $title = __('Login'))

@section('content')
<div class="row">
    <br>
    <div class="col s12 m6 l4 offset-m1 offset-l4">
        <div class="card">
            <div class="card-content">
                <div class="card-title">{{ $title }}</div>
                <form class="row form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-field col s12 @error('email') has-error @enderror">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        @error('email')
                            <div class="col s12">
                                <span class="red-text">
                                    <strong>{{ $message }}</strong>
                                </span>
                            </div>
                        @enderror
                    </div>

                    <div class="input-field col s12 @error('password') has-error @enderror">
                        <input type="password" name="password" class="validate" min="8" id="password" required autocomplete="current-password">
                        <label for="password">{{ __('Password') }}</label>
                        @error('password')
                            <span class="red-text">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field col s12">
                        <div>
                            <label for="remember">
                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <span>{{ __('Remember Me') }}</span>
                            </label>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light mb-3">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                            <div>
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
