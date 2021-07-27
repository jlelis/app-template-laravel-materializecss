@extends('layouts.app')

@section('title', $title = __('Confirm Password'))

@section('content')
<div class="row">
    <br>
    <div class="col s12 m6 l4 offset-m1 offset-l4">
        <div class="card">
            <div class="card-content">
                <div class="card-title">{{ $title }}</div>
                <p>{{ __('Please confirm your password before continuing.') }}</p>

                <form class="row form-horizontal" role="form" method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="input-field col s12 @error('password') has-error @enderror">
                        <input id="password" type="password" class="validate" name="password" required autocomplete="current-password">
                        <label for="password">{{ __('Password') }}</label>
                        @error('password')
                            <span class="red-text">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light mb-3">{{ __('Confirm Password') }}</button>
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
