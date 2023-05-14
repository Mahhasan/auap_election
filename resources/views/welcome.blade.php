<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Auap Election</title>
    <meta name="description" content="AUAP Election"/>
    <meta name="author" content="spiralworld.biz"/>

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="AUAP Election"/>
    <meta property="og:url" content="http://auap.org"/>
    <meta property="og:image" content="{{asset('frontend/assets/img/logo.png')}}"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/logo.png')}}"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/img/logo.png')}}"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontend/assets/img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('frontend/assets/img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/assets/img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/assets/img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/assets/img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontend/assets/img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('frontend/assets/img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/assets/img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('frontend/assets/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('frontend/assets/img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/assets/img/favicon/favicon-16x16.png')}}">


    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/bootstrap/css/bootstrap.min.css')}}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/fontawesome/css/font-awesome.min.css')}}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/maginificpopup/magnific-popup.css')}}" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/timer/TimeCircles.css')}}" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/owlcarousel/owl.carousel.min.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/owlcarousel/owl.theme.default.min.css')}}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="{{asset('frontend/assets/css/style-default.min.css')}}" media="all"/>
    <link rel="stylesheet" href="frontend/assets/css/custom.css">

    <!-- MODERNIZER CSS  -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="home">


<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->


<!--HEADER-->
<header>
    <div id="lgx-header" class="lgx-header">
        <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed "> <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
            <div class="lgx-container"> <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="lgx-logo">
                            <a href="index.html" class="lgx-scroll">
                                <img src="{{asset('frontend/assets/img/logo.png')}}" alt="AUAP Logo" height="81" width="180"/>
                            </a>
                        </div>
                    </div> 
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="lgx-nav-right navbar-right">
                            <div class="lgx-cart-area">
                                <!-- <a class="lgx-btn lgx-btn-red" href="/login">SignUp</a> -->
                                <ul>
                                @auth
                                    <li class="text-left">
                                        <button type="button" class="lgx-btn lgx-btn-red dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                {{ Auth::user()->last_name }}
                                        </button>
                                        <div class="dropdown-menu" style="background: transparent;">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure you want to vote ');" class="dropdown-item text-center btn-sm" style="margin-top: 0px; margin-left: 128px;">Logout</button>
                                        </form>
                                        
                                        </div>
                                    </li>
                                    @else
                                    <li class="text-left">
                                        <a class="lgx-btn lgx-btn-red" href="/login">Sign In</a>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                        <ul class="nav navbar-nav lgx-nav navbar-right">
                            <li>
                                <a href="index.html" class=" active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <li>
                            <li><a class="lgx-scroll" href="#lgx-about">About</a></li>
                            <li><a class="lgx-scroll" href="#lgx-candidates">Candidates</a></li>
                            <li><a class="lgx-scroll" href="#lgx-management">Management</a></li>
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>
<!--HEADER END-->


    <!--BANNER-->
    <section>
        <div class="lgx-banner lgx-banner4">
            <div class="lgx-banner-style">
                <div class="lgx-inner lgx-inner-fixed">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-banner-info lgx-banner-info-center"> <!--lgx-banner-info-center lgx-banner-info-black lgx-banner-info-big lgx-banner-info-bg-->
                                    <!-- <h1 style="color: white;">UX Conference <span><b>2</b><b>0</b><b>2</b><b>1</b></span></h1> -->
                                    <h2 style="color: white;">Votes Starts In</h2>
                                    <div class="circular-countdown-area">
                                        <div id="circular-countdown" data-date="2023-05-16 00:00:00" ></div>
                                    </div>
                                    <h2 class="title">AUAP <span><b>2</b><b>0</b><b>2</b><b>3</b></span></h2>
                                    <h3 class="location">Selection for Secretary General</h3>
                                    <div class="action-area">
                                        <div class="lgx-video-area">
                                            <a class="lgx-btn lgx-btn-red" href="#lgx-candidates">Vote your favorite Candidate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//.ROW-->
                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </div>
    </section>
    <!--BANNER END-->


<!--ABOUT-->
<section>
    <div id="lgx-about" class="lgx-about">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="lgx-about-content-area lgx-about-content-area-center">
                            <div class="lgx-heading">
                                <h2 class="heading">About Us</h2>
                                <!-- <h3 class="subheading">Why Happy New Year 2021 ?</h3> -->
                            </div>
                            <div class="lgx-about-content">
                                <p class="text">
                                    Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi vitae.
                                </p>
                                <div class="section-btn-area">
                                    <a class="lgx-btn" target="_blank" href="https://auap.org/">Visit AUAP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--ABOUT END-->


