@extends('layouts.auth')
@section('title', 'Login')
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
                                                    data-class="use-text-subtitle">Welcome back</h4>
                                            </div>
                                            <div class="separator">
                                                <p>Login & Start Trading</p>
                                            </div>
                                            <form action="{{route('login')}}" method="POST" id="login_form">
                                                @csrf
                                                <div class="row spacing3 mb-0">
                                                    <div class="col-sm-12">
                                                        <div class="input-field filled"><input
                                                                class="validate" id="email" type="email"
                                                                name="email" required> <label
                                                                for="email">Email</label></div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="input-field filled"><input
                                                                class="validate" id="password"
                                                                type="password" name="password"
                                                                required> <label
                                                                for="password">Password</label></div>
                                                    </div>
                                                </div>
                                                <div class="form-helper mt-sm-4">
                                                    <div class="form-control-label"><label><input
                                                                class="filled-in secondary"
                                                                type="checkbox">
                                                            <span>Remember</span></label></div><a
                                                        class="btn-flat button-link" href="#">Forgot
                                                        Password</a>
                                                </div>
                                                <div class="btn-area"><button
                                                        class="btn primary btn-large block waves-effect"
                                                        type="submit">Continue</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hidden-sm-down">
                                    <div class="greeting">
                                        <h4 class="use-text-title2 use-text-primary pb-2">Please login
                                            to continue</h4>
                                        <h6 class="use-text-subtitle2">A platform with efficient
                                            integration of many features and so much more</h6>
                                        <div class="img"><img class="img-2d3d"
                                                src="https://res.cloudinary.com/skyrev/image/upload/v1613841817/skyrev/crypto/login_3d_2x_cxu18l.png"
                                                data-2d="https://res.cloudinary.com/skyrev/image/upload/v1613841818/skyrev/crypto/login_2d_2x_q3shbu.png"
                                                data-3d="https://res.cloudinary.com/skyrev/image/upload/v1613841817/skyrev/crypto/login_3d_2x_cxu18l.png"
                                                alt="login"></div>
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
