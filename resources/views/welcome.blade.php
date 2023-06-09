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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

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
                                <img src="{{asset('frontend/assets/img/logo.png')}}" alt="AUAP Logo" height="65" width="75"/>
                            </a>
                        </div>
                    </div> 
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="lgx-nav-right navbar-right">
                            <div class="lgx-cart-area">
                                <!-- <a class="lgx-btn lgx-btn-red" href="/login">SignUp</a> -->
                                <ul>
                                @auth
                                    <li class="text-left" style="list-style: none;">
                                        <button type="button" class="lgx-btn lgx-btn-red dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                        </button>
                                        <div class="dropdown-menu" style="background: transparent;">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-center btn-sm" style="margin-top: 0px; margin-left: 128px;">Logout</button>
                                        </form>
                                        
                                        </div>
                                    </li>
                                    @else
                                    <li class="text-left" style="list-style: none;">
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
                            <!-- <li><a class="lgx-scroll" href="#lgx-management">Management</a></li> -->
                            <li><a class="lgx-scroll" href="#lgx-candidates">Candidates</a></li>
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
                                    <div id="circular-countdown" data-date="2023-06-01 00:00:00" ></div>
                                </div>
                                <h2 class="title">AUAP <span><b>2</b><b>0</b><b>2</b><b>3</b></span></h2>
                                <h3 class="location">Selection for Secretary General</h3>
                                <div class="action-area">
                                    <div class="lgx-video-area">
                                        <a class="lgx-btn lgx-btn-red" href="#lgx-candidates">Choose your favorite Candidate</a>
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
                                <h2 class="heading">About AUAP</h2>
                                <!-- <h3 class="subheading">Why Happy New Year 2021 ?</h3> -->
                            </div>
                            <div class="lgx-about-content">
                                <p class="text" style="text-align:justify; word-spacing:-2px;">
                                    The leaders of AUAP have adopted a unified vision for the organization and that is the promotion of the general welfare and good image of their members. Through the cooperation of all these leaders, AUAP has the capability to shape and influence the outlook of higher education regionally and globally. The heads of these higher education institutions enjoy a global network of supportive colleagues and this enables AUAP to secure support for member institutions’ interests and concerns.
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
<!-- <section>
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
            
        </div>
        
    </div>
</section> -->
<!--SPEAKERS END-->





<!-- Popup HTML -->
<div class="popup" id="popup">
    <span class="close" onclick="closePopup()" style="color: #ffffff;">&times;</span>
    <b style="color: #ffffff;">Please select a candidate before submitting your vote.</b>
</div>

<!-- Overlay -->
<div class="overlay" id="overlay"></div>

<!--TRAVEL INFO-->
@if(auth()->check())
<section>
        <div id="lgx-candidates" class="lgx-travelinfo">
            <div class="lgx-inner">
                <div class="container">
                    
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading">
                                <h2 class="heading">Candidates</h2>
                                <h3 class="subheading">Vote your favorite candidate by selecting candidate card.</h3>
                                <small class="text-danger"><b>Note: Once you vote, you can not edit or withdraw.</b></small>
                            </div>
                        </div>
                        <!--//main COL-->
                    </div>
                    <div class="container">
                        <div class="form-container">
                            <div class="candidates-wrapper">
                                <form action="{{ route('vote.submit') }}" id="myForm" method="POST">
                                    @csrf
                                    <div class="candidates-container">
                                        
                                        <div class="row">
                                            @foreach($candidates as $candidate)
                                            <div class="col-md-6">
                                                <label class="candidate-card" onclick="selectCandidate(this)" style="border-radius: 10px; margin-bottom: 20px;">
                                                <input type="radio" name="candidate_id" value="{{ $candidate->id }}" class="candidate-radio" hidden>
                                                    <div class="candidate-info">
                                                        <div class="row"> 
                                                            <div class="col-md-6">
                                                                <img src="/frontend/assets/img/candidates/{{ $candidate->profile_pic }}" alt="" height="50%" width="80%" style="border-radius: 10px;">
                                                            </div>
                                                            <div class="col-md-6 text-left candidateInfo">
                                                                <b>{{ $candidate->first_name }} {{ $candidate->last_name }}</b><br>
                                                                <small>{{ $candidate->designation }}</small><br>
                                                                <small>{{ $candidate->organization }}</small><br>
                                                                <div class="row" style="padding-top: 24px;">
                                                                    <div class="col-sm-12" style="display: flex;
                                                                    justify-content: space-around;">
                                                                        <button type="button" data-toggle="modal" data-target="#exampleModalCenter{{$candidate->id}}" class="btn-sm " style="flex-grow: 1; margin-right: 5px;"><i class="fa fa-file" aria-hidden="true"></i> Video</button>
                                                                        <button type="button" data-toggle="modal" data-target="#exampleCV{{$candidate->id}}" class="btn-sm" style="flex-grow: 1; margin-left: 5px;"><i class="fa fa-video-camera" aria-hidden="true"></i> CV</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            @if(Auth::check())
                                            
                                            <button type="submit">Submit Vote</button>
                                            
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //.CONTAINER -->
            </div>
        </div>
    </section>
    
