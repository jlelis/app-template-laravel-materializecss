@extends('layouts.app')

@section('title', $title = __('Reset Password'))

@section('content')
<div class="row">
    <br>
    <div class="col s12 m6 l4 offset-m1 offset-l4">
        <div class="card">
            <div class="card-content">
                <div class="card-title">{{ $title }}</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group @error('email') has-error @enderror">
                        <label for="email" class="col-md-4 control-label">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <div class="red-text">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="section form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="material-icons left">send</i>{{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
