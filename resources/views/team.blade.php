@extends('_includes._main')
@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>About Team</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                    <li>Team</li>
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
                    <h6>THE TEAM</h6>
                </div>

            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/paul.png')}}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_7">
                        <div class="content-box">
                            <div class="text">
                                <h5>Paul Simiyu Mabonga - Managing Director and Founder</h5>
                                <p>I am a dedicated energy engineer, effective projects coordinator and manager with a
                                    passion to propagate the use of clean energy through audit, engineering,
                                    procurement, construction, operations and maintenance of solar energy systems.<br>

                                    I hold Bachelor of Science degree in Mechanical and Production Engineering (Moi
                                    University) and currently pursuing Masters in business administration (strategic
                                    management –JKUAT).<br>

                                    I have six years’ experience in energy sector with a focus on development,
                                    construction and service .My desire is to work, develop and perfect into a
                                    multidisciplinary team leader in energy and resources management for accessibility
                                    and environmental conservation.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_7">
                        <div class="content-box">
                            <div class="text">
                                <h5>Chesire Kipkemboi Edwin - Director Finance and Strategy</h5>
                                <p>Chesire Kipkemboi Edwin is a holder of B. Tech. in Mechanical and Production Engineering
                                    form Moi University and masters in Energy Technology from Jomo Kenyatta University of
                                    Agriculture and Technology. He is a registered graduate engineer with the Engineers
                                    Registration Board of Kenya.<br>

                                    He has expansive knowledge of the Kenya’s energy sector having worked with the Ministry
                                    of Energy and Petroleum for the past 6 years. He is has undertaken key tasks including
                                    the performing prefeasibility study for Kenya’s Nuclear Power Programme, Development of
                                    Energy Bill 2015 and Development of the long-term energy plan for the country: The Least
                                    Cost Power Development Plan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/chesire.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->
    <!-- funfact-section -->
    <section class="funfact-section centred green-bg">
        <span class="big-text">Fun Numbers</span>
        <div class="bg-layer">
            <div class="bg-1" style="background-image: url(assets/images/icons/vector-1.png);"></div>
            <div class="bg-2" style="background-image: url(assets/images/icons/vector-2.png);"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="24">0</span>
                            </div>
                            <h5>Projects Completed</h5>
                            <div class="icon-box"><i class="flaticon-mill"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="15">0</span>
                            </div>
                            <h5>Professional Staff</h5>
                            <div class="icon-box"><i class="flaticon-geology"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span>0</span><span class="count-text" data-speed="1500" data-stop="3">0</span>
                            </div>
                            <h5>Countries Covered</h5>
                            <div class="icon-box"><i class="flaticon-earth-globe"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="23">0</span>
                            </div>
                            <h5>Satisfied Clients</h5>
                            <div class="icon-box"><i class="flaticon-happiness"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->
@endsection
