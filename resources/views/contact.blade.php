@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>Contact Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-info-two -->
        <section class="contact-info-two">
            <div class="auto-container">
                <div class="sec-title centred">
                    <div class="title-top">
                        <div class="shape-box">
                            <span class="shape shape-1">//</span>
                            <span class="shape shape-2">\\</span>
                        </div>
                        <h6>Want quick help?</h6>
                    </div>
                    <h2>Good Time to Connect With Us</h2>
                    <div class="title-text">
                        <p>Desire that they cannot foresee the pain and trouble that are  bound <br />equal blame belongs to their duty.</p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="inner-box left-column">
                            <div class="shape" style="background-image: url(assets/images/icons/icons-shape-1.png);"></div>
                            <div class="single-info-box">
                                <div class="icon-box"><i class="far fa-map"></i></div>
                                <h6>Address</h6>
                                <span>Diani close, off Oledume Rd, Gate 7, Office block 2</span>
                            </div>
                            <div class="single-info-box">
                                <div class="icon-box"><i class="fas fa-headphones"></i></div>
                                <h6>Sales Team</h6>
                                <span><a href="tel:+254 725 445 459">+254 700 042150</a></span>
                            </div>
                            <div class="single-info-box">
                                <div class="icon-box"><i class="far fa-clock"></i></div>
                                <h6>Off. Hrs</h6>
                                <span>Mon - Fri: 08.00 to 05.00</span>
                                <span>Sat: 08.30 to 12.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        {{--<div class="image-box">
                            <figure class="image clearfix"><img src="{{asset('assets/images/resource/contact-1.png')}}" alt=""></figure>
                        </div>--}}
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="inner-box text-right right-column">
                            <div class="shape" style="background-image: url(assets/images/icons/icons-shape-2.png);"></div>
                            <div class="single-info-box">
                                <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                                <h6>Email</h6>
                                <span><a href="mailto:info@sentecltd.com">INFO [AT] SENTECLTD.COM</a></span>
                            </div>
                            <div class="single-info-box">
                                <div class="icon-box"><i class="fas fa-headphones"></i></div>
                                <h6>Marketing</h6>
                                <span><a href="tel: +254 709 750 074"> +254 757 674466</a></span>
                            </div>
                            <div class="single-info-box">
                                <div class="icon-box"><i class="fas fa-question"></i></div>
                                <h6>Our Faq</h6>
                                <span>Checkout your answers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-two end -->


        <!-- contact-form-section -->
        <section class="contact-form-section ">

            <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="footer-widget logo-widget">
                <div class="form-inner">
                    <div class="text">
                        <h3>Send Your Message</h3>
                        <p>Please feel free to get in touch using the form below. We'd love to hear for you.</p>
                    </div>
                    <form method="post" action="https://st.ourhtmldemo.com/new/Energo/sendemail.php" id="contact-form" class="default-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="form-group">
                                    <i class="far fa-envelope-open"></i>
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="form-group">
                                    <i class="far fa-phone"></i>
                                    <input type="text" name="phone" required="" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="form-group">
                                    <i class="far fa-desktop"></i>
                                    <input type="text" name="subject" required="" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                <div class="form-group">
                                    <i class="far fa-text-width"></i>
                                    <textarea name="message" placeholder="Your Message..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                <div class="message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form"><i class="flaticon-right-arrow"></i>Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 column">

                     <div class="footer-widget logo-widget">
                        <div class="map-inner ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1994.398516276433!2d36.77149101788941!3d-1.2964160661790831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11b004e084b5%3A0xfbb139f52eba27da!2sOFGEN!5e0!3m2!1sen!2ske!4v1665513288422!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <script src="assets/js/map-helper.js"></script>
                        </div>
                    </div>
                </div>
            </div>
         </div>

        </section>

        <!-- contact-form-section end -->


        <!-- google-map-section -->
        <!--section class="google-map-section">
            <div class="map-inner">
                <div
                    class="google-map"
                    id="contact-google-map"
                    data-map-lat="40.712776"
                    data-map-lng="-74.005974"
                    data-icon-path="assets/images/icons/map-marker.png"
                    data-map-title="Brooklyn, New York, United Kingdom"
                    data-map-zoom="12"
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </!--section>
        <!-- google-map-section end -->
        <!-- map script -->
        <!-- google-map-section -->


         @endsection
