@extends('layouts.app')

@section('title', $title = config('app.name', 'Laravel'))

@section('content')
<div class="row">
    <br>
    <div class="col s12 m6 l4 offset-m1 offset-l4">
        <div class="card">
            <div class="card-content">
                <div class="right-align">
                    <a href="{{ route('login') }}" class="waves-effect waves-light btn">{{ __('Login') }}</a>
                    <a href="{{ route('register') }}" class="waves-effect waves-light btn">{{ __('Register') }}</a>
                </div>
            </div>
            <div class="card-action center-align">
                <h2>Welcome!</h2>
            </div>
        </div>
    </div>
</div>
@endsection
