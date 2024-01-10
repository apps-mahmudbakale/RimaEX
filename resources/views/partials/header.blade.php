 <!-- #### HEADER ####-->
 <div class="sidenav mobile-nav" id="slide_menu">
    <div class="side-multilv">
        <div class="collection side-multilv">
            <ul class="collapsible expandable">
                <li class="collection-item"><a class="sidenav-close waves-effect menu-list"
                    href="{{route('welcome')}}">Home</a></li>
                <li class="collection-item"><a class="sidenav-close waves-effect menu-list"
                        href="{{route('about')}}">about us</a></li>
                <li class="collection-item"><a class="sidenav-close waves-effect menu-list"
                        href="">Updates</a></li>
                <li class="collection-item"><a class="sidenav-close waves-effect menu-list"
                        href="">contact us</a></li>
            </ul>
        </div>
        <div class="dropdown-divider"></div>
        <div class="collection">
            <ul>
                <li class="collection-item"><a class="sidenav-close waves-effect menu-list"
                        href="{{route('login')}}">Login</a></li>
                <li class="collection-item"><a class="sidenav-close waves-effect menu-list"
                        href="{{route('register')}}">register</a></li>
            </ul>
        </div>
    </div>
</div>
<header class="app-bar header market" id="header">
    <div class="container">
        <div class="header-content">
            <nav class="nav-menu"><button
                    class="btn-icon waves-effect sidenav-trigger hamburger hamburger--spin show-md-down"
                    id="mobile_menu" type="button" data-target="slide_menu"><span
                        class="hamburger-box"><span
                            class="bar hamburger-inner"></span></span></button>
                <div class="logo"><a href="{{route('welcome')}}"><img src="{{asset('img/logo-black.png')}}" alt="logo" style="width: 215px; height:56px;"></a></div>
                <div class="scrollactive-nav scrollnav show-lg-up multi-menu">
                    <ul class="main-menu">
                        <li><a class="btn btn-flat anchor-link waves-effect" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li><a class="btn btn-flat anchor-link waves-effect" href="{{route('about')}}">about us</a>
                        </li>
                        <li><a class="btn btn-flat anchor-link waves-effect"
                                href="">updates</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect"
                                href="">contact us</a></li>
                    </ul>
                </div>
                <nav class="user-menu"><a class="btn btn-flat waves-effect show-sm-up"
                        href="{{route('login')}}">Login</a> <a class="btn waves-effect primary show-sm-up"
                        href="{{route('register')}}">register</a> <span
                        class="spacer vertical-divider show-lg-up"></span>
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
            <div id="container_menu"></div>
        </div>
    </div>
</header><!-- #### END HEADER ####-->