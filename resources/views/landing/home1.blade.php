<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Clinicom - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>Clinicom - Medical & Health Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/landing/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/landing/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/landing/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inline">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> California, TX 70240
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> Info@gmail.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> +123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 text-right button">
                    <div class="item-flex">
                        <a class="button" href="login">Make Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default bg-theme white attr-border bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="ti-menu-alt"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo logo-regular" alt="Logo">
                        <img src="{{ asset('assets/img/logo-light.png') }}" class="logo desktop" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                                <li><a href="index-3.html">Home Version Three</a></li>
                                <li><a href="index-4.html">Home Version Four</a></li>
                                <li><a href="index-5.html">Home Version Five</a></li>
                                <li><a href="index-6.html">Home Version Six</a></li>
                                <li><a href="index-7.html">Home Version Seven</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Departments</a>
                            <ul class="dropdown-menu">
                                <li><a href="department.html">Department Version One</a></li>
                                <li><a href="department-2.html">Department Version Two</a></li>
                                <li><a href="department-single.html">Department Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Doctors</a>
                            <ul class="dropdown-menu">
                                <li><a href="doctors.html">Doctors Grid</a></li>
                                <li><a href="doctors-carousel.html">Doctors Carousel</a></li>
                                <li><a href="doctor-single.html">Doctor Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="ti-close"></i></a>
                <div class="widget">
                    <h4 class="title">Get in touch</h4>
                    <p>
                        Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                    </p>
                    <a href="#" class="btn btn-theme effect btn-sm" data-animation="animated slideInUp">Consultation</a>
                </div>
                <div class="widget">
                    <h4 class="title">Additional Links</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area shape">
        <div id="bootcarousel" class="carousel text-light text-large slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/poliklinik1.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                        	<ul data-animation="animated slideInLeft">
                                            	<li>Best care</li>
                                            	<li>Modern equipment</li>
                                            </ul>
                                            <h2 data-animation="animated slideInDown">Meet the <strong>Best Doctors</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/poli2.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                        	<ul data-animation="animated slideInLeft">
                                            	<li>Meet doctors</li>
                                            	<li>Get admitted</li>
                                            </ul>
                                            <h2 data-animation="animated slideInDown">Safe your <strong>Own Health</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area features-area default-padding">
        <!-- Shape -->
        <div class="shape">
            <img src="{{ asset('assets/img/shape/3.svg') }}" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container-medium">
            <div class="about-items features-item-box">
                <div class="row">
                    <div class="col-lg-5 info">
                        <h5>About Us</h5>
                        <h2>A Great Place to Work. A Great Place to Receive Care. Leading Medicine.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis maiores, qui impedit animi. Explicabo quibusdam maxime hic eaque suscipit voluptate asperiores mollitia, ipsam fugit, optio architecto eligendi recusandae provident! Harum.
                        </p>
                        <ul>
                            <li>
                                <div class="info">
                                    <h4>Emergency care</h4>
                                    <div class="items">
                                        <span>Primary Care</span>
                                        <span>Medicine</span>
                                        <span>Orthopedic</span>
                                        <span>Cardiology</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                                    </div>
                                    <div class="content-box">
                                        <div class="info-title">
                                            <i class="flaticon-stethoscope"></i>
                                            <h4><a href="#">Daily Care</a></h4>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Article smiling respect opinion excited. Welcomed humoured rejoiced peculiar to remaining conveying.
                                        </p>
                                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                             <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                                    </div>
                                    <div class="content-box">
                                        <div class="info-title">
                                            <i class="flaticon-ribbon"></i>
                                            <h4>
                                                <a href="#">Cancer Care</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Article smiling respect opinion excited. Welcomed humoured rejoiced peculiar to remaining conveying.
                                        </p>
                                        <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Our Services
    ============================================= -->
    <div class="services-area bg-gray default-padding-bottom bottom-less">
        <div class="container">
            <div class="services-items">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Services</h4>
                            <h2>Our Departments</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-wheelchair"></i>
                                    <strong>01</strong>
                                </div>
                                <h4>
                                    <a href="#">Orthopaedics</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming. 
                                </p>
                                <ul>
                                    <li>Joints</li>
                                    <li>Spine</li>
                                    <li>Sports Medicine</li>
                                    <li>Bones</li>
                                    <li>Spinal Fusion</li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-cracked-skin"></i>
                                    <strong>02</strong>
                                </div>
                                <h4>
                                    <a href="#">Dermatology</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming. 
                                </p>
                                <ul>
                                    <li>Pediatric </li>
                                    <li>Immunodermatologists</li>
                                    <li>Cosmetic</li>
                                    <li>Dermatopathologists</li>
                                    <li>Olio Fusion</li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-scalpel"></i>
                                    <strong>03</strong>
                                </div>
                                <h4>
                                    <a href="#">Surgery</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming. 
                                </p>
                                <ul>
                                    <li>Laparoscopy</li>
                                    <li>Endoscopy</li>
                                    <li>Bronchoscopy</li>
                                    <li>Laser surgery </li>
                                    <li>Electrosurgery  </li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-coronavirus"></i>
                                    <strong>04</strong>
                                </div>
                                <h4>
                                    <a href="#">Corona Checkup</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming. 
                                </p>
                                <ul>
                                    <li>Rapid diagnostic</li>
                                    <li>Antibody</li>
                                    <li>Risks</li>
                                    <li>Diagnostic Testing</li>
                                    <li>Viral Culturing</li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

    <!-- Start Register Area
    ============================================= -->
    <div class="register-area default-padding bg-fixed shadow half text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="register-items">
                <div class="row align-center">
                    
                    <div class="col-lg-6 form">
                        <div class="appoinment-box">
                            <div class="heading">
                                <h2>Make an Appointment</h2>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="f-name" name="f-name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="l-lname" name="l-lname" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="date" name="date" placeholder="Appoinment Date" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Child</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Department</option>
                                                <option value="2">Medecine</option>
                                                <option value="4">Dental Care</option>
                                                <option value="5">Traumatology</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Briefly state your problem *"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Submit Query <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 info">
                        <h5>Free Consultation</h5>
                        <h2>Get An Appointment For Get Release.</h2>
                        <p>
                            Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Timed balls match at by rooms we. Fat not boy neat left had with past here call. Court nay merit few nor party learn.
                        </p>
                        <div class="steps">
                            <ul>
                                <li>
                                    <i class="flaticon-calendar-1"></i>
                                    <h5>Appointment</h5>
                                </li>
                                <li>
                                    <i class="flaticon-doctor"></i>
                                    <h5>Select Doctor</h5>
                                </li>
                                <li>
                                    <i class="flaticon-heartbeat"></i>
                                    <h5>Consultation</h5>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Register Area -->

     <!-- Star Doctors Area
    ============================================= -->
    <div class="doctors-area carousel-shadow inc-carousel bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Doctores</h4>
                        <h2>Our Experts</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="doctor-items">
                <div class="col-lg-12">
                    <div class="doctors-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/800x800.png);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Prof. Jones Athom</h4>
                                    <span>Orthopaedics</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>8:30 - 14:45</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/800x800.png);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Dr. Anam Habu</h4>
                                    <span>Cardiologist</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>10:00 - 16:30</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/800x800.png);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Prof. Buba Pal</h4>
                                    <span>Medicine Specialist</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>9:00 - 16:00</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/800x800.png);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Prof. Mohan</h4>
                                    <span>Kidney specialist</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>8:00 - 15:45</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors Area -->

    <!-- Star Testimonilas
    ============================================= -->
    <div class="testimonials-area bg-gray health-tips-area default-padding-bottom">
        <div class="container">
            <div class="testimonial-items health-tips-items">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2>What People Say?</h2>
                        <p>
                            Power dried her taken place day ought the. Four and our ham west miss. Education shameless who middleton agreement how. We in found world chief is at means weeks smile.
                        </p>
                        <a class="btn btn-md btn-gradient" href="#">View All <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-7 right-info">
                        <div class="tips-items health-tips-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h4>One of the famous Hospitals</h4>
                                    <p>
                                        Board certification is one of the most important factors to consider; it tells you that the doctor has the needed training, skills and experience to provide healthcare in cardiology. Also confirm that the cardiologist has no history of malpractice claims or disciplinary actions. 
                                    </p>
                                    <div class="bottom">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/img/100x100.png') }}" alt="Thumb">
                                        </div>
                                        <div class="provider">
                                            <h5>Jessika Jones</h5>
                                            <span>Heart specialist</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h4>The Biggest & Modern Hospitals</h4>
                                    <p>
                                        Board certification is one of the most important factors to consider; it tells you that the doctor has the needed training, skills and experience to provide healthcare in cardiology. Also confirm that the cardiologist has no history of malpractice claims or disciplinary actions. 
                                    </p>
                                    <div class="bottom">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/img/100x100.png') }}" alt="Thumb">
                                        </div>
                                        <div class="provider">
                                            <h5>Mark Henri</h5>
                                            <span>Rrthopedics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area text-light bg-gray default-padding-bottom">
        <!-- Shape -->
        <div class="shape">
            <img src="{{ asset('assets/img/shape/5.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="fun-fact-items text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-oxygen"></i>
                            <div class="timer k" data-to="12" data-speed="5000">12</div>
                            <span class="medium">Satisfied Patients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-department"></i>
                            <div class="timer" data-to="38" data-speed="5000">38</div>
                            <span class="medium">Departments</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-doctor"></i>
                            <div class="timer" data-to="278" data-speed="5000">278</div>
                            <span class="medium">Regular Doctors</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-servant-1"></i>
                            <div class="timer" data-to="1488" data-speed="5000">1488</div>
                            <span class="medium">Servant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Star Blog
    ============================================= -->
    <div class="blog-area default-padding-bottom bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>News</h4>
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets/img/800x700.png') }}" alt="Thumb">
                                    
                                </a>
                            </div>
                            <div class="info">
                                <span class="date">
                                    12 Aug
                                </span>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>John Hasi</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 36 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Bssistance favourable cultivated everything collecting. </a>
                                </h4>
                                <a class="btn btn-sm btn-theme border circle" href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets/img/800x700.png') }}" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <span class="date">
                                    05 Jul
                                </span>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>John Hasi</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Difficult contented we determine ourselves a earnestly</a>
                                </h4>
                                <a class="btn btn-sm btn-theme border circle" href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets/img/800x700.png') }}" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <span class="date">
                                    28 Nov
                                </span>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>John Hasi</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Binsisted received is occasion advanced honoured</a>
                                </h4>
                                <a class="btn btn-sm btn-theme border circle" href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Subscribe Area 
    ============================================= -->
    <div class="subscribe-area text-light text-center">
        <div class="container">
            <div class="subscribe-form">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="form">
                            <h2>Newsletter</h2>
                            <p>Stay up to date with our latest news</p>
                            <form action="#">
                                <input type="email" placeholder="Your Email*" class="form-control" name="email">
                                <button type="submit">Subscribe</button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->

    <!-- Star Footer
    ============================================= -->
    <footer>
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="single-item col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <h4 class="widget-title">About Us</h4>
                            <p>
                                Required honoured trifling eat pleasure man relation. Assurance yet bed was improving furniture man. Distrusts delighted
                            </p>
                            <a class="btn btn-md left-icon btn-gradient" href="#"><i class="fas fa-plus"></i> Blood Bank</a>
                            <div class="social">
                                <h5>Get Us:</h5>
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-item col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Department</h4>
                            <ul>
                                <li>
                                    <a href="#">Medecine and Health</a>
                                </li>
                                <li>
                                    <a href="#">Dental Care</a>
                                </li>
                                <li>
                                    <a href="#">Eye Treatment</a>
                                </li>
                                <li>
                                    <a href="#">Children Chare</a>
                                </li>
                                <li>
                                    <a href="#">Traumatology</a>
                                </li>
                                <li>
                                    <a href="#">X-ray</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="single-item col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Ambulance</a>
                                </li>
                                <li>
                                    <a href="#">Emergency</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="single-item col-lg-4 col-md-6 item">
                        <div class="f-item branches">
                            <h4 class="widget-title">Our branches</h4>
                            <div class="branches">
                                <ul>
                                    <li>
                                        <strong>ACMH Hospital:</strong> 
                                        <span>4992 Bryan Avenue, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                    <li>
                                        <strong>Central Hospital:</strong> 
                                        <span>2001 Kia Magentis, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <p>&copy; 2020 <strong>Clinicom</strong>. All Rights Reserved by <a href="#">validtemplates</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/landing/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/landing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/landing/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/landing/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/landing/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/landing/main.js') }}"></script>

</body>
</html>