<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vasudha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/slicknav.css')}}">

    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{url('frontend/img/logo.png')}}" alt="" height="30" width="140">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('/work')}}">Works</a></li>
                                            <li><a href="{{url('/service')}}">Services</a></li>
                                            <li><a href="{{url('/review')}}">Reviews</a></li>
                                            <li><a href="{{url('/about')}}">About</a></li>
                                            <li><a href="{{url('/contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="#">Let’s Talk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->