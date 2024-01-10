@extends('layouts.welcome')
@section('content')
    <!-- HERO-6
                                         ============================================= -->
    <section id="hero-6" class="bg-scroll hero-section division"
        style="box-shadow: inset 0 0 0 1000px rgba(23 83 164 / 73%);">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <div class="col-md-6">
                    <div class="hero-6-txt mb-40 wow fadeInLeft" data-wow-duration="2.5s" data-wow-delay="0.4s"
                        style="visibility: visible; animation-duration: 2.5s; animation-delay: 0.4s; animation-name: fadeInLeft;">

                        <!-- Title -->
                        <h3 class="h3-lg">Adolescent Girls Initiative for Learning and Empowerment (AGILE) Project</h3>

                        <!-- Text -->
                        <p class="p-md">To improve secondary education
                            opportunities among girls in targeted areas in Kano State.

                        </p>

                        {{-- <!-- Buttons Group -->
                            <div class="btns-group mb-25">
                                <a href="https://emis.go.ug/institution/register-with-emis-number" class="btn btn-green tra-white-hover mr-10">REGISTER NOW</a>
                                <a href="https://emis.go.ug/institution/login" class="btn btn-tra-white black-hover">EMIS LOGIN</a>
                            </div>
    
                            <!-- OS Prerequisite -->
                            <span class="os-version">To find your EMIS Number click <a href="https://emis.go.ug/emis/search">here and search </a> </span> --}}

                    </div>
                </div>

                <!-- HERO IMAGE -->
                <div class="col-md-6">
                    <div class="hero-6-img wow fadeInRight" data-wow-duration="2.5s" data-wow-delay="0.8s">
                        <img class="img-fluid" src="{{ asset('m3.png') }}" style="max-width: 59%;" alt="emis_smile">
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->

        <!-- SECTION OVERLAY -->
        <div class="bg-fixed white-overlay-top"></div>
    </section> <!-- END HERO-6 -->


    <!-- FEATURES-2
                                                ============================================= -->
    <section id="features-2" class="wide-60 features-section division">
        <div class="container">
            <p style="line-height: 50px; text-align:justify;">The AGILE Project works with the Federal Government of Nigeria
                and supports Kano State to improve secondary education opportunities among adolescent girls. It aims to
                achieve this through targeted intervention on the key economic principles of demand and supply, as well as
                the systemic constraints that militate against girls’ education.</p>
        </div> <!-- End container -->
    </section> <!-- END FEATURES-2 -->

    <div id="statistic-1" class="bg-globe bg-blue statistic-section division">
        <div class="container white-color" style="max-width: 1350px">
            <div class="row">

                <!-- STATISTIC BLOCK #2 -->
                <div class="col-sm-6 col-md-2">
                    <div class="statistic-block icon-xs wow fadeInUp" data-wow-delay="0.6s">

                        <!-- Icon  -->
                        <span class="flaticon-096-like"></span>

                        <!-- Text -->
                        <h5 class="statistic-number">21,440</h5>
                        <p class="txt-400">Stats One</p>

                    </div>
                </div>


                <!-- STATISTIC BLOCK #3 -->
                <div class="col-sm-6 col-md-2">
                    <div class="statistic-block icon-xs wow fadeInUp" data-wow-delay="0.8s">

                        <!-- Icon  -->
                        <span class="flaticon-064-menu"></span>

                        <!-- Text -->
                        <h5 class="statistic-number">47,143</h5>
                        <p class="txt-400">Stats Two</p>

                    </div>
                </div>


                <!-- STATISTIC BLOCK #4 -->
                <div class="col-sm-6 col-md-2">
                    <div class="statistic-block icon-xs wow fadeInUp" data-wow-delay="1s">

                        <!-- Icon  -->
                        <span class="flaticon-026-star"></span>

                        <!-- Text -->
                        <h5 class="statistic-number">8,108</h5>
                        <p class="txt-400">Stats Threes</p>

                    </div>
                </div>


                <!-- STATISTIC BLOCK #5 -->
                <div class="col-sm-6 col-md-2">
                    <div class="statistic-block icon-xs wow fadeInUp" data-wow-delay="1s">

                        <!-- Icon  -->
                        <span class="flaticon-026-star"></span>

                        <!-- Text -->
                        <h5 class="statistic-number">1,390</h5>
                        <p class="txt-100">Stats Four</p>

                    </div>
                </div>


                <!-- STATISTIC BLOCK #6 -->
                <div class="col-sm-6 col-md-2">
                    <div class="statistic-block icon-xs wow fadeInUp" data-wow-delay="1s">

                        <!-- Icon  -->
                        <span class="flaticon-026-star"></span>

                        <!-- Text -->
                        <h5 class="statistic-number">93</h5>
                        <p class="txt-200">Stats Five</p>

                    </div>
                </div>

                <!-- STATISTIC BLOCK #7 -->
                <div class="col-sm-6 col-md-2">
                    <div class="statistic-block icon-xs wow fadeInUp" data-wow-delay="1s">

                        <!-- Icon  -->
                        <span class="flaticon-026-star"></span>

                        <!-- Text -->
                        <h5 class="statistic-number">53</h5>
                        <p class="txt-200">Stats Six</p>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END STATISTIC-1 -->

    <!-- FEATURES-2
                                                ============================================= -->
    <section id="features-2" class="wide-60 features-section division">
        <div class="container">
            <h2 class="text-center py-2">STATE SITUATION REPORT</h2>
            <table class="table table-bordered" style="font-weight:bold; width:109%; margin-left:auto; margin-right:auto;">
                <tr>
                    <td>
                        <li class="list-group-item"><a href="">Ajingi</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-secondary"><a href="">Dawakin Kudu</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-primary"><a href="">Garun Mallam</a></li>
                    </td>
                    <td>
                        <li class="list-group-item"><a href="">Gwale</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-warning"><a href="">Kibiya</a></li>
                    </td>
                    <td>
                        <li class="list-group-item"><a href="">Rano</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-success"><a href="">Tarauni</a></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="list-group-item list-group-item-dark"><a href="">Albasu</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-primary"><a href="">Dawakin Tofa</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-danger"><a href="">Gaya, Nigeria</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-success"><a href="">Gwarzo</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-info"><a href="">Kiru, Nigeria</a></li>
                    </td>
                    <td>
                        <li class="list-group-item "><a href="">Rimin Gado</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-warning"><a href="">Tofa</a></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="list-group-item list-group-item-success"><a href="">Bagwai</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-primary"><a href="">Doguwa</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-danger"><a href="">Gezawa</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-info"><a href="">Kabo, Nigeria</a></li>
                    </td>
                    <td>
                        <li class="list-group-item"><a href="">Kumbotso</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-warning"><a href="">Rogo</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-secondary"><a href="">Tsanyawa</a></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="list-group-item list-group-item-dark"><a href="">Bebeji</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-primary"><a href="">Fagge</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-successs"><a href="">Kano Municipal</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-danger"><a href="">Kunchi</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-info"><a href="">Shanono</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-warning"><a href="">Tudun Wada (Kano)</a></li>
                    </td>
                    <td>
                        <li class="list-group-item"><a href="">Karaye</a></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="list-group-item"><a href="">Bichi</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-primary"><a href="">Gabasawa</a></li>
                    </td>
                    <td>
                        <li class="list-group-item"><a href="">Kura</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-info"><a href="">Sumaila</a></li>
                    </td>
                    <td>
                        <li class="list-group-item"><a href="">Tudun Wada (KD)</a></li>
                    </td>
                    <td>
                        <li class="list-group-item "><a href="">Bunkure</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-danger"><a href="">Garko, Nigeria</a></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="list-group-item list-group-item-secondary"><a href="">Dala</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-warning"><a href="">Madobi</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-info"><a href="">Takai</a></li>
                    </td>
                    <td>
                        <li class="list-group-item"><a href="">Ungogo</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-danger"><a href="">Makoda</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-success"><a href="">Warawa</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-primary"><a href="">Danbatta</a></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="list-group-item"><a href="">Minjibir</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-warning"><a href="">Nasarawa</a></li>
                    </td>
                    <td>
                        <li class="list-group-item list-group-item-success"><a href="">Wudil</a></li>
                    </td>
                </tr>
            </table>
        </div> <!-- End container -->
    </section> <!-- END FEATURES-2 -->
    <!-- FEATURES-2
                                                ============================================= -->
    <section id="features-2" class="wide-60 features-section division">
        <div class="container">
            <h2 class="text-center py-2">Targeted Areas in Kano State</h2>
            <div id="map"
                style="height:500px; border: 3px solid rgb(35, 111, 189); border-radius:4px; outline:none;"></div>
        </div> <!-- End container -->
    </section> <!-- END FEATURES-2 -->

    <script>
        const map = L.map('map').setView([12.000000, 8.516667], 12);
        L.tileLayer('', {
            maxZoom: 19,
        }).addTo(map);
        const marker = L.marker([11.9729149, 8.4232203]).addTo(map);
        marker.bindTooltip("my tooltip text").openTooltip();
        const marker2 = L.marker([12.0001099, 8.4954821]).addTo(map);
        const marker3 = L.marker([11.9894939, 8.5285516]).addTo(map);
        //const marker4 = L.marker([12.0001099, 8.4954821]).addTo(map);
    </script>
    <style>

    </style>
    <section id="features-2" class="wide-60 features-section division">
        <div class="container">
            <h2 class="text-center py-2">Timeline of Achievement</h2>
            <section class="ps-timeline-sec">
                <div class="container">
                    <ol class="ps-timeline">
                        <li>
                            <div class="img-handler-top">
                                <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_03.png"
                                    alt="" />
                            </div>
                            <div class="ps-bot">
                                <p>Do you have a recent injury or long term pain?</p>
                            </div>
                            <span class="ps-sp-top">01</span>
                        </li>
                        <li>
                            <div class="img-handler-bot">
                                <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_13.png"
                                    alt="" />
                            </div>
                            <div class="ps-top">
                                <p>Have you tried Physiotherapy, Chiropractor or your GP without the pain free results?</p>
                            </div>
                            <span class="ps-sp-bot">02</span>
                        </li>
                        <li>
                            <div class="img-handler-top">
                                <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_05.png"
                                    alt="" />
                            </div>
                            <div class="ps-bot">
                                <p>Let Physology assess and treat your pain with our trusted revolusionary approach.</p>
                            </div>
                            <span class="ps-sp-top">03</span>
                        </li>
                        <li>
                            <div class="img-handler-bot">
                                <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_10.png"
                                    alt="" />
                            </div>
                            <div class="ps-top">
                                <p>Join our happy family of pain free clients.</p>
                            </div>
                            <span class="ps-sp-bot">04</span>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
    </section> <!-- END FEATURES-2 -->

    <section id="features-2" class="wide-60 features-section division">
        <div class="container">
            <h2 class="text-center py-2">Videos Of Girls Debating</h2>
            <div class="containerv">
                <div class="videos">
                    <video class="active"
                        src="videos/Send Email Using Mailjet(Alternative to Gmail SMTP Server) in PHP.mp4" muted></video>
                    <video src="videos/TEACH YOURSELF EASY HAUSA DANCE.mp4" muted></video>
                    <video
                        src="videos/Watch When Nigerian Military School Boys Takes Center Stage,,,,,, Mr President Was Amazed,,,,,,.mp4"
                        muted></video>
                    <video src="videos/video4.mp4" muted></video>
                </div>
                <div class="main-video">
                    <video src="videos/TEACH YOURSELF EASY HAUSA DANCE.mp4" muted controls autoplay></video>
                </div>
            </div>
        </div>
    </section> <!-- END FEATURES-2 -->


    <section id="features-2" class="wide-60 features-section division">
        <div class="container">
            <h2 class="text-center py-2">Demographics</h2>
            <div class="row" style="border: 2px solid #3d709b; padding: 28px; border-radius: 7px;">
                <div class="col-md-6">
                    <div style="margin: auto; width: 50%; padding: 10px;">
                        <h5 align="center">Not in School</h5>
                        <br />
                        <div class="pie animate no-round" style="--p:75;--c:orange;"> 75%</div>
                        <br />
                        <p class="text-justify" style="padding: inherit;">This will hold stats of students who are not in
                            school due to financial, traditional or other
                            reasons </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin: auto; width: 50%; padding: 10px;">
                        <h5 align="center">In School</h5>
                        <br />
                        <div class="pie animate no-round" style="--p:80;--c:blue;"> 80%</div>
                        <br />
                        <p class="text-justify" style="padding: inherit;">These are students actively in school and having
                            the AGILE experience </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin: auto; width: 50%; padding: 10px;">
                        <h5 align="center">Dropped Out</h5>
                        <br />
                        <div class="pie animate no-round" style="--p:50;--c:red;"> 50%</div>
                        <br />
                        <p class="text-justify" style="padding: inherit;">These are numbers of students who before AGILE
                            dropped out of school for financial or other reasons.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin: auto; width: 50%; padding: 10px;">
                        <h5 align="center">Finished School</h5>
                        <br />
                        <div class="pie animate no-round" style="--p:25;--c:green;">25%</div>
                        <br />
                        <p class="text-justify" style="padding: inherit;">This represents the students currently graduated
                            into post secondary education by AGILE</p>
                    </div>
                </div>
            </div>
            <p></p>
            <h5 align="center">LEVELS OF DEMOGRAPHIC IMPROVEMENT DURING  THE AGILE EXPERIENCE </h5>
            <style type="text/css">
                td.value {
                    background-image: url(gridline58.gif);
                    background-repeat: repeat-x;
                    background-position: left top;
                    border-left: 1px solid #e5e5e5;
                    border-right: 1px solid #e5e5e5;
                    padding: 0;
                    border-bottom: none;
                    background-color: transparent;
                }

                td {
                    padding: 4px 6px;
                    border-bottom: 1px solid #e5e5e5;
                    border-left: 1px solid #e5e5e5;
                    background-color: #fff;
                }

                body {
                    font-family: Verdana, Arial, Helvetica, sans-serif;
                    font-size: 80%;
                }

                td.value img {
                    vertical-align: middle;
                    margin: 5px 5px 5px 0;
                }

                th {
                    text-align: left;
                    vertical-align: top;
                }

                td.last {
                    border-bottom: 1px solid #e5e5e5;
                }

                td.first {
                    border-top: 1px solid #e5e5e5;
                }

                .auraltext {
                    position: absolute;
                    font-size: 0;
                    left: -1000px;
                }

                table {
                    background-image: url(bg_fade.png);
                    background-repeat: repeat-x;
                    background-position: left top;
                    width: 87em;
                }

                caption {
                    font-size: 90%;
                    font-style: italic;
                }
            </style>
            <table cellspacing="0" cellpadding="0">
                {{-- <caption align="top">Top banana importers 1998 (value of banana imports in millions of US dollars per
                    million people)<br><br></caption> --}}
                <tbody>
                    {{-- <tr>
                        <th scope="col"><span class="auraltext">Country</span> </th>
                        <th scope="col"><span class="auraltext">Millions of US dollars per million people</span> </th>
                    </tr> --}}
                    <tr>
                        <td class="first">Not In School</td>
                        <td class="value first"><img src="bar.png" alt="" width="20" height="16">25% Decreased
                        </td>
                    </tr>
                    <tr>
                        <td>In School</td>
                        <td class="value"><img src="bar.png" alt="" width="350" height="16">90% Increased</td>
                    </tr>
                    <tr>
                        <td>Dropped Out</td>
                        <td class="value"><img src="bar.png" alt="" width="18" height="16">10% Decreased</td>
                    </tr>
                    <tr>
                        <td>Finished</td>
                        <td class="value"><img src="bar.png" alt="" width="260" height="16">75% Increased</td>
                    </tr>
                    <tr>
                        <td>Career Experience </td>
                        <td class="value"><img src="bar.png" alt="" width="350" height="16">90% Increased</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section> <!-- END FEATURES-2 -->

    <!-- FAQs-1
                                                ============================================= -->
    <section id="faqs-1" class="bg-fixed wide-100 faqs-section division">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title -->
                    <h3 class="h3-xl">Contact Us</h3>

                    <!-- Text -->
                    <p class="p-lg">Locate and Contact Agile Kano Below.
                    </p>

                </div>
            </div>


            <!-- QUESTIONS HOLDER -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kano%20State+(Agile%20Kano)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe>
                    </div>
                </div> <!-- End col-x -->
            </div> <!-- END QUESTIONS HOLDER -->

            <!-- MORE QUESTIONS BUTTON -->
            <div class="row">
                <div class="col-md-12 text-center more-questions">
                    <h5 class="h5-md">Still have a question? Mail us at
                        <a href="mailto:support@emis.go.ug" class="skyblue-color">support@agilekano.ng</a>
                    </h5>
                </div>
            </div>

        </div> <!-- End container -->
    </section> <!-- END FAQs-1 -->
@endsection