<!--SPEAKERS-->
<section>
    <div id="lgx-management" class="lgx-speakers lgx-speakers2">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading lgx-heading-white">
                            <h2 class="heading">AUAP Top Management</h2>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="lgx-single-speaker">
                            <figure>
                                <a class="profile-img" href="speakers.html"><img src="{{asset('frontend/assets/img/speakers/chairman_sir.jpg')}}" alt="speaker"/></a>
                                <figcaption>
                                    <div class="speaker-info">
                                        <h3 class="title"><a href="speaker.html">Dr. Md. Sabur Khan</a></h3>
                                        <h4 class="subtitle">AUAP President,</h4>
                                        <h4 class="subtitle">Founder & Chairman</h4>
                                        <h4 class="subtitle">Daffodil International University, Bangladesh</h4>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="lgx-single-speaker">
                            <figure>
                                <a class="profile-img" href="speakers.html"><img src="{{asset('frontend/assets/img/speakers/gupta_sir.jpg')}}" alt="speaker"/></a>
                                <figcaption>
                                    <div class="speaker-info">
                                        <h3 class="title"><a href="speaker.html">Mr. Hari Mohan Gupta</a></h3>
                                        <h4 class="subtitle">AUAP First Vice President,</h4>
                                        <h4 class="subtitle">Founder & Chancellor</h4>
                                        <h4 class="subtitle">Jagran Lakecity University, India</h4>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="lgx-single-speaker">
                            <figure>
                                <a class="profile-img" href="speakers.html"><img src="{{asset('frontend/assets/img/speakers/pusca_sir.jpg')}}" alt="speaker"/></a>
                                <figcaption>
                                    <div class="speaker-info">
                                        <h3 class="title"><a href="speaker.html">Dr. Corneliu Andy Pusca</a></h3>
                                        <h4 class="subtitle">AUAP Second Vice President,</h4>
                                        <h4 class="subtitle">President of the Board of Trustees</h4>
                                        <h4 class="subtitle">Danubius University of Galati, Romania</h4>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--SPEAKERS END-->







    <!--TRAVEL INFO-->
    <section>
        <div id="lgx-candidates" class="lgx-travelinfo">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading">
                                <h2 class="heading">Candidates</h2>
                                <h3 class="subheading">Vote your favorite candidate by selecting candidate card.</h3>
                            </div>
                        </div>
                        <!--//main COL-->
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="form-container">
                                    <div class="candidates-wrapper">
                                        <form action="#" method="POST">
                                            <div class="candidates-container">
                                                <div class="col-md-6">
                                                    <label class="candidate-card" onclick="selectCandidate(this)" style="border-radius: 10px;">
                                                        <input type="radio" name="candidate_id" value="" class="candidate-radio" hidden>
                                                        <div class="candidate-info">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <img src="{{asset('frontend/assets/img/candidates/Anoop-Swarup.jpg')}}" alt="" height="40%" width="60%" style="border-radius: 10px;">
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <b>Md. Nayeem</b><br>
                                                                    <small>Daffodil International University</small>
                                                                    <b>Daffodil International University</b>
                                                                    <div class="row" style="padding-top: 24px;">
                                                                        <div class="col-sm-12" style="display: flex;
                                                                        justify-content: space-around;">
                                                                            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn-sm " style="flex-grow: 1; margin-right: 5px;"><i class="fa fa-file" aria-hidden="true"></i> Video</button>
                                                                            <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn-sm" style="flex-grow: 1; margin-left: 5px;"><i class="fa fa-video-camera" aria-hidden="true"></i> CV</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 text-center">
                                                    <button type="submit">Submit Vote</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
        </div>
    </section>
    <!--TRAVEL INFO END-->

    <!-- ModalForCV -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <iframe src="{{asset('frontend/assets/img/test.pdf')}}" frameborder="0" width="100%" height="600px"></iframe>
          </div>
        </div>
    </div>

    <!-- ModalForVideo -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <iframe src="https://www.youtube.com/embed/bn-XeQNKULI" frameborder="0" width="100%" height=450px;></iframe>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>



<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer"> <!--lgx-footer-white-->
        <div class="lgx-inner-footer">
            <div class="container">
                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p> <span>©</span> 2022 <a href="https://auap.org/" target="_blank">AUAP</a>, All Right Reserved</p>
                    </div>
                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

<!-- BOOTSTRAP JS  -->
<script src="{{asset('frontend/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Smooth Scroll  -->
<script src="{{asset('frontend/assets/libs/jquery.smooth-scroll.js')}}"></script>

<!-- SKILLS SCRIPT  -->
<script src="{{asset('frontend/assets/libs/jquery.validate.js')}}"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIKbFTvAyZuB8CuFqSIEVEHmbqfDm6UD8"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="{{asset('frontend/assets/libs/gmap/jquery.googlemap.js')}}"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="{{asset('frontend/assets/libs/maginificpopup/jquery.magnific-popup.min.js')}}"></script>

<!-- Owl Carousel  -->
<script src="{{asset('frontend/assets/libs/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- COUNTDOWN   -->
<script src="{{asset('frontend/assets/libs/countdown.js')}}"></script>
<script src="{{asset('frontend/assets/libs/timer/TimeCircles.js')}}"></script>

<!-- Counter JS -->
<script src="{{asset('frontend/assets/libs/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/counterup/jquery.counterup.min.js')}}"></script>

<!-- SMOTH SCROLL -->
<script src="{{asset('frontend/assets/libs/jquery.smooth-scroll.min.js')}}"></script>
<script src="{{asset('frontend/assets/libs/jquery.easing.min.js')}}"></script>

<!-- type js -->
<script src="{{asset('frontend/assets/libs/typed/typed.min.js')}}"></script>

<!-- header parallax js -->
<script src="{{asset('frontend/assets/libs/header-parallax.js')}}"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="{{asset('frontend/assets/libs/instafeed.min.js')}}"></script>

<!-- CUSTOM SCRIPT  -->
<script src="{{asset('frontend/assets/js/custom.script.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>


<div class="lgx-switcher-loader"></div>
<!-- For Demo Purpose Only// Remove From Live -->
<!-- For Demo Purpose Only //Remove From Live-->


</body>
</html>

