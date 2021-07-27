@extends('layouts.app')

@section('title', $title = __('Verify Your Email Address'))

@section('content')
<div class="row">
    <br>
    <div class="col s12 m10 l8 offset-m1 offset-l2">
        <div class="card">
            <div class="card-content">
                <div class="card-title"><i class="material-icons left">warning</i>{{ $title }}</div>
                <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                <p>{{ __('If you did not receive the email,') }}</p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="section form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('click here to request another') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @if (session('resent'))
        <script>
            M.toast({html: "{{ __('A fresh verification link has been sent to your email address.') }}", classes: 'rounded'});
        </script>
    @endif
@endsection
