@extends('layouts.auth')
@section('title','Sign Up')
@section('content')
  
 <!-- ##### FORM #####-->
 <div class="container-general container-front">
    <div class="form-style">
        <div class="page-wrap">
            <div class="hexa-deco">
                <div class="deco-bg"></div>
            </div>
            <div class="container inner-wrap">
                <div class="auth-frame">
                    <div class="row mb-0">
                        <div class="col-md-6 px-lg-6 px-2">
                            <div class="card form-box fragment-fadeUp">
                                <div class="form-wrap">
                                    <div class="form-style">
                                        <div class="head">
                                            <h4 class="use-text-title mq-md-up"
                                                data-class="use-text-subtitle">Create new account
                                            </h4>
                                        </div>
                                        <div class="separator">
                                            <p>Sign Up & Trade</p>
                                        </div>
                                        <form id="register_form" acction="{{route('register')}}" method="POST">
                                            @csrf
                                            <div class="row spacing3 mb-0">
                                                <div class="col-sm-12">
                                                    <div class="input-field filled"><input
                                                            class="validate" id="firstname" type="text"
                                                            name="firstname" required> <label
                                                            for="firstname">First Name? *</label></div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="input-field filled"><input
                                                            class="validate" id="lastname" type="text"
                                                            name="lastname" required> <label
                                                            for="lastname">Last Name? *</label></div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="input-field filled"><input
                                                            class="validate" id="email" type="email"
                                                            name="email" required> <label
                                                            for="email">Email? *</label></div>
                                                </div>
                                                  <div class="col-sm-12">
                                                    <div class="input-field filled"><input
                                                            class="validate" id="phone" type="text"
                                                            name="phone" required> <label
                                                            for="phone">Phone Number? *</label></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-field filled mq-md-up"
                                                        data-class="me-2"><input class="validate"
                                                            id="password" type="password"
                                                            name="password" required> <label
                                                            for="password">Password</label></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-field filled mq-md-up"
                                                        data-class="ms-2"><input class="validate"
                                                            id="confirm" type="password"
                                                            name="password_confirmation"
                                                            data-validation="confirmation"
                                                            data-validation-confirm="password"
                                                            required> <label for="confirm">Confirm
                                                            Password</label></div>
                                                </div>
                                            </div>
                                            <div class="btn-area">
                                                <div class="form-helper">
                                                    <div class="form-control-label"><label><input
                                                                class="filled-in secondary"
                                                                type="checkbox" required><span>I
                                                                have read and accept the Terms of <a
                                                                    class="link" href="#">Service
                                                                    &amp; Privacy Policy
                                                                    *</a></span></label></div>
                                                </div>
                                                <div class="mt-4"><button
                                                        class="btn primary btn-large waves-effect"
                                                        type="submit">Submit</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hidden-sm-down">
                                <div class="greeting">
                                    <h4 class="use-text-title2 use-text-primary pb-2">Just register
                                        to join with us</h4>
                                    <h6 class="use-text-subtitle2">A platform with efficient
                                        integration of many features and so much more</h6>
                                    <div class="img"><img class="img-2d3d"
                                            src="https://res.cloudinary.com/skyrev/image/upload/v1613841821/skyrev/crypto/register_3d_2x_pehrg6.png"
                                            data-2d="https://res.cloudinary.com/skyrev/image/upload/v1613841820/skyrev/crypto/register_2d_2x_mznqdo.png"
                                            data-3d="https://res.cloudinary.com/skyrev/image/upload/v1613841821/skyrev/crypto/register_3d_2x_pehrg6.png"
                                            alt="registes"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- ##### END FORM #####-->
@endsection
