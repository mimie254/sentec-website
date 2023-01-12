@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>STREET LIGHTING</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Services</li>
                        <li>Street Lighting</li>
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
                                        <li><a href="{{url('services/street-lighting')}}" class="current"><i
                                                    class="fas fa-angle-right"></i><span>Street Lighting</span></a>
                                        </li>
                                        <li><a href="{{url('services/lighting-solutions')}}"><i
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
                                <h6 class="mt-5">Mombasa southern bypass - grid tie lights replaced by solar  street lights</h6>
                                <hr>
                                <figure class="row image-box">
                                    <img style="max-height: 270px"  class="mr-5" src="{{asset('assets/images/s-bypass1.jpeg')}}" alt="">
                                    <img style="max-height: 270px" src="{{asset('assets/images/s-bypass2.jpeg')}}" alt="">
                                </figure>
                                <h6 class="mt-5">Dongo Kundu in Mombasa , solar streetlights during the day and at night</h6>
                                <hr>
                                <figure class="row image-box">
                                    <img style="max-height: 400px" class="mr-5" src="{{asset('assets/images/kundu1.jpeg')}}" alt="">
                                    <img style="max-height: 400px" src="{{asset('assets/images/kundu2.jpeg')}}" alt="">

                                </figure>
                                <h6 class="mt-5">Mombasa bypass- high mast lights at the Kenha bridge and sgr parking area</h6>
                                <hr>
                                <figure class="row image-box">
                                    <img style="max-height: 400px" class="mr-5 mb-5" src="{{asset('assets/images/bypass.jpeg')}}" alt="">
                                    <img style="max-height: 400px" class="mr-5 mb-5"  src="{{asset('assets/images/bypass2.jpeg')}}" alt="">
                                    <img style="max-height: 400px" class="mr-5 mb-5"  src="{{asset('assets/images/bypass3.jpeg')}}" alt="">
                                    <img style="max-height: 400px" class="mr-5 mb-5"  src="{{asset('assets/images/bypass4.jpeg')}}" alt="">
                                    <img style="max-height: 400px" class="mr-5 mb-5"  src="{{asset('assets/images/bypass5.jpeg')}}" alt="">
                                    <img style="max-height: 400px" class="mr-5 mb-5"  src="{{asset('assets/images/bypass6.jpeg')}}" alt="">
                                </figure>
                                <h6 class="mt-5">Machakos county - Highmasts during the day and at night</h6>
                                <hr>
                                <figure class="row image-box">
                                    <img style="max-height: 400px" class="mr-5 mb-5" src="{{asset('assets/images/macha.jpeg')}}" alt="">
                                    <img style="max-height: 400px" class="mr-5 mb-5"  src="{{asset('assets/images/macha2.jpeg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


        @endsection
