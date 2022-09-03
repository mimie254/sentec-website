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
                                                <li><a href="{{url('/led')}}">Led Lighting Solutions</a></li>
                                                <li><a href="{{url('/inverter')}}">Inverter Power Backup Systems</a></li>
                                                <li><a href="{{url('/heater')}}">Water Heating Systems</a></li>
                                                <li><a href="{{url('/solar')}}">Solar Power Systems</a></li>
                            
                                            </ul>
                                        </li> 
                                        <li ><a href="{{url('/project')}}">Projects</a>
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
                                <h5><i class="fas fa-headphones"></i><span>+254 709 750 074</span></h5>
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
                                        <li><a href="{{url('/company')}}">About Us</a></li>
                                        <li><a href="{{url('/team')}}">Our Team</a></li>
                                        <li><a href="{{url('/heater')}}">Services</a></li>
                                        <li><a href="{{url('/project')}}">Projects Portfolio</a></li>
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