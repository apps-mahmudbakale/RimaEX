<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Rima Agricultural Commodity Exchange">
    <meta name="author" content="Mahmud Bakale">
    <meta name="description" content="Agricultural Commodity Exchange">
    <meta name="keywords" content="Commodity Exchange, Rima, Agricultural Exchange, Mahmud Bakale" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rima Agricultural Comodity Exchange') }} | Homepage</title>

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('css/crypto-bundle.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="invisible-deco"><svg width="38px" height="43px" viewbox="0 0 38 43" version="1.1">
            <defs>
                <lineargradient id="titleLinearGradient-1" x1="34.5063846%" y1="15.1303808%" x2="20.8153155%"
                    y2="110.664023%">
                    <stop stop-color="#9C27B0" offset="0%"></stop>
                    <stop stop-color="#FFA000" offset="100%"></stop>
                </lineargradient>
            </defs>
            <defs>
                <lineargradient id="hexaLinearGradient-3" x1="66.8412844%" y1="30.62426%" x2="-21.0581447%"
                    y2="100%">
                    <stop stop-color="#FFA000" offset="0%"></stop>
                    <stop stop-color="#FFECB3" offset="100%"></stop>
                </lineargradient>
            </defs>
            <defs>
                <lineargradient id="hexaLinearGradient-2" x1="66.8412844%" y1="30.62426%" x2="-21.0581447%"
                    y2="100%">
                    <stop stop-color="#9C27B0" offset="0%"></stop>
                    <stop stop-color="#E1BEE7" offset="100%"></stop>
                </lineargradient>
            </defs>
            <defs>
                <lineargradient id="frmDecoLinearGradient-1" x1="33.650521%" y1="14.3140713%" x2="18.9688557%"
                    y2="110.664023%">
                    <stop stop-color="#9C27B0" offset="0%"></stop>
                    <stop stop-color="#FFA000" offset="100%"></stop>
                </lineargradient>
            </defs>
        </svg></div>
    <div class="m-application theme--light transition-page" id="app">
        <div class="loading"></div>
        <div class="m-content coinz coinz-var" id="main-wrap">
            <div id="home">
                <div class="main-wrap">
                    <div class="hidden-md-down">
                        <div class="market-carousel">
                            <div class="slick-carousel" id="market_carousel">
                                @foreach ($commodities as $commodity )
                                <div class="item">
                                    <div class="coin">
                                        <div class="avatar-img logo"><img src="{{asset('img/xrp.png')}}"></div> {{ $commodity->commodity_code}} {{number_format($commodity->current_price)}} (<span class="{{ $commodity->getCommodityPriceChange() < 0 ? 'down' : 'up' }}"><i></i>{{$commodity->getCommodityPriceChangePercentageFormatted()}}</span>)
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @include('partials.header')

                @yield('content')

                @include('partials.footer')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/crypto-bundle.min.js') }}"></script>
</body>

</html>
