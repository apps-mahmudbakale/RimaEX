<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title> @yield('title')- Rima Agricultural Commodity Exchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Rima Agricultural Commodity Exchange">
    <meta name="author" content="Mahmud Bakale">
    <meta name="description" content="Agricultural Commodity Exchange">
    <meta name="keywords" content="Commodity Exchange, Rima, Agricultural Exchange, Mahmud Bakale" />
    <link rel="stylesheet" href="{{ asset('css/crypto-bundle.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
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
            <div id="register-page">
                <div class="main-wrap">
                     <!-- #### HEADER ####-->
                     <header class="app-bar header" id="header">
                        <div class="container">
                            <div class="header-content">
                                <nav class="nav-menu flex-grow-1">
                                    <div class="logo flex-grow-1 start-mobile"><a href="{{route('welcome')}}"><img
                                                    src="{{ asset('img/logo-black.png') }}" alt="logo" style="width: 215px; height:56px;"></a></div>
                                    <nav class="user-menu">
                                        @if(request()->is('login'))
                                        <a class="btn secondary waves-effect"
                                            href="{{route('register')}}">register</a> 
                                            @elseif(request()->is('register'))
                                            <a class="btn secondary waves-effect"
                                            href="{{route('login')}}">login</a> 
                                            @endif
                                            <span
                                            class="spacer vertical-divider show-md-up"></span>
                                        <div class="menu-setting">
                                            <div class="setting"><button
                                                    class="btn btn-icon waves-effect btn-small dropdown-trigger ma-1"
                                                    data-target="dropdown_config" data-align="left" type="button"><i
                                                        class="icon material-icons"
                                                        id="setting_icon">settings</i></button>
                                                <div class="dropdown-content setting" id="dropdown_config">
                                                    <ul class="collection with-header">
                                                        <li class="collection-header">theme mode</li>
                                                        <li class="collection-item no-hover pl-4">
                                                            <div class="flex-menu">
                                                                <div class="switch"><label>light <input
                                                                            id="theme_switcher" type="checkbox"><span
                                                                            class="lever"></span> dark</label></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </nav>
                            </div>
                        </div>
                    </header><!-- #### END HEADER ####-->
                    @yield('content')
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/crypto-bundle.min.js') }}" type="text/javascript"></script>
</body>

</html>
