@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>SOLAR POWER SYSTEMS</h1>
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
                    <div class="col-lg-6 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar default-sidebar">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h5>Main Services</h5>
                                    <div class="icon-box"><img src="assets/images/icons/icon-54.png" alt=""></div>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="{{url('led')}}" class="current"><i class="fas fa-angle-right"></i><span>Led Lighting Solutions</span></a></li>
                                        <li><a href="{{url('inverter')}}"><i class="fas fa-angle-right"></i><span>Inverter Power Backup Systems</span></a></li>
                                        <li><a href="{{url('heater')}}"><i class="fas fa-angle-right"></i><span>Water Heating Systems</span></a></li>
                                        <li><a href="{{url('solar')}}"><i class="fas fa-angle-right"></i><span>Solar Power Systems</span></a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget downloads-widget">
                            <figure class="main-image"><img src="assets/images/Rooftop-Solar-System.png" alt=""></figure>
                                
                            </div>
                            <div class="sidebar-content">
                            <figure class="main-image"><img src="assets/images/Different-Solar-Panel-Sizes.png" alt=""></figure>
                            <div class="content-one">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <figure class="main-image"><img src="assets/images/service/service-15.jpg" alt=""></figure>
                            <div class="content-one">
                                <div class="text">
                                    <h2>Rooftop Solar System</h2>
                                    <p>
                                    We use nature’s free light energy from the sun to provide electricity to all forms of requirements. Our solar power systems are sourced from highly accredited European supply markets of Germany and Denmark.<br>
                                    <br>

                                    The solar power systems are provided on warranty terms carried by the manufacturer and adequately enforced by the SENTEC able technical team.
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    </div>
                            
                            </div>
                            <div class="content-two">
                                <div class="text">
                                    <h3>Different Solar Panel Sizes</h3>
                                    <p>Solar Panels provide low cost energy solutions to the domestic, commercial and industrial sectors of our economy. At SENTEC we are involved massively in sales and distribution of solar panel of different sizes.<br>
                                    <br>
                                    Our team of engineers design and install solar solutions for you ensuring you get the best solution that fit your needs.</p>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


       @endsection