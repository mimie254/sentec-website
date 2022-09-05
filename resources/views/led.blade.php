@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>LED LIGHTING SOLUTIONS</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Services</li>
                        <li>Led Lighting Solutions</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-details -->
        <section class="service-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar default-sidebar">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h5>Main Services</h5>
                                    <div class="icon-box"><img src="assets/images/icons/icon-54.png" alt=""></div>
                                </div>
                                <div class="widget-content">
                                <li><a href="{{url('led')}}" class="current"><i class="fas fa-angle-right"></i><span>Led Lighting Solutions</span></a></li>
                                        <li><a href="{{url('inverter')}}"><i class="fas fa-angle-right"></i><span>Inverter Power Backup Systems</span></a></li>
                                        <li><a href="{{url('heater')}}"><i class="fas fa-angle-right"></i><span>Water Heating Systems</span></a></li>
                                        <li><a href="{{url('solar')}}"><i class="fas fa-angle-right"></i><span>Solar Power Systems</span></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <figure class="main-image"><img src="{{asset('assets/images/led.png')}}" style="height: 450px" alt=""></figure>
                            <div class="content-one">
                                <div class="text">
                                    <h2>LED LIGHTING SOLUTIONS</h2>
                                    <p>These are independent compact lights that consists of solar panel, lithium ion battery, charge controller, and an LED light. Some of the systems have motion sensors and run for 50,000 light hours in a single lifetime.<br>
                                    <br>

                                    Suitable for outdoor lighting for both domestic and industrial uses. Use of solar LED security lights saves costs on main lighting components through zero monthly billing, fitting replacements after every single year and zero cabling.</p>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('assets/images/2W-Garden-Light.png')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="inner">
                                                    <div class="text">
                                                        <span class="category">2W</span>
                                                        <h3><a href="#">Garden Light</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="text">
                                                    <span class="category">2W</span>
                                                    <h3><a href="#">Garden Light</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('assets/images/1.5W-Garden-Light.png')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="inner">
                                                    <div class="text">
                                                        <span class="category">1.5W</span>
                                                        <h3><a href="#">Garden Light</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="text">
                                                    <span class="category">1.5W</span>
                                                    <h3><a href="#">Garden Light</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix mt-5">
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('assets/images/5W-Wall-Light.png')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="inner">
                                                    <div class="text">
                                                        <span class="category">5W</span>
                                                        <h3><a href="#">Garden Light</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="text">
                                                    <span class="category">5W</span>
                                                    <h3><a href="#">Garden Light</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('assets/images/6W-Security-Light.png')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="inner">
                                                    <div class="text">
                                                        <span class="category">6W</span>
                                                        <h3><a href="#">Security Light</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="text">
                                                    <span class="category">6W</span>
                                                    <h3><a href="#">Security Light</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix mt-5">
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('assets/images/24W-Solar-Security.png')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="inner">
                                                    <div class="text">
                                                        <span class="category">24W</span>
                                                        <h3><a href="#">Solar Security</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="text">
                                                    <span class="category">24W</span>
                                                    <h3><a href="#">Solar Security</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('assets/images/100W-Solar-Floodlight.png')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="inner">
                                                    <div class="text">
                                                        <span class="category">100W</span>
                                                        <h3><a href="#">Solar Floodlight</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="text">
                                                    <span class="category">100W</span>
                                                    <h3><a href="#">Solar Floodlight</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


        @endsection
