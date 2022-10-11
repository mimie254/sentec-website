@extends('_includes._main')
@section('content')


        <!-- banner-section -->
        <section class="banner-section centred">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>Bright <br />Alternative</h1>
                            <h6>Empowering our future with solar energy.</h6>
                            <span class="big-text">sentec</span>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>Turn to <br />solar power</h1>
                            <h6>Today’s resource for a brighter tomorrow.</h6>
                            <span class="big-text">gogreen</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column d-none d-md-block">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                                <figure class="image image-2"><img style="width: 50%" src="{{asset('assets/images/solarPower.png')}}" alt=""></figure>
                                <figure class="image image-3"><img src="assets/images/icons/bulb-1.png" alt=""></figure>
                                <div class="text">
                                    <h2>06<span>+</span></h2>
                                    <h6>Years Experienced</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <div class="title-top">
                                        <div class="shape-box">
                                            <span class="shape shape-1">//</span>
                                        </div>
                                        <h6>Who we are</h6>
                                    </div>
                                    <h2>Sentimental Energy Company LTD(SENTEC LTD)</h2>
                                </div>
                                <div class="text">
                                    <p>
                                        Sentimental Energy Company Limited is a duly registered company in Kenya since 2012 and was incorporated in the year 2016. It was formed out of a desire to provide low cost energy solutions to the region’s domestic, commercial and industrialization sector with emphasis on solar energy and low load consuming Lighting solutions. We design, develop, install and maintain solar power, solar water heating and power backup systems and LED lighting solutions.<br>
                                        We are also involved massively in sales and distribution of solar panels, charge controllers, inverters, batteries and LED lights. The company has over 6 years of experience in the renewable energy industry centered on actual hands-on experiences in design, sizing, installation and commissioning, energy audit and management.<br>
                                        SENTEC is owned by a team of professionals with competent skills and experience in their respective fields of, energy systems design, installation and management, financial project management and sales. Our mission is to become the leader in the alternative energy movement that takes place in the region with emphasis on the affordable sustainable and reliable solar power, water heating and LED lighting solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <{{--!-- service-section -->
        <section class="service-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <div class="title-top">
                        <div class="shape-box">
                            <span class="shape shape-1">//</span>
                            <span class="shape shape-2">\\</span>
                        </div>
                        <h6>Service areas</h6>
                    </div>
                    <h2>Free energy in the long run</h2>
                    <div class="title-text">
                        <p>Desire that they cannot foresee the pain and trouble that are  bound <br />equal blame belongs to their duty.</p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <span class="category">Sentec</span>
                                    <h5><a href="service-details.html">For Agriculture</a></h5>
                                    </div>
                                <figure class="image-box"><img src="assets/images/service/service-1.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                    <span class="category">Sentec</span>
                                    <h5><a href="service-details.html">For Industries</a></h5>
                                </div>
                                <figure class="image-box"><img src="assets/images/service/service-2.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-5.png" alt=""></div>
                                    <span class="category">Sentec</span>
                                    <h5><a href="service-details.html">For Residence</a></h5>
                                </div>
                                <figure class="image-box"><img src="assets/images/service/service-3.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="icon-box"><img src="assets/images/icons/icon-6.png" alt=""></div>
                                    <span class="category">Sentec</span>
                                    <h5><a href="service-details.html">For Large areas</a></h5>
                                </div>
                                <figure class="image-box"><img src="assets/images/service/service-4.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->--}}


        <!-- service-style-two -->
        <section class="service-style-two sec-pad bg-color-1">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <div class="title-top">
                                    <div class="shape-box">
                                        <span class="shape shape-1">//</span>
                                    </div>
                                    <h6>Services</h6>
                                </div>
                                <h2>Our efficient solutions</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/images/solarPower.png')}}" alt=""></figure>
                                <div class="content-box">
                                    <div class="link"><a href="{{url('solar')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="inner">
                                        <div class="icon-box"><img src="assets/images/icons/icon-7.png" alt=""></div>
                                        <div class="text">
                                            <span class="category"><Solar></Solar></span>
                                            <h3><a href="{{url('solar')}}">Solar Power</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="link"><a href="{{url('solar')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="text">
                                        <span class="category">Solar</span>
                                        <h3><a href="{{url('solar')}}">Solar Power</a></h3>
                                        <p>
                                            We use nature’s free light energy from the sun to provide electricity to all forms of requirements. Our solar power systems are sourced from highly accredited European supply markets of Germany and Denmark.                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/images/waterHeating.png')}}" alt=""></figure>
                                <div class="content-box">
                                    <div class="link"><a href="{{url('heater')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="inner">
                                        <div class="icon-box"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                        <div class="text">
                                            <span class="category">Heating</span>
                                            <h3><a href="{{url('heater')}}">Water heating</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="link"><a href="{{url('heater')}}"><i class="flaticon-right-arrow"></i>
                                            <span>More</span></a></div>
                                    <div class="text">
                                        <span class="category">Heating</span>
                                        <h3><a href="{{url('heater')}}">Water Heating</a></h3>
                                        <p>
                                            We provide both flat plate and evacuated tube solar water heating systems to meet both individual and commercial hot water requirements. We guarantee support by local highly trained technical workforce for installation and maintenance services.                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/images/inverter.png')}}" alt=""></figure>
                                <div class="content-box">
                                    <div class="link"><a href="{{url('inverter')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="inner">
                                        <div class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></div>
                                        <div class="text">
                                            <span class="category">Inverter</span>
                                            <h3><a href="{{url('inverter')}}">Power Backup Systems</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="link"><a href="{{url('inverter')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="text">
                                        <span class="category">Inverter</span>
                                        <h3><a href="{{url('inverter')}}">Power Backup Systems</a></h3>
                                        <p>
                                            This system allows you to enjoy uninterrupted power supply all the times and hence allow one to carry out daily functions without fearing for power cuts & drips. They are noiseless and gives out back up power automatically.                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/images/led.png')}}" alt=""></figure>
                                <div class="content-box">
                                    <div class="link"><a href="{{url('led')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="inner">
                                        <div class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></div>
                                        <div class="text">
                                            <span class="category">LED</span>
                                            <h3><a href="{{url('led')}}">Lighting Solutions</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="link"><a href="{{url('led')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <div class="text">
                                        <span class="category">LED</span>
                                        <h3><a href="{{url('led')}}">Lighting Solutions</a></h3>
                                        <p>
                                            These are independent compact lights that consists of solar panel, lithium ion battery, charge controller, and an LED light. some of the systems have motion sensors and run for 50,000 light hours in a single lifetime.                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-two end -->


        {{--<!-- funfact-section -->
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
        <!-- funfact-section end -->--}}


        <!-- working-section -->
        <section class="working-section sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <div class="title-top">
                                    <div class="shape-box">
                                        <span class="shape shape-1">//</span>
                                    </div>
                                    <h6>Working Process</h6>
                                </div>
                                <h2>SENTEC LTD Process</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                <h6>Step</h6>
                                <h2>01...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt=""></div>
                                <h5>Consult With US</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/icons/arrow-2.png);"></div>
                                <h6>Step</h6>
                                <h2>02...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></div>
                                <h5>Generate Power</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                <h6>Step</h6>
                                <h2>03...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-12.png" alt=""></div>
                                <h5>Store the Power</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Step</h6>
                                <h2>04...</h2>
                                <div class="icon-box"><img src="assets/images/icons/icon-13.png" alt=""></div>
                                <h5>Use it Flexibly</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-section end -->


        <!-- clients-section -->
        <section class="clients-section border-top">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.15.56.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.07.15.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.07.26.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.07.38.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.07.50.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.08.01.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.08.09.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.08.22.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.08.33.png')}}" style="max-height: 100px" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.08.44.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="javascript:;"><img src="{{asset('assets/images/partners/Screenshot 2022-10-11 at 20.08.51.png')}}" style="max-height: 100px"  alt=""></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- clients-section end -->

        @endsection
