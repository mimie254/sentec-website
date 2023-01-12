@extends('_includes._main')
@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>SOLAR Photovoltaic SYSTEMS</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Services</li>
                    <li>SOLAR POWER SYSTEMS</li>
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
                                <div class="icon-box"><img src="{{asset('assets/images/icons/icon-54.png')}}" alt="">
                                </div>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="{{url('services/street-lighting')}}"><i
                                                class="fas fa-angle-right"></i><span>Street Lighting</span></a>
                                    </li>
                                    <li><a href="{{url('services/lighting-solutions')}}"><i
                                                class="fas fa-angle-right"></i><span>Lighting Solutions</span></a>
                                    </li>
                                    <li><a href="{{url('/services/solar-photovoltaic-systems')}}" class="current"><i
                                                class="fas fa-angle-right"></i><span>Solar Power Solutions</span></a>
                                    </li>
                                    <li><a href="{{url('/services/water-heating-systems')}}"><i
                                                class="fas fa-angle-right"></i><span>Water Heating Systems</span></a>
                                    </li>


                                    {{--<li><a href="{{url('services/power-backup-systems')}}"><i
                                                class="fas fa-angle-right"></i><span>Power Backup Systems</span></a>
                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <h3>Residential Solutions</h3>
                        <hr>
                        <div style="margin-left: 20px">
                            <div class="content-one">
                                <div class="text">

                                    <h5>Off-Grid/On-Grid Solar System</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Our Off grid solar systems are ideal for residential rural houses not connected to the grid. We design a battery storage inclusive system can meet up to 100% of your electricity consumption,<br><br>
                                                Whereas Our On grid (grid tie) solar systems utilize solar energy during day and Kenya Power at night. This option still enables you to offset a big part of your electricity bills .
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="main-image"><img src="{{asset('assets/images/off-on-grid.jpeg')}}"
                                                                            style="max-height: 300px" alt=""></figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="content-one">
                                <div class="text">
                                    <h5>Power Backup Systems</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Our Hybrid solar systems are connected to the grid but utilize solar energy during day and have backup batteries to store excess power that will continue to power up your home even at night. This can cover up to 70% of your electricity consumption.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="main-image"><img src="{{asset('assets/images/batterie.jpeg')}}"
                                                                            style="max-height: 300px" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-one">
                                <div class="text">
                                    <h5>Water Pumping Solutions</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                We provide solarization for water pumping systems for both domestic ground water supply as well as irrigation systems.<br>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="main-image"><img src="{{asset('assets/images/waterPumping.jpeg')}}"
                                                                            style="max-height: 300px" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-details-content">
                        <h3>Commercial Solutions</h3>
                        <hr>
                        <div style="margin-left: 20px">
                            <div class="content-one">
                                <div class="text">
                                    <p>
                                        The increasingly high electricity bills are pushing various businesses and manufacturers to the wall. This affects their cost of production and ultimately their sales potential and market competitiveness.
                                        <br>
                                        Maximize your business' profitability by reducing your energy cost with our reliable solar power solutions.
                                    </p>
                                </div>
                                <figure class="main-image"><img src="{{asset('assets/images/commercial.jpeg')}}"
                                                                style="max-height: 300px" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->


@endsection
