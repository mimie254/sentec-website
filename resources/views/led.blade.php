@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>LIGHTING SOLUTIONS</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Services</li>
                        <li>Lighting Solutions</li>
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
                                    <ul class="category-list clearfix">
                                        <li><a href="{{url('services/lighting-solutions')}}" class="current"><i
                                                    class="fas fa-angle-right"></i><span>Lighting Solutions</span></a>
                                        </li>
                                        <li><a href="{{url('/services/solar-photovoltaic-systems')}}"><i
                                                    class="fas fa-angle-right"></i><span>Solar Power Solutions</span></a>
                                        </li>
                                        <li><a href="{{url('/services/water-heating-systems')}}"><i
                                                    class="fas fa-angle-right"></i><span>Water Heating Systems</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-one mt-3">
                                <div class="text mb-1">
                                    <h5>STREET LIGHTING SOLUTIONS</h5>
                                    <hr>
                                    <p>
                                        Powerfully illuminated, these are 100% solar street lights that are equipped with a vandal-proof system, a smart self-adaptive and programmable controller and maintenance free for the first 10 years.
                                        <br>
                                        Made in France, they have their own smart lithium ion batteries built specifically for solar street lighting and guarantee 365 nights lighting all year long. They are ideal for all types of outdoor lighting: public spaces, residential or commercial areas.
                                        <br>
                                </div>
                                <figure class="image-box"><img src="{{asset('assets/images/street-lighting.jpeg    ')}}" alt=""></figure>

                            </div>
                            <div class="content-one mb-1">
                                <div class="text mb-1">
                                    <h5>LED LIGHTING SOLUTIONS</h5>
                                    <hr>
                                    <p>These are independent compact lights that consists of solar panel, lithium ion battery, charge controller, and an LED light. Some of the systems have motion sensors and run for 50,000 light hours in a single lifetime.<br>
                                    <br>

                                    Suitable for outdoor lighting for both domestic and industrial uses. Use of solar LED security lights saves costs on main lighting components through zero monthly billing, fitting replacements after every single year and zero cabling.</p>

                                </div>
                            </div>
                            <div class="row clearfix">
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
                            </div>
                            <div class="row clearfix mt-5">
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
