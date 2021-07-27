@extends('layouts.app')

@section('title', $title = __('Reset Password'))

@section('content')
<div class="row">
    <div class="col s12 m6 l4 offset-m1 offset-l4">
        <div class="card">
            <div class="card-content">
                <div class="card-title">{{ $title }}</div>

                <form class="row form-horizontal" role="form" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-field col s12 @error('email') has-error @enderror">
                        <input type="email" name="email" id="email" value="{{ $email ?? old('email') }}" class="validate" required autocomplete="email" autofocus>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        @error('email')
                            <span class="red-text">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12 @error('password') has-error @enderror">
                        <input id="password" type="password" class="validate" name="password" required autocomplete="new-password">
                        <label for="password">{{ __('Password') }}</label>
                        @error('password')
                            <span class="red-text">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12 @error('password_confirmation') has-error @enderror">
                        <input id="password-confirm" type="password" class="validate" name="password_confirmation" required autocomplete="new-password">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        @error('password_confirmation')
                            <span class="red-text">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light">{{ __('Reset Password') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
