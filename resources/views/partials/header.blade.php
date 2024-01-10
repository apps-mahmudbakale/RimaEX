
        <header id="header" class="header">
            <!--style="padding: 1px 10px;"-->
                <nav class="navbar fixed-top navbar-expand-lg bg-tra navbar-dark scroll" style="border-bottom: 4px solid; border-bottom-color: #0c5587d6;">
                    <div class="container">
                        <!-- LOGO IMAGE -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 256 x 80 pixels) -->
                        <a href="/" class="navbar-brand logo-black"><img src="{{ asset('agile-logo.png') }}"
                                width="170" height="60" alt="header-logo" style="width:88px;"></a>
                        <a href="{{route('welcome')}}" class="navbar-brand logo-white"><img src="{{ asset('agile-logo.png') }}"
                                width="170" height="60" alt="header-logo" style="width:88px;"></a>


                        <!-- Responsive Menu Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-bar-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <!-- Navigation Menu -->
                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <!-- <li class="nav-item nl-simple"><a class="nav-link" href="">HOME</a></li> -->
                                <li class="nav-item nl-simple"><a class="nav-link" href="{{route('about')}}">ABOUT</a></li>
                                <li class="nav-item nl-simple"><a class="nav-link" href="{{route('media')}}">GALLERY</a></li>
                                <li class="nav-item nl-simple"><a class="nav-link" href="">REPORTS</a></li>
                                <li class="nav-item nl-simple"><a class="nav-link" href="{{route('news')}}">NEWS & EVENTS</a></li>
                                <li class="nav-item nl-simple"><a class="nav-link" href="">CONTACT</a></li>
                            </ul>


                            <!-- Header Single Button
  <span class="navbar-text white-color">
     <a href="download-1.html" class="btn btn-skyblue black-hover">Download</a>
    </span>	-->

                            <!-- Header Buttons Group -->
                            <span class="navbar-text header-btn-group white-color">
                                <a href="https://pmis.agilekano.ng" class="btn btn-tra-white green-hover">PMIS</a>
                                <a href="https://emis.agilekano.ng" class="btn btn-tra-white green-hover">EMIS</a>
                                <!-- <a href="" class="btn btn-skyblue black-hover">CCT PORTAL</a> -->
                            </span>
                        </div> <!-- End Navigation Menu -->
                    </div> <!-- End container -->
                </nav> <!-- End navbar -->
        </header> <!-- END HEADER -->