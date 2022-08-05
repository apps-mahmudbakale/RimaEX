@extends('layouts.app')
@section('title','Sign Up')
@section('content')
  <!-- Start Page Title -->
  <div class="page-title-area" style="padding-top: 120px; padding-bottom:0px;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h2>Sign Up & Start Trading</h2>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
    <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    <div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
    <div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
    <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
</div>
<!-- End Page Title -->

<!-- Start Login Area -->
<div class="ptb-80">
    <div class="container">
        <div class="auth-form">
            <div class="auth-head">
                <a href="{{ route('login') }}">
                    <img src="assets/img/favicon.png">
                </a>
                <p>Have an account Already? <a href="{{ route('login') }}">Sign In</a></p>
            </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="Firstname" autofocus>

                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="Lastname" autofocus>

                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Occupation</label>
                    <select name="occupation" id="occupation" class="form-control">
                        <option value="">Choose....</option>
                        <option value="Student">Student</option>
                        <option value="Entrepreneur">Entrepreneur</option>
                        <option value="Employee">Employee</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone NUmber</label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="Firstname" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                {{-- <div class="mb-3">
                    <a href="">Forgot Password</a>
                </div> --}}
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
</div>
<!-- End Login Area -->
@endsection
