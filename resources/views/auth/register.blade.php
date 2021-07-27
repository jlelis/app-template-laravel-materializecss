@extends('layouts.app')

@section('title', $title = __('Register'))

@section('content')
<div class="row">

    <div class="col s12 m6 l4 offset-m1 offset-l4">
        <div class="card">
            <div class="card-content">
                <div class="card-title">{{ $title }}</div>
                <form class="row form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-field col s12 @error('name') has-error @enderror">
                        <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <label for="name">{{ __('Name') }}</label>
                        @error('name')
                            <span class="red-text">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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
                        <input type="password" name="password" class="validate" min="8" id="password" required autocomplete="new-password">
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
                        <button type="submit" class="btn waves-effect waves-light mb-3">{{ __('Register') }}</button>
                        <div>
                            <a href="{{ route('login') }}">{{ __('Have an account?') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