@else

<section>
    <div id="lgx-candidates" class="lgx-travelinfo">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading">Candidates</h2>
                            <h3 class="subheading">Choose your favorite candidate</h3>
                        </div>
                    </div>
                    <!--//main COL-->
                </div>

                
                <div class="container">
                    <div class="form-container">
                        <div class="row" style="margin-bottom: 24px;">
                            @foreach($candidates as $candidate)
                            <div class="col-md-6">
                                <div class="candidate-card" style="border-radius: 10px; margin-bottom: 20px;">
                                    <div class="candidate-info">
                                        <div class="row "> 
                                            <div class="col-md-6">
                                                <img src="/frontend/assets/img/candidates/{{ $candidate->profile_pic }}" alt="" height="50%" width="80%" style="border-radius: 10px;">
                                            </div>
                                            <div class="col-md-6 text-left candidateInfo">
                                                <b>{{ $candidate->first_name }} {{ $candidate->last_name }}</b><br>
                                                <small>{{ $candidate->designation }}</small><br>
                                                <small>{{ $candidate->organization }}</small><br>
                                                <div class="row" style="padding-top: 24px;">
                                                    <div class="col-sm-12" style="display: flex; justify-content: space-around;">
                                                        <button type="button" data-toggle="modal" data-target="#exampleModalCenter{{$candidate->id}}" class="btn-sm " style="flex-grow: 1; margin-right: 5px;"><i class="fa fa-file" aria-hidden="true"></i> Video</button>
                                                        <button type="button" data-toggle="modal" data-target="#exampleCV{{$candidate->id}}" class="btn-sm" style="flex-grow: 1; margin-left: 5px;"><i class="fa fa-video-camera" aria-hidden="true"></i> CV</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> 
                        <div class="row text-center">
                            <div class="col-md-6" style="float:none;margin:auto;">
                                <a class="lgx-btn" href="/login"><i class="fa fa-hand-pointer-o"></i> Click here to Login and vote your favorite Candidate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</section>
@endif

<!--TRAVEL INFO END-->
<!-- ModalForCV -->
@foreach($candidates as $candidate)
<div class="modal fade bd-example-modal-lg" id="exampleCV{{$candidate->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <iframe src="/candidate_cv/{{$candidate->cv}}" frameborder="0" width="100%" height="600px"></iframe>
    </div>
    </div>
</div>
@endforeach

<!-- ModalForVideo -->
@foreach($candidates as $candidate)
<div class="modal fade bd-example-modal-lg2" id="exampleModalCenter{{$candidate->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <iframe src="{{$candidate->video}}" frameborder="0" width="100%" height=450px;></iframe>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
@endforeach



<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer"> <!--lgx-footer-white-->
        <div class="lgx-inner-footer">
            <div class="container">
                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p> <span>©</span> 2023 <a href="https://auap.org/" target="_blank">AUAP</a>, All Right Reserved</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

@if(Session::has('success'))
<script type="text/javascript">
    $(function() {
        toastr.success("{{ Session::get('success') }}");
    })
</script>
@elseif(Session::has('fail'))
<script type="text/javascript">
    $(function() {
        toastr.danger("{{ Session::get('fail') }}");
    })
</script>
@elseif(Session::has('warning'))
<script type="text/javascript">
    $(function() {
        toastr.warning("{{ Session::get('warning') }}");
    })
</script>
@elseif(Session::has('error'))
<script type="text/javascript">
    $(function() {
        toastr.error("{{ Session::get('error') }}");
    })
</script>
@endif


<div class="lgx-switcher-loader"></div>
<!-- For Demo Purpose Only// Remove From Live -->
<!-- For Demo Purpose Only //Remove From Live-->


</body>
</html>

