@extends('_includes._main')
@section('content')


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
                <h2>LEADING THE SOLAR REVOLUTION <br/>SINCE 2012</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/shaurii.png')}}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_7">
                        <div class="content-box">
                            <div class="text">
                                <h5>Welcome to SENTIMENTAL ENERGY</h5>
                                <p>
                                    Sentimental Energy Company Limited is a duly registered company in Kenya since 2012
                                    and was incorporated in the year 2016. It was formed out of a desire to provide low
                                    cost energy solutions to the region’s domestic, commercial and industrialization
                                    sector with emphasis on solar energy and low load consuming Lighting solutions. We
                                    design, develop, install and maintain solar power, solar water heating and power
                                    backup systems and LED lighting solutions.<br>
                                    We are also involved massively in sales and distribution of solar panels, charge
                                    controllers, inverters, batteries and LED lights. The company has over 6 years of
                                    experience in the renewable energy industry centered on actual hands-on experiences
                                    in design, sizing, installation and commissioning, energy audit and management.<br>
                                    SENTEC is owned by a team of professionals with competent skills and experience in
                                    their respective fields of, energy systems design, installation and management,
                                    financial project management and sales. Our mission is to become the leader in the
                                    alternative energy movement that takes place in the region with emphasis on the
                                    affordable sustainable and reliable solar power, water heating and LED lighting
                                    solutions.
                                </p>
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
    <section class="statements-section" style="background-image: url(assets/images/sentecAll.png);">
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
                                        <ul class="clearfix">
                                            <li>
                                                To create social economic opportunities to our clients through provision
                                                of affordable, sustainable and reliable energy solutions.
                                            </li>
                                            <li>
                                                To become the leader in the alternative energy movement that takes place
                                                in the region with emphasis on the affordable sustainable and reliable
                                                solar power, water heating and LED lighting solutions.
                                            </li>
                                        </ul>
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
@endsection
