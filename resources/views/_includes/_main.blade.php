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
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

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

    <style>
        .image-box-elm {
            position: unset !important;
            display: flex !important;
            height: 246px !important;
        }
    </style>

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
                        <h6><i class="comment-icon fas fa-comments"></i>Looking for Solar Consulting?&nbsp;&nbsp;<a
                                href="{{url('contact')}}">&nbsp;&nbsp;Contact us Today</a></h6>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <ul class="social-links clearfix">
                            <li><a href="https://www.facebook.com/sentimentalenergy/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://twitter.com/SentecLtd"><i class="fab fa-twitch"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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
                            <figure class="logo"><a href="{{url('/')}}"><img
                                        src="{{asset('assets/images/logo.png')}}" style="max-height: 60px"
                                        alt=""></a></figure>
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
                                    <li><a href="{{('/')}}">Home</a>

                                    </li>
                                    <li class="dropdown"><a href="{{url('/')}}">About</a>
                                        <ul>
                                            <li><a href="{{url('/company')}}">Company</a></li>
                                            <li><a href="{{url('/team')}}">Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{url('/services/solar-photovoltaic-systems')}}">Main Services</a>
                                        <ul style="width: 500px">
                                            <li><a href="{{url('services/street-lighting')}}">Street Lighting</a></li>
                                            <li><a href="{{url('services/lighting-solutions')}}">Lighting Solutions</a></li>
                                            <li><a href="{{url('/services/solar-photovoltaic-systems')}}">Solar Power Solutions</a></li>
                                            <li><a href="{{url('/services/water-heating-systems')}}">Water Heating Systems</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{url('/products/solar')}}">Products</a>
                                        <ul style="width: 500px">
                                            <li><a href="{{url('products/solar')}}">Solar Panels</a></li>
                                            <li><a href="{{url('products/inverters')}}">Inverters</a></li>
                                            <li><a href="{{url('products/batteries')}}">Batteries</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/projects')}}">Projects</a>
                                    </li>

                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="nav-right pull-right clearfix">
                        <div class="support-box">
                            <h5><i class="fas fa-headphones"></i><span>+254 725 445 459</span></h5>
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
                                <li><a href="#">English (US)</a></li>
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
                            <figure class="logo"><a href="{{url('/')}}"><img
                                        src="{{asset('assets/images/logo.png')}}" style="max-height: 60px"
                                        alt=""></a></figure>
                        </div>
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="nav-right pull-right clearfix">
                        <div class="support-box">
                            <h5><i class="fas fa-headphones"></i><span>+254 725 445 459</span></h5>
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
                                <li><a href="#">English (US)</a></li>
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
            <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset('assets/images/logo.png')}}" style="max-height: 40px" alt=""
                                                              title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
                    <li><a href="https://www.facebook.com/sentimentalenergy/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://twitter.com/SentecLtd"><i class="fab fa-twitch"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

@yield ('content')

<!-- main-footer -->
    <footer class="main-footer bg-color-2">
        <div class="footer-top">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="{{url('/')}}"><img
                                        src="{{asset('assets/images/logo.png')}}" style="max-height: 100px"
                                        alt=""></a></figure>
                            <div class="support-box">
                                <i class="far fa-envelope-open"></i>
                                <h6>Free Consult</h6>
                                <a href="mailto:info@sentecltd.com">info@sentecltd.com</a>
                            </div>
                            <div class="text">
                                <p>Our goal is to create social economic opportunities to our clients through provision
                                    of affordable, sustainable and reliable energy solutions.</p>
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
                                    <li><a href="{{url('/company')}}">About Us</a></li>
                                    <li><a href="{{url('/team')}}">Our Team</a></li>
                                    <li><a href="{{url('/services/solar-photovoltaic-systems')}}">Main Services/Products</a></li>
                                    <li><a href="{{url('/projects')}}">Projects Portfolio</a></li>
                                    <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h5>News letters</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a target="_blank" href="{{asset('assets/nl/EASTER NEWSLETTER.pdf')}}">Mar 2024</a></li>
                                    <li><a target="_blank" href="{{asset('assets/nl/Feb Newsletter - SENTEC PRINT OUT.pdf')}}">Feb 2024</a></li>
                                    <li><a target="_blank" href="{{asset('assets/nl/January 2024 Email Newsletter - SENTEC.pdf')}}">Jan 2024</a></li>
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
                        <p>Copyright &copy; 2022 <a href="{{url('/')}}">Sentec</a>. All Rights Reserved.</p>

                    </div>
                </div>
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
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/validation.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/js/jquery.lettering.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.circleType.js')}}"></script>

<!-- main-js -->
<script src="{{asset('assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
