@extends('layouts.app')
@section('content')
    <main class="container-wrap">
        <!-- ##### BANNER #####-->
        <section id="banner">
            <div class="banner-slider">
                <div class="banner-wrap">
                    <div class="root">
                        <div class="banner-wrap">
                            <div class="carousel">
                                <div class="slider" id="banner_slider">
                                    <div class="slide center-content" id="slide3">
                                        <div class="inner">
                                            <div class="container" style="padding: 13px 46px;">
                                                <div class="row justify-content-end">
                                                    <div class="col-12 px-lg-12 px-0">
                                                        <div class="text text-center">
                                                            <div class="title-wrap">
                                                                <div class="title title-center">
                                                                    <h4 class="use-text-title2">Agricultural Commodities market with the
                                                                        right amount.</h4>
                                                                </div>
                                                            </div>
                                                            <h5 class="use-text-subtitle2">This
                                                                awesome trading platform provides
                                                                innovative trading in a more streamlined
                                                                approach.</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 py-3">
                                                        <div class="img h-banner"><img class="img-2d3d"
                                                                src="{{asset('img/pyramid.png')}}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ##### END BANNER #####-->
        <!-- ##### ABOUT #####-->
        <section class="space-top space-top-short-sm" id="about">
            <div class="main-feature">
                <div class="modal video-popup" id="video_modal">
                    <div class="modal-content">
                        <div class="headline">
                            <h4>Digital currency leads at market in the right amount.</h4><button
                                class="btn-icon modal-close waves-effect"><i class="material-icons">close</i></button>
                        </div>
                        <div class="text-center">
                            <div id="video_iframe"></div>
                        </div>
                    </div>
                </div>
                <div class="container fixed-width">
                    <div class="row spacing6">
                        <div class="col-md-6 px-6 order-lg-last">
                            <div class="title-main align-left">
                                <div class="deco-title"><svg width="38px" height="43px" viewbox="0 0 38 43"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                                fill="url(#titleLinearGradient-1)"></path>
                                        </g>
                                    </svg></div>
                                <h4>Buy / Sell Commodities</h4>
                            </div>
                            <p class="pb-2 use-text-subtitle2 text-center text-md-start">1,778,912
                                members are already on board, what are you waiting for?</p>
                            <div class="card video">
                                <figure><img
                                        src="https://res.cloudinary.com/imajin/image/upload/v1583517264/crypto/feature_dm2dpl.jpg"
                                        alt="cover"></figure><button
                                    class="btn-icon play-btn modal-trigger waves-effect" data-target="video_modal"
                                    data-video="QPMkYyM2Gzg"><i class="ion-ios-play-outline"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 px-6 feature-wrap">
                            <div class="deco"><svg width="377px" height="440px" viewbox="0 0 377 440"
                                    version="1.1">
                                    <defs>
                                        <lineargradient id="primary-hexa" x1="34.1359172%" y1="14.3140713%"
                                            x2="132.662444%" y2="100%">
                                            <stop stop-color="#E1BEE7" offset="0%"></stop>
                                            <stop stop-color="#9C27B0" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="secondary-hexa" x1="56.1985951%" y1="11.7667404%"
                                            x2="20.6835068%" y2="110.664023%">
                                            <stop stop-color="#FFA000" offset="0%"></stop>
                                            <stop stop-color="#FFECB3" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="accent-hexa" x1="56.2159946%" y1="11.7667404%"
                                            x2="20.6012149%" y2="110.664023%">
                                            <stop stop-color="#D1C4E9" offset="0%"></stop>
                                            <stop stop-color="#673AB7" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Main-Feature" transform="translate(-208.000000, -968.000000)">
                                            <g transform="translate(112.000000, 782.000000)">
                                                <g id="Group-3" transform="translate(96.000000, 186.000000)">
                                                    <path
                                                        d="M0,293.262681 C0,308.794648 8.32197774,323.147545 21.8317273,330.913528 L166.668273,414.175512 C180.178022,421.941496 196.821978,421.941496 210.331727,414.175512 L355.168273,330.913528 C368.678022,323.147545 377,308.794648 377,293.262681 L377,126.738016 C377,111.205352 368.678022,96.8531518 355.168273,89.0864719 L210.331727,5.8244876 C196.821978,-1.94149587 180.178022,-1.94149587 166.668273,5.8244876 L21.8317273,89.0864719 C8.32197774,96.8531518 0,111.205352 0,126.738016 L0,293.262681 Z"
                                                        fill="url(#secondary-hexa)"></path>
                                                    <path
                                                        d="M315,360.877113 C315,363.465775 316.368601,365.857924 318.590364,367.152255 L342.409636,381.029252 C344.631399,382.323583 347.368601,382.323583 349.590364,381.029252 L373.409636,367.152255 C375.631399,365.857924 377,363.465775 377,360.877113 L377,333.123003 C377,330.534225 375.631399,328.142192 373.409636,326.847745 L349.590364,312.970748 C347.368601,311.676417 344.631399,311.676417 342.409636,312.970748 L318.590364,326.847745 C316.368601,328.142192 315,330.534225 315,333.123003 L315,360.877113 Z"
                                                        fill="url(#primary-hexa)"></path>
                                                    <path
                                                        d="M15,405.298115 C15,409.550915 17.2515696,413.480875 20.9067273,415.607276 L60.0932727,438.4052 C63.7484304,440.5316 68.2515696,440.5316 71.9067273,438.4052 L111.093273,415.607276 C114.74843,413.480875 117,409.550915 117,405.298115 L117,359.702076 C117,355.449085 114.74843,351.519315 111.093273,349.392724 L71.9067273,326.5948 C68.2515696,324.4684 63.7484304,324.4684 60.0932727,326.5948 L20.9067273,349.392724 C17.2515696,351.519315 15,355.449085 15,359.702076 L15,405.298115 Z"
                                                        fill="url(#accent-hexa)"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                            <div class="counter">
                                <div class="lower">
                                    <div class="wow flipInY" data-wow-offset="380" data-wow-duration="0.5s">
                                        <div class="card paper"><span class="ion-ios-ionic-outline"></span>
                                            <h6 class="title">+600</h6>
                                            <p>Supported Coins</p>
                                        </div>
                                    </div>
                                    <div class="wow flipInY" data-wow-offset="300" data-wow-duration="0.5s">
                                        <div class="card paper"><span class="ion-ios-people-outline"></span>
                                            <h6 class="title">+200K</h6>
                                            <p>Registered Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="higher">
                                    <div class="wow flipInY" data-wow-offset="390" data-wow-duration="0.5s">
                                        <div class="card paper"><span class="ion-ios-box-outline"></span>
                                            <h6 class="title">+20M</h6>
                                            <p>Open Wallets</p>
                                        </div>
                                    </div>
                                    <div class="wow flipInY" data-wow-offset="320" data-wow-duration="0.5s">
                                        <div class="card paper"><span class="ion-ios-heart-outline"></span>
                                            <h6 class="title">+50M</h6>
                                            <p>USD Invested</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ##### ABOUT #####-->
        <!-- ##### FEATURE #####-->
        <section class="space-top-short" id="feature">
            <div class="more-feature">
                <div class="container fixed-width-lg-up">
                    <div class="item">
                        <div class="row spacing6">
                            <div class="col-md-6">
                                <div class="text text-start text-sm-center"><span class="fa fa-play"></span>
                                    <div class="title-main align-left">
                                        <div class="deco-title"><svg width="38px" height="43px" viewbox="0 0 38 43"
                                                version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <path
                                                        d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                                        fill="url(#titleLinearGradient-1)"></path>
                                                </g>
                                            </svg></div>
                                        <h4>Smart Investments</h4>
                                    </div>
                                    <p class="use-text-subtitle2 text-center text-md-start">Time is
                                        money. Don’t wait for a transaction to end: open several
                                        positions at the same time and continue trading.</p>
                                </div>
                            </div>
                            <div class="col-md-6 py-md-0 px-6">
                                <div class="wow fadeInRightShort" data-wow-offset="100" data-wow-delay="0.4s"
                                    data-wow-duration="0.3s">
                                    <figure class="illustration"><img class="img-2d3d" src="{{asset('img/Commodity Market Growth.jpeg')}}"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row spacing6 align-items-center">
                            <div class="col-md-6 py-md-0 px-6 order-md-last">
                                <div class="text text-left text-md-center"><span class="ion-ios-locked-outline"></span>
                                    <div class="title-main align-left">
                                        <div class="deco-title"><svg width="38px" height="43px" viewbox="0 0 38 43"
                                                version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <path
                                                        d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                                        fill="url(#titleLinearGradient-1)"></path>
                                                </g>
                                            </svg></div>
                                        <h4>Security First</h4>
                                    </div>
                                    <p class="use-text-subtitle2 text-center text-md-start">Security
                                        will always be a top priority in every decision we make, we
                                        incorporate multiple layers of protection.</p>
                                </div>
                            </div>
                            <div class="col-md-6 py-md-0 px-6 order-md-first">
                                <div class="wow fadeInRightShort" data-wow-offset="200" data-wow-delay="0.3s"
                                    data-wow-duration="0.3s">
                                    <figure class="illustration"><img class="img-2d3d"
                                            src="https://res.cloudinary.com/skyrev/image/upload/v1613841816/skyrev/crypto/feature2_3d_2x_j2ku08.png"
                                            data-2d="https://res.cloudinary.com/skyrev/image/upload/v1613841816/skyrev/crypto/feature2_2d_2x_kvgcm0.png"
                                            data-3d="https://res.cloudinary.com/skyrev/image/upload/v1613841816/skyrev/crypto/feature2_3d_2x_j2ku08.png"
                                            alt="feature"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ##### END FEATURE #####-->
        <!-- ##### BENEFIT #####-->
        <section id="benefit">
            <div class="root">
                <div class="deco-bg"><svg>
                        <g id="main" stroke="none" stroke-width="1" fill-rule="evenodd">
                            <g id="Group-2" transform="translate(0.000000, -49.000000)">
                                <g id="Group-4" transform="translate(0.000000, 0.400404)">
                                    <path
                                        d="M411.526795,197.724847 C411.526795,206.237259 416.080019,214.103474 423.471643,218.35968 L502.716426,263.992045 C510.108049,268.248252 519.214499,268.248252 526.606122,263.992045 L605.850905,218.35968 C613.242529,214.103474 617.795753,206.237259 617.795753,197.724847 L617.795753,106.459735 C617.795753,97.9469406 613.242529,90.0811078 605.850905,85.8245197 L526.606122,40.1921548 C519.214499,35.9359484 510.108049,35.9359484 502.716426,40.1921548 L423.471643,85.8245197 C416.080019,90.0811078 411.526795,97.9469406 411.526795,106.459735 L411.526795,197.724847 Z"
                                        transform="translate(514.661274, 152.092100) rotate(-330.000000) translate(-514.661274, -152.092100) ">
                                    </path>
                                    <path
                                        d="M0,430.788547 C0,439.30096 4.55322462,447.167175 11.9448479,451.423381 L91.1896314,497.055746 C98.5812547,501.311952 107.687704,501.311952 115.079327,497.055746 L194.324111,451.423381 C201.715734,447.167175 206.268959,439.30096 206.268959,430.788547 L206.268959,339.523436 C206.268959,331.010641 201.715734,323.144809 194.324111,318.88822 L115.079327,273.255856 C107.687704,268.999649 98.5812547,268.999649 91.1896314,273.255856 L11.9448479,318.88822 C4.55322462,323.144809 0,331.010641 0,339.523436 L0,430.788547 Z"
                                        transform="translate(103.134479, 385.155801) rotate(-360.000000) translate(-103.134479, -385.155801) ">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg></div>
                <div class="container max-md fixed-width">
                    <div class="wrapper">
                        <div class="desc">
                            <div class="title-main align-center">
                                <div class="deco-title"><svg width="38px" height="43px" viewbox="0 0 38 43"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                                fill="url(#titleLinearGradient-1)"></path>
                                        </g>
                                    </svg></div>
                                <h4>Provide everything to monitor your assets</h4>
                            </div>
                            <p class="use-text-subtitle2">This international trading platform provides
                                innovative tokens a more streamlined approach.</p>
                            <div class="carousel">
                                <div class="slider" id="benefit_slider">
                                    <div class="slide">
                                        <div class="border">
                                            <figure><img
                                                    src="https://res.cloudinary.com/imajin/image/upload/v1609932956/crypto/screen1_ddafvc.jpg"
                                                    alt="screen"></figure>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="border">
                                            <figure><img
                                                    src="https://res.cloudinary.com/imajin/image/upload/v1609932954/crypto/screen5_gayjyn.jpg"
                                                    alt="screen"></figure>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="border">
                                            <figure><img
                                                    src="https://res.cloudinary.com/imajin/image/upload/v1609932952/crypto/screen3_wvhga3.jpg"
                                                    alt="screen"></figure>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="border">
                                            <figure><img
                                                    src="https://res.cloudinary.com/imajin/image/upload/v1609932953/crypto/screen4_xknned.jpg"
                                                    alt="screen"></figure>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="border">
                                            <figure><img
                                                    src="https://res.cloudinary.com/imajin/image/upload/v1609932953/crypto/screen2_hktnyj.jpg"
                                                    alt="screen"></figure>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="border">
                                            <figure><img
                                                    src="https://res.cloudinary.com/imajin/image/upload/v1609932956/crypto/screen6_lrw6hl.jpg"
                                                    alt="screen"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ##### END BENEFIT #####-->
        <!-- ##### VIEW MARKET #####-->
        <section class="space-top" id="top-coin">
            <div class="root">
                <div class="container carousel-header">
                    <div class="title-main align-center">
                        <div class="deco-title"><svg width="38px" height="43px" viewbox="0 0 38 43" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                        fill="url(#titleLinearGradient-1)"></path>
                                </g>
                            </svg></div>
                        <h4>View Market</h4>
                    </div>
                    <p class="use-text-subtitle2 text-center">Digital currency leads at market in the
                        right amount.</p>
                    <div class="floating-artwork">
                        <div class="slider-art">
                            <div class="deco">
                                <div class="figure show-md-up" id="art_top_coin">
                                    <div class="wow fadeInRightShort" data-wow-offset="60" data-wow-delay="0.3s"
                                        data-wow-duration="0.5s"><img class="img-2d3d img-2d3d"
                                            src="https://res.cloudinary.com/skyrev/image/upload/v1613841817/skyrev/crypto/feature3_3d_2x_mdwcdb.png"
                                            data-2d="https://res.cloudinary.com/skyrev/image/upload/v1613841816/skyrev/crypto/feature3_2d_2x_xzaize.png"
                                            data-3d="https://res.cloudinary.com/skyrev/image/upload/v1613841817/skyrev/crypto/feature3_3d_2x_mdwcdb.png"
                                            alt="top coin"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-wrap">
                    <div class="carousel">
                        <div class="slick-carousel" id="top_coin_carousel" data-length="9">
                            <div class="props item-props-first">
                                <div></div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/btc.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>BTC &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 1020</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="up"><i>▲</i>8%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">12345678<p class="use-text-caption">24h Volume
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/xrp.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>XRP &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 12.56</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="down"><i>▼</i>3%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">9087654321<p class="use-text-caption">24h
                                                    Volume</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/nem.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>NEM &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 0.3</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="up"><i>▲</i>8%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">123456<p class="use-text-caption">24h Volume
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/iot.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>IOTA &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 18.56</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="down"><i>▼</i>3%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">789123456<p class="use-text-caption">24h
                                                    Volume</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/mnr.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>MNR &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 1.45</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="up"><i>▲</i>8%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">54321<p class="use-text-caption">24h Volume
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/byc.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>BYC &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 22.34</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="down"><i>▼</i>3%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">90875643<p class="use-text-caption">24h Volume
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/iot.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>IOTA &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 0.01</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="down"><i>▼</i>3%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">98765903<p class="use-text-caption">24h Volume
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/mnr.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>MNR &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 1.45</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="up"><i>▲</i>8%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">1239874560<p class="use-text-caption">24h
                                                    Volume</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card coin-card">
                                    <div class="header-coin">
                                        <div class="avatar-img logo"><img
                                                src="https://skyone.vercel.app/crypto/assets/images/crypto/byc.png"
                                                alt="name"></div>
                                        <div class="name">
                                            <h4>BYC &nbsp;<span>USD</span></h4>
                                            <p><i class="ion-flame"></i>Top Volume</p>
                                        </div>
                                    </div>
                                    <div class="price px-2">
                                        <h3 class="use-text-title2">$ 22.34</h3>
                                    </div>
                                    <div class="property">
                                        <div class="row">
                                            <div class="col-xs-6 px-2 pb-3"><span class="down"><i>▼</i>3%</span>
                                                <p class="use-text-caption">24h Change</p>
                                            </div>
                                            <div class="col-xs-6 px-2 pb-3">56789<p class="use-text-caption">24h Volume
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="btn-floating nav prev waves-effect" id="prev_coin" type="button"><i
                                class="ion-chevron-left"></i></button> <button class="btn-floating nav next waves-effect"
                            id="next_coin" type="button"><i class="ion-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </section><!-- ##### END VIEW MARKET #####-->
        <hr>
    </main>
@endsection
