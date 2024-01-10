@extends('layouts.admin')

@section('title', 'Verify Email')
@section('content')
        <div class="container p-0">
            <p><br></p>
            <h1 class="h3 mb-3">Verify Your Email Address</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card justify-content-center">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Email Verification</h5>
                        </div>
                        <hr>
                        <div class="card-body">
                            @if (session('resent'))
                            <div class="alert alert-primary alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    <strong>Hello there!</strong> {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            </div>
                        @endif
    
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ __('click here to request another') }}</button>.
                        </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
