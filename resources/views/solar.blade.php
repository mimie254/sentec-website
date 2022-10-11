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
                                <div class="icon-box"><img src="{{asset('assets/images/icons/icon-54.png')}}" alt=""></div>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="{{url('/services/solar-photovoltaic-systems')}}" class="current"><i
                                                class="fas fa-angle-right"></i><span>Solar Photovoltaic Systems</span></a></li>
                                    <li><a href="{{url('/services/water-heating-systems')}}"><i class="fas fa-angle-right"></i><span>Water Heating Systems</span></a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i><span>Water Pumping Systems</span></a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i><span>Street Lighting Solutions</span></a></li>
                                    <li><a href="{{url('services/LED-lighting-solutions')}}"><i class="fas fa-angle-right"></i><span>LED Lighting Solutions</span></a></li>
                                    <li><a href="{{url('services/power-backup-systems')}}"><i class="fas fa-angle-right"></i><span>Power Backup Systems</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <figure class="main-image"><img src="{{asset('assets/images/solarPower.png')}}"
                                                        style="max-height: 450px" alt=""></figure>
                        <div class="content-one">
                            <div class="text">
                                <h3>Rooftop Solar System</h3>
                                <p>
                                    We use nature’s free light energy from the sun to provide electricity to all forms of requirements. <br>Our solar power systems are sourced form highly accredited European supply markets of Germany and Denmark. <br>The solar power systems are provided on warranty terms carried by the manufacturer and adequately enforced by the SENTEC able technical department. <br>Systems and products in this category include off grid power solutions, grid tie solar power solutions and backup power solutions on turnkey arrangements. <br>Other products provided on individuality include high quality solar panels, reliable batteries, charge controllers and inverters
                                </p>
                            </div>

                        </div>
                        <div class="content-two">
                            <div class="text">
                                <h3>Different Solar Panel Sizes</h3>
                                <figure class="main-image"><img src="{{asset('assets/images/Different-Solar-Panel-Sizes.png')}}"
                                                                style="max-height: 300px" alt=""></figure>
                                <p>Solar Panels provide low cost energy solutions to the domestic, commercial and
                                    industrial sectors of our economy. At SENTEC we are involved massively in sales and
                                    distribution of solar panel of different sizes.<br>
                                    <br>
                                    Our team of engineers design and install solar solutions for you ensuring you get
                                    the best solution that fit your needs.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->


@endsection
