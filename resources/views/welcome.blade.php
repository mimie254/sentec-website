<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Sentec Ltd</title>

<!-- Fav Icon -->
<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/owl.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="text left-column pull-left">
                            <h6><i class="comment-icon fas fa-comments"></i>Looking for Solar Consulting?&nbsp;&nbsp;<a href="index.html"><i class="link-icon flaticon-right-arrow"></i>&nbsp;&nbsp;Book Now</a></h6>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <ul class="info clearfix">
                                <li><i class="fas fa-star"></i><a href="index.html">Updates</a></li>
                                <li><i class="fas fa-dollar-sign"></i><a href="index.html">Estimate</a></li>
                                <li class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i>Search</button>
                                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('fb link')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{url('linkedin link')}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{url('twitter link')}}"><i class="fab fa-lg fa-twitter"></i></a></li>
                                <li><a href="{{url('youtube link')}}"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="menu-area pull-left clearfix">
                            <div class="logo-box pull-left">
                                <figure class="logo"><a href="{{url('/')}}"><img src="{{(asset('assets/images/logo.png'))}}" alt=""></a></figure>
                            </div>
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                    <li class="current"><a href="{{url('/')}}">Home</a>
                                            
                                        </li>
                                        <li class="dropdown"><a href="{{url('/')}}">About</a>
                                            <ul>
                                                <li><a href="{{url('/company')}}">Company</a></li>
                                                <li ><a href="{{url('/team')}}">Team</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="{{url('/')}}">Services</a>
                                            <ul>
                                                <li><a href="{{url('/led')}}">Led Lighting Solutions</a></li>
                                                <li><a href="{{url('/inverter')}}">Inverter Power Backup Systems</a></li>
                                                <li><a href="{{url('/heater')}}">Water Heating Systems</a></li>
                                                <li><a href="{{url('/solar')}}">Solar Power Systems</a></li>
                            
                                            </ul>
                                        </li>  
                                        <li ><a href="{{url('/project')}}">Projects</a>
                                        </li>
                                        <li class="dropdown"><a href="{{url('/')}}">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Products</a></li>
                                                <li><a href="shop-details.html">Single Product</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                            </ul>
                                        </li>   
                                        <li><a href="{{url('/contact')}}">Contact</a></li>   
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="nav-right pull-right clearfix">
                            <div class="support-box">
                                <h5><i class="fas fa-headphones"></i>Off: <span>+254 725 445 459</span></h5>
                                <ul class="info-box">
                                    <li>
                                        <i class="far fa-map"></i>
                                        <h6>Address</h6>
                                        <span>P.O. Box 103690 – 00101,Nairobi, Kenya.</span>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope-open"></i>
                                        <h6>Email</h6>
                                        <span><a href="mailto:info [at] sentecltd.com">info [at] sentecltd.com</a></span>
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        <h6>Off. Hrs</h6>
                                        <span>Mon - Sat: 9 to 6.30</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="language">
                                <img src="assets/images/icons/flag-1.png" alt="">
                                <span>En</span>
                                <ul class="language-dropdown clearfix">
                                    <li><a href="index.html">English (US)</a></li>
                                    <li><a href="index.html">English (UK)</a></li>
                                    <li><a href="index.html">Chines</a></li>
                                    <li><a href="index.html">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="menu-area pull-left clearfix">
                            <div class="logo-box pull-left">
                                <figure class="logo"><a href="{{url('/')}}"><img src="assets/images/logo.png" alt=""></a></figure>
                            </div>
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="nav-right pull-right clearfix">
                            <div class="support-box">
                                <h5><i class="fas fa-headphones"></i>Off: <span>+254 709 750 074</span></h5>
                                <ul class="info-box">
                                    <li>
                                        <i class="far fa-map"></i>
                                        <h6>Address</h6>
                                        <span>P.O. Box 103690 – 00101,Nairobi, Kenya</span>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope-open"></i>
                                        <h6>Email</h6>
                                        <span><a href="mailto:info [at] sentecltd.com">info [at] sentecltd.com</a></span>
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        <h6>Off. Hrs</h6>
                                        <span>Mon - Sat: 9 to 6.30</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="language">
                                <img src="assets/images/icons/flag-1.png" alt="">
                                <span>En</span>
                                <ul class="language-dropdown clearfix">
                                    <li><a href="index.html">English (US)</a></li>
                                    <li><a href="index.html">English (UK)</a></li>
                                    <li><a href="index.html">Chines</a></li>
                                    <li><a href="index.html">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset('assets/images/logo-2.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>P.O. Box 103690 – 00101, Nairobi, Kenya</li>
                        <li><a href="tel:+254 709 750 074">+254 709 750 074</a></li>
                        <li><a href="mailto: info [at] sentecltd.com"> info [at] sentecltd.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                    <li><a href="{{url('twitter link')}}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{url('fb link')}}><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="{{url('pinterest link')}}"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="{{url('instagram link')}}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{url('youtube link')}}"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-section centred">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="flaticon-play-button"></i>
                                    <span class="border-animation"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </a>
                            </div>
                            <h1>Bright <br />Alternative</h1>
                            <h6>Empowering our future with solar energy.</h6>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one"><i class="flaticon-right-arrow"></i>Read More</a>
                            </div>
                            <span class="big-text">santec</span>
                        </div>  
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="flaticon-play-button"></i>
                                    <span class="border-animation"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </a>
                            </div>
                            <h1>Turn to <br />solar power</h1>
                            <h6>Today’s resource for a brighter tomorrow.</h6>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one"><i class="flaticon-right-arrow"></i>Read More</a>
                            </div>
                            <span class="big-text">gogreen</span>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="flaticon-play-button"></i>
                                    <span class="border-animation"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </a>
                            </div>
                            <h1>Power of <br />Wind Energy</h1>
                            <h6>We provide clean energy, the wind energy.</h6>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one"><i class="flaticon-right-arrow"></i>Read More</a>
                            </div>
                            <span class="big-text">turbines</span>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
                                <figure class="image image-3"><img src="assets/images/icons/bulb-1.png" alt=""></figure>
                                <div class="text">
                                    <h2>07<span>+</span></h2>
                                    <h6>Years Experienced</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <div class="title-top">
                                        <div class="shape-box">
                                            <span class="shape shape-1">//</span>
                                        </div>
                                        <h6>Who we are</h6>
                                    </div>
                                    <h2>smartest way to Generate electricity</h2>
                                </div>
                                <div class="text">
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power off choice is untrammelled.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <h5>01. Our culture</h5>
                                        <div class="inner">
                                            <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                                            <p>Indignation and dislikes men who are so beguiled all charms pleasure of the moment...</p>
                                            <h6><i class="flaticon-right-arrow"></i><a href="about.html">Read More</a></h6>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <h5>02. Our Productivity</h5>
                                        <div class="inner">
                                            <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                            <p>Beguiled and demoralized by the charms of pleasure of the moment so blinded desire foresee...</p>
                                            <h6><i class="flaticon-right-arrow"></i><a href="about.html">Read More</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- service-section -->
        <section class="service-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <div class="title-top">
                        <div class="shape-box">
                            <span class="shape shape-1">//</span>
                            <span class="shape shape-2">\\</span>
                        </div>
                        <h6>Service areas</h6>
                    </div>
                    <h2>Free energy in the long run</h2>
                    <div class="title-text">
                        <p>Desire that they cannot foresee the pain and trouble that are  bound <br />equal blame belongs to their duty.</p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <span class="category">Energo</span>
                                    <h5><a href="service-details.html">For Agri land</a></h5>
                                    <p>Perfectly simple and easy to distinguish a free...</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/service/service-1.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                    <span class="category">Energo</span>
                                    <h5><a href="service-details.html">For Industries</a></h5>
                                    <p>They cannot forese the pain and trouble that...</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/service/service-2.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-5.png" alt=""></div>
                                    <span class="category">Energo</span>
                                    <h5><a href="service-details.html">For Residence</a></h5>
                                    <p>Equaly blame belongs those who fail in their duty...</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/service/service-3.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-6.png" alt=""></div>
                                    <span class="category">Energo</span>
                                    <h5><a href="service-details.html">For Large areas</a></h5>
                                    <p>Prevents our being able like best every pleasure...</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/service/service-4.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- service-style-two -->
        <section class="service-style-two sec-pad">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <div class="title-top">
                                    <div class="shape-box">
                                        <span class="shape shape-1">//</span>
                                    </div>
                                    <h6>Services</h6>
                                </div>
                                <h2>Our efficient solutions</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power off choice is untrammelled.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-5.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="inner">
                                        <div class="icon-box"><img src="assets/images/icons/icon-7.png" alt=""></div>
                                        <div class="text">
                                            <span class="category">high end</span>
                                            <h3><a href="service-details.html">technical Service</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="text">
                                        <span class="category">high end</span>
                                        <h3><a href="service-details.html">technical Service</a></h3>
                                        <p>Desires that they cannot foresee the pain trouble that are bounds their duty through...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-6.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="inner">
                                        <div class="icon-box"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                        <div class="text">
                                            <span class="category">Operations</span>
                                            <h3><a href="service-details.html">& Maintenance</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="text">
                                        <span class="category">Operations</span>
                                        <h3><a href="service-details.html">& Maintenance</a></h3>
                                        <p>Indignation and dislikes men who are so beguiled all charms pleasure of the moment...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-7.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="inner">
                                        <div class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></div>
                                        <div class="text">
                                            <span class="category">Solar</span>
                                            <h3><a href="service-details.html">Panel Services</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="text">
                                        <span class="category">Solar</span>
                                        <h3><a href="service-details.html">Panel Services</a></h3>
                                        <p>Beguiled and demoralized by the charms of pleasure of the moment so blinded foresee...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-two end -->


        <!-- funfact-section -->
        <section class="funfact-section centred green-bg">
            <span class="big-text">Fun Numbers</span>
            <div class="bg-layer">
                <div class="bg-1" style="background-image: url(assets/images/icons/vector-1.png);"></div>
                <div class="bg-2" style="background-image: url(assets/images/icons/vector-2.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="2600">0</span>
                                </div>
                                <h5>Projects Completed</h5>
                                <div class="icon-box"><i class="flaticon-mill"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="137">0</span>
                                </div>
                                <h5>Professional Staff</h5>
                                <div class="icon-box"><i class="flaticon-geology"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span>0</span><span class="count-text" data-speed="1500" data-stop="9">0</span>
                                </div>
                                <h5>Countries Covered</h5>
                                <div class="icon-box"><i class="flaticon-earth-globe"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="845">0</span>
                                </div>
                                <h5>Satisfied People</h5>
                                <div class="icon-box"><i class="flaticon-happiness"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- working-section -->
        <section class="working-section sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <div class="title-top">
                                    <div class="shape-box">
                                        <span class="shape shape-1">//</span>
                                    </div>
                                    <h6>Working Process</h6>
                                </div>
                                <h2>4 ways to Achive results</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text">
                                <p>Power of choice is untrammelled & when nothing prevents our being able to do what we like bestevery pleasure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                <h6>Step</h6>
                                <h2>01...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt=""></div>
                                <h5>Consult With US</h5>
                                <p>Frequently occurs that pleasures have to be repudiated & annoyan accepted expound.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/icons/arrow-2.png);"></div>
                                <h6>Step</h6>
                                <h2>02...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></div>
                                <h5>Genreate Power</h5>
                                <p>Idea of denouncing pleasure and praisings pain swas born and will give you a completed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                <h6>Step</h6>
                                <h2>03...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-12.png" alt=""></div>
                                <h5>Store the Power</h5>
                                <p>No one rejects dislikes or avoided pleasure itself because it because do not know pursue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Step</h6>
                                <h2>04...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-13.png" alt=""></div>
                                <h5>Use it Flexibly</h5>
                                <p>Ever undertakes laborious except to obtain some advantage from it right to find fault.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-section end -->


        <!-- project-section -->
        <section class="project-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <div class="title-top">
                        <div class="shape-box">
                            <span class="shape shape-1">//</span>
                            <span class="shape shape-2">\\</span>
                        </div>
                        <h6>Latest Projects</h6>
                    </div>
                    <h2>Works Across the World</h2>
                    <div class="title-text">
                        <p>These cases are perfectly simple easy to distinguish free hour <br />power off choice isuntrammelled.</p>
                    </div>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/protfolio-1.jpg" alt=""></figure>
                                    <div class="text"><h6>[ Energy ]</h6></div>
                                    <div class="overlay-content">
                                        <div class="view-btn"><a href="assets/images/gallery/protfolio-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zooming"></i></a></div>
                                        <div class="inner">
                                            <h6>[ Energy ]</h6>
                                            <h5><a href="portfolio-details.html">Leading the energy transition</a></h5>
                                            <div class="link"><a href="portfolio-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/protfolio-2.jpg" alt=""></figure>
                                    <div class="text"><h6>[ Research ]</h6></div>
                                    <div class="overlay-content">
                                        <div class="view-btn"><a href="assets/images/gallery/protfolio-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zooming"></i></a></div>
                                        <div class="inner">
                                            <h6>[ Research ]</h6>
                                            <h5><a href="portfolio-details.html">Leading the Research transition</a></h5>
                                            <div class="link"><a href="portfolio-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/protfolio-3.jpg" alt=""></figure>
                                    <div class="text"><h6>[ Insights ]</h6></div>
                                    <div class="overlay-content">
                                        <div class="view-btn"><a href="assets/images/gallery/protfolio-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zooming"></i></a></div>
                                        <div class="inner">
                                            <h6>[ Insights ]</h6>
                                            <h5><a href="portfolio-details.html">Leading the Insights transition</a></h5>
                                            <div class="link"><a href="portfolio-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/protfolio-4.jpg" alt=""></figure>
                                    <div class="text"><h6>[ Innovations ]</h6></div>
                                    <div class="overlay-content">
                                        <div class="view-btn"><a href="assets/images/gallery/protfolio-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zooming"></i></a></div>
                                        <div class="inner">
                                            <h6>[ Innovations ]</h6>
                                            <h5><a href="portfolio-details.html">Leading the Innovations transition</a></h5>
                                            <div class="link"><a href="portfolio-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-section end -->


        <!-- skills-section -->
        <section class="skills-section bg-color-2 sec-pad">
            <div class="bg-layer">
                <div class="bg-1"></div>
                <div class="bg-2"></div>
                <div class="bg-3"></div>
            </div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="image-layer">
                <figure class="image image-1"><img src="assets/images/icons/wind-1.png" alt=""></figure>
                <figure class="image image-2 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/resource/men-1.png" alt=""></figure>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title light">
                                    <div class="title-top">
                                        <div class="shape-box">
                                            <span class="shape shape-1">//</span>
                                        </div>
                                        <h6>Company Statistics</h6>
                                    </div>
                                    <h2>For Over 08 Years in <br />the Business</h2>
                                </div>
                                <div class="text">
                                    <p>Our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided certain circumstances.</p>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress-box">
                                        <div class="bar-box">
                                            <h6>Solar Energy</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="62%"></div>
                                            </div>
                                        </div>
                                        <div class="count-text">62%</div>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar-box">
                                            <h6>Wind Energy</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="89%"></div>
                                            </div>
                                        </div>
                                        <div class="count-text">89%</div>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar-box">
                                            <h6>Hydroelectric Energy</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="75%"></div>
                                            </div>
                                        </div>
                                        <div class="count-text">75%</div>
                                    </div>
                                </div>
                                <div class="author-box">
                                    <figure class="signature"><img src="assets/images/icons/signature-1.png" alt=""></figure>
                                    <div class="author-info">
                                        <h5>Roman Primera</h5>
                                        <span class="designation">Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skills-section end -->


        <!-- team-section -->
        <section class="team-section sec-pad">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <div class="title-top">
                                    <div class="shape-box">
                                        <span class="shape shape-1">//</span>
                                    </div>
                                    <h6>Leadership Team</h6>
                                </div>
                                <h2>Team behind Our Success</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text">
                                <p>Cases are perfectly simple and easy to distinguish. In a free hour when our power off choice is untrammelled.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h5><a href="index.html">Marc Kenneth</a></h5>
                                    <span class="designation">Senior VP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h5><a href="index.html">Owen Lester</a></h5>
                                    <span class="designation">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h5><a href="index.html">Oscar Melvin</a></h5>
                                    <span class="designation">Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section sec-pad" style="background-image: url(assets/images/background/testimonial-bg.jpg);">
            <div class="auto-container">
                <div class="sec-title light centred">
                    <div class="title-top">
                        <div class="shape-box">
                            <span class="shape shape-1">//</span>
                            <span class="shape shape-2">\\</span>
                        </div>
                        <h6>Testimonials</h6>
                    </div>
                    <h2>What Our Clients Say</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="author-box">
                                <figure class="quote"><img src="assets/images/icons/quote-1.png" alt=""></figure>
                                <h5>Silvester Scott</h5>
                                <span class="designation">Liverpool</span>
                            </div>
                            <div class="text">
                                <p>Energo solar went above and beyond our expectations! Just  a great experience. All workers from the bid to the work was very professional.</p>
                            </div>
                            <ul class="rating clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="author-box">
                                <figure class="quote"><img src="assets/images/icons/quote-1.png" alt=""></figure>
                                <h5>Dahlia Bianca</h5>
                                <span class="designation">Portsmouth</span>
                            </div>
                            <div class="text">
                                <p>Excellent service at every step, from initial contact to go-live. professional & highly knowledgeable staff. we cannot imagine the customer service.</p>
                            </div>
                            <ul class="rating clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="author-box">
                                <figure class="quote"><img src="assets/images/icons/quote-1.png" alt=""></figure>
                                <h5>Eddie Fabian</h5>
                                <span class="designation">Liverpool</span>
                            </div>
                            <div class="text">
                                <p>Installation went very smoothly; there were no hidden costs & all paperwork was completed seamlessly. The design fit very well with the house.</p>
                            </div>
                            <ul class="rating clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half"></i></li>
                            </ul>
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <div class="title-top">
                                    <div class="shape-box">
                                        <span class="shape shape-1">//</span>
                                    </div>
                                    <h6>News & Updates</h6>
                                </div>
                                <h2>Recent From Our Blog</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text">
                                <p>Desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">Jun 25, 2021</span>
                                <ul class="post-info clearfix">
                                    <li><i class="far fa-folder"></i>Innovation</li>
                                    <li><i class="far fa-user"></i>By Admin</li>
                                </ul>
                                <h5><a href="blog-details.html">New Solar Tariffs and the Expected Impact</a></h5>
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                <div class="btn-box">
                                    <a href="blog-details.html"><i class="flaticon-right-arrow"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">Jun 20, 2021</span>
                                <ul class="post-info clearfix">
                                    <li><i class="far fa-folder"></i>Service Tips</li>
                                    <li><i class="far fa-user"></i>By Admin</li>
                                </ul>
                                <h5><a href="blog-details.html">Tax & Duties Are Acting As Road Block for...</a></h5>
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                <div class="btn-box">
                                    <a href="blog-details.html"><i class="flaticon-right-arrow"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">May 10, 2021</span>
                                <ul class="post-info clearfix">
                                    <li><i class="far fa-folder"></i>Engineering</li>
                                    <li><i class="far fa-user"></i>By Admin</li>
                                </ul>
                                <h5><a href="blog-details.html">Energo’21: The latest technology & Achivements</a></h5>
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                <div class="btn-box">
                                    <a href="blog-details.html"><i class="flaticon-right-arrow"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- clients-section -->
        <section class="clients-section border-top">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->

        <!-- main-footer -->
        <footer class="main-footer bg-color-2">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                                <div class="support-box">
                                    <i class="far fa-envelope-open"></i>
                                    <h6>Free Consult</h6>
                                    <a href="mailto:info [at] sentecltd.com">info [at] sentecltd.com</a>
                                </div>
                                <div class="text">
                                    <p>Our goal is to create social economic opportunities to our clients through provision of affordable, sustainable and reliable energy solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h5>Company</h5>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{url('about/company')}}">About Us</a></li>
                                        <li><a href="{{url('about/team')}}">Our Team</a></li>
                                        <li><a href="{{url('services/heater')}}">Services</a></li>
                                        <li><a href="{{url('/project')}}">Projects Portfolio</a></li>
                                        <li><a href="{{url('shop')}}">Shop</a></li>
                                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h5>Links</h5>
                                </div>
                                <div class="widget-content">
                                        <ul class="links-list clearfix">
                                        <li><a href="index.html">Terms & Conditions</a></li>
                                        <li><a href="index.html">Privacy Policy</a></li>
                                        <li><a href="index.html">Sitemap</a></li>
                                        <li><a href="index.html">Updates</a></li>
                                        <li><a href="index.html">Offers</a></li>
                                        <li><a href="index.html">Estimation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="copyright text-center">
                            <p>Copyright &copy; 2022 <a href="index.html">Sentec</a>. All Rights Reserved.</p>
                        
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-up-arrow"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
