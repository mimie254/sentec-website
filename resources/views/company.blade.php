<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Sentec Ltd</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/theme-color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

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
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="g" class="letters-loading">
                                g
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
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
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
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
                                <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
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
                                        <li ><a href="{{('/')}}">Home</a>
                                            
                                        </li>
                                        <li class="dropdown"><a href="{{url('/')}}">About</a>
                                            <ul>
                                                <li><a href="{{url('/company')}}">Company</a></li>
                                                <li ><a href="{{url('/team')}}">Team</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="{{url('/')}}">Services</a>
                                            <ul>
                                                <li><a href="{{url('services/led')}}">Led Lighting Solutions</a></li>
                                                <li><a href="{{url('services/inverter')}}">Inverter Power Backup Systems</a></li>
                                                <li><a href="{{url('services/heater')}}">Water Heating Systems</a></li>
                                                <li><a href="{{url('services/solar')}}">Solar Power Systems</a></li>
                            
                                            </ul>
                                        </li> 
                                        <li ><a href="{{url('/project')}}">Projects</a>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Shop</a>
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


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>About Company</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                        <li>Company</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-style-three -->
        <section class="about-style-three sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <div class="title-top">
                        <div class="shape-box">
                            <span class="shape shape-1">//</span>
                            <span class="shape shape-2">\\</span>
                        </div>
                        <h6>Who We Are</h6>
                    </div>
                    <h2>LEADING THE SOLAR REVOLUTION <br />SINCE 2012</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/about-4.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_7">
                            <div class="content-box">
                                <div class="text">
                                    <h5>Welcome to SENTIMENTAL ENERGY</h5>
                               <p> Sentimental Energy Company Limited is a duly registered company in Kenya since 2012 and was incorporated in the year 2016. It was formed out of a desire to provide low cost energy solutions to the region’s domestic, commercial and industrialization sector with emphasis on solar energy and low load consuming Lighting solutions. We design, develop, install and maintain solar power, solar water heating and power backup systems and LED lighting solutions.<br>

                                We are also involved massively in sales and distribution of solar panels, charge controllers, inverters, batteries and LED lights. The company has over 6 years of experience in the renewable energy industry centered on actual hands on experiences in design, sizing, installation and commissioning, energy audit and management.<br>

                                SENTEC. is owned by a team of professionals with competent skills and experience in their respective fields of, energy systems design, installation and management, financial project management and sales.</p>
                                </div>
                            </div>
                                <div class="author-box">
                                <figure class="signature"><img src="assets/images/icons/signature-1.png" alt=""></figure>
                                    <div class="author-info">
                                        <h5>Paul Simiyu Mabonga</h5>
                                        <span class="designation">Managing Director and Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->


        <!-- statements-section -->
        <section class="statements-section" style="background-image: url(assets/images/background/statements-bg.jpg);">
            <div class="auto-container">
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">
                                <div class="icon-box"><img src="assets/images/icons/icon-40.png" alt=""></div>
                                <div class="icon-box-2"><img src="assets/images/icons/icon-41.png" alt=""></div>
                                <span>Sentec</span>
                                <h5>Mission Statement</h5>
                            </li>
                            <li class="tab-btn" data-tab="#tab-2">
                                <div class="icon-box"><img src="assets/images/icons/icon-42.png" alt=""></div>
                                <div class="icon-box-2"><img src="assets/images/icons/icon-43.png" alt=""></div>
                                <span>Sentec</span>
                                <h5>Vision Statement</h5>
                            </li>
                            <li class="tab-btn" data-tab="#tab-3">
                                <div class="icon-box"><img src="assets/images/icons/icon-44.png" alt=""></div>
                                <div class="icon-box-2"><img src="assets/images/icons/icon-45.png" alt=""></div>
                                <span>Sentec</span>
                                <h5>Value Statement</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="content-inner">
                                <div class="row clearfix">
                                    <div class="col-xl-7 col-lg-12 col-md-12 offset-xl-5">
                                        <div class="content-box">
                                            <h5>Mission Statement</h5>
                                            <br>
                                            <p>To create social economic opportunities to our clients through provision of affordable, sustainable and reliable energy solutions.</p>
                                            <br>
                                            To become the leader in the alternative energy movement that takes place in the region with emphasis on the affordable sustainable and reliable solar power, water heating and LED lighting solutions.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="content-inner">
                                <div class="row clearfix">
                                    <div class="col-xl-7 col-lg-12 col-md-12 offset-xl-5">
                                        <div class="content-box">
                                            <h5>Vision Statement</h5>
                                            <br>
                                            <p>Reliable affordable energy for all.</p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="content-inner">
                                <div class="row clearfix">
                                    <div class="col-xl-7 col-lg-12 col-md-12 offset-xl-5">
                                        <div class="content-box">
                                            <h5>Value Statement</h5>
                                            <p>Be the primary resource for providing clients with information in renewable energy, energy cost management and savings while backed by quality products and services towards reducing electricity cost by 50%.</p>
                                           
                                            <ul class="clearfix">
                                                <li>Quality products and services</li>
                                                <li>Informative and educative approach</li>
                                                <li>Professionalism in services delivery</li>
                                                <li>Reliability in supplies, deliveries and follow ups</li>
                                                <li>Dependable workmanship in all projects undertaken</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- statements-section end -->

        <!-- working-style-three -->
        <section class="working-style-three bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <figure class="image-box"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                            <div class="text">
                                <h6>Why Choose Us</h6>
                                <h3>A few reasons to Choose</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 working-block">
                                    <div class="working-block-three">
                                        <div class="inner-box">
                                            <span class="big-text">01</span>
                                            <div class="icon-box"><img src="assets/images/icons/icon-46.png" alt=""></div>
                                            <h5>Non-Polluting</h5>
                                            <p>Indignation dislike men who beguiled all demoralized by charms.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 working-block">
                                    <div class="working-block-three">
                                        <div class="inner-box">
                                            <span class="big-text">02</span>
                                            <div class="icon-box"><img src="assets/images/icons/icon-47.png" alt=""></div>
                                            <h5>Easy Installation</h5>
                                            <p>Foresee the pains & trouble that bound equally belongs to fail duty.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 working-block">
                                    <div class="working-block-three">
                                        <div class="inner-box">
                                            <span class="big-text">03</span>
                                            <div class="icon-box"><img src="assets/images/icons/icon-48.png" alt=""></div>
                                            <h5>Low Maintenance</h5>
                                            <p>Foresee the pains & trouble that bound equally belongs to fail duty.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 working-block">
                                    <div class="working-block-three">
                                        <div class="inner-box">
                                            <span class="big-text">04</span>
                                            <div class="icon-box"><img src="assets/images/icons/icon-49.png" alt=""></div>
                                            <h5>Easy Renewable</h5>
                                            <p>Indignation dislike men who beguiled all demoralized by charms.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-style-three end -->


        


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
