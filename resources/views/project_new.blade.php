@extends('_includes._main')
@section('css')

    @endsection
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>Projects</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- service-style-four -->
    <section class="service-style-four sec-pad alternat-2 bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred">
                <div class="title-top">
                    <div class="shape-box">
                        <span class="shape shape-1">//</span>
                        <span class="shape shape-2">\\</span>
                    </div>
                    <h6>Projects</h6>
                </div>
                <h2>Our Proud Achievements</h2>
                <div class="title-text">
                    <p>Our all time track record</p>
                </div>
            </div>
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h3>Health Sector</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/deramland.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Dreamland Hospital</span>
                                        <h3><a href="{{url('/projects/health-sector')}}">29kWp PV System</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('/projects/health-sector')}}">
                                            <i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('/projects/health-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Dreamland Hospital</span>
                                    <h3><a href="{{url('/projects/health-sector')}}">29kWp PV System</a></h3>
                                    <p>Uninterrupted power supply to the hospital allowing 24h service provision.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/leonard.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">St' Leonard's Hospital</span>
                                        <h3><a href="{{url('/projects/health-sector')}}">20Kwp (P.V System)</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('/projects/health-sector')}}">
                                            <i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('/projects/health-sector')}}">
                                            <i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">St' Leonard's Hospital- Kericho</span>
                                    <h3><a href="{{url('/projects/health-sector')}}">20Kwp (P.V System)</a></h3>
                                    <p>Reduced power costs and ceased usage of electric water heating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/gatundu.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Gatundu Hospital</span>
                                        <h3><a href="{{url('/projects/health-sector')}}">15,000 Litres SWH</a></h3>
                                    </div>
                                    <div class="link">
                                        <a href="{{url('/projects/health-sector')}}">
                                            <i class="flaticon-right-arrow"></i><span>More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('/projects/health-sector')}}">
                                            <i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Gatundu Hospital</span>
                                    <h3><a href="{{url('/projects/health-sector')}}">15,000 Litres SWH</a></h3>
                                    <p>Over 400,000/= savings per month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upper-box mt-5">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h3>Educational Sector</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/waterHeating.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Daystar University </span>
                                        <h3><a href="{{url('/projects/education-sector')}}">106kWp PV System</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Daystar University </span>
                                    <h3><a href="{{url('/projects/education-sector')}}">106kWp PV System</a></h3>
                                    <p>10,800 litres SWH</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/waterHeating.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Kabarak University</span>
                                        <h3><a href="{{url('/projects/education-sector')}}">9600 liters SWH </a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Kabarak University</span>
                                    <h3><a href="{{url('/projects/education-sector')}}">106kWp PV System</a></h3>
                                    <p>9600 liters SWH </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/bukura.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Bukura  College</span>
                                        <h3><a href="{{url('/projects/education-sector')}}">5kWp Solar Project</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Bukura Agricultural College</span>
                                    <h3><a href="{{url('/projects/education-sector')}}">5kWp Solar Water Pumping Project</a></h3>
                                    <p>5kWp Solar Water Pumping Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block mt-2">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/leonard.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Rift.V Technical Institute</span>
                                        <h3><a href="{{url('/projects/education-sector')}}">3000 Ltrs SWH Project</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('/projects/education-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Rift Valley Technical Institute</span>
                                    <h3><a href="{{url('/projects/education-sector')}}">3000 litres SWH Project</a></h3>
                                    <p>3000 litres SWH Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upper-box mt-5">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h3>Commercial Sector</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/roy.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Roy Hauliers LTD</span>
                                        <h3><a href="{{asset('/projects/commercial-sector')}}">50kWp Grid tie system</a></h3>
                                    </div>
                                    <div class="link"><a href="{{asset('/projects/commercial-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{asset('/projects/commercial-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Roy Hauliers LTD</span>
                                    <h3><a href="{{asset('/projects/commercial-sector')}}">50kWp Grid tie system</a></h3>
                                    <p>60% reduction on precious electricity costs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/kim.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Kim Fay Factory</span>
                                        <h3><a href="{{asset('/projects/commercial-sector')}}">122.5kWp Grid tie PV system</a></h3>
                                    </div>
                                    <div class="link"><a href="{{asset('/projects/commercial-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{asset('/projects/commercial-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Kim Fay Factory</span>
                                    <h3><a href="{{asset('/projects/commercial-sector')}}">122.5kWp Grid tie PV system</a></h3>
                                    <p>30% reduction on electricity costs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/tworivers.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Two Rivers Mall</span>
                                        <h3><a href="{{asset('/projects/commercial-sector')}}">1.2MWp plant to 1.45MWp</a></h3>
                                    </div>
                                    <div class="link"><a href="{{asset('/projects/commercial-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{asset('/projects/commercial-sector')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Two Rivers Mall</span>
                                    <h3><a href="{{asset('/projects/commercial-sector')}}">Expansion of existing 1.2MWp plant to 1.45MWp</a></h3>
                                    <p>Expansion of existing 1.2MWp plant to 1.45MWp <br>Injection of over 271,000kWhrs into the system.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upper-box mt-5">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h3>Public Sector</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/street-lighting.jpeg')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Mombasa Port Area Road</span>
                                        <h3><a href="{{asset('/projects/public-works')}}">Solar Street lighting</a></h3>
                                    </div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Mombasa Port Area Road Development</span>
                                    <h3><a href="{{asset('/projects/public-works')}}">Solar Street lighting</a></h3>
                                    <p>Mwache Junction, Tsunza- Mteza section (Ongoing Project)
                                        38kM Road solar lighting
                                        Over 1000 Lights Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/cid.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">CID Headquarters</span>
                                        <h3><a href="{{asset('/projects/public-works')}}">Solar Water Heating System</a></h3>
                                    </div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">CID Headquarters – Kiambu Road, Nairobi</span>
                                    <h3><a href="{{asset('/projects/public-works')}}">Solar Water Heating System</a></h3>
                                    <p>2,000 Liters of centralized solar water heating systems</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/shaurimoyo.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Ministry of Housing</span>
                                        <h3><a href="{{asset('/projects/public-works')}}">Civil servants housing scheme</a></h3>
                                    </div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Ministry of Housing- Shauri Moyo; Kisumu</span>
                                    <h3><a href="{{asset('/projects/public-works')}}">Civil servants housing scheme</a></h3>
                                    <p>62500 liters SWH Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block mt-2">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/maanzoni.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Maanzoni Lodges- Machakos</span>
                                        <h3><a href="{{asset('/projects/public-works')}}">278 SWH systems</a></h3>
                                    </div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{asset('/projects/public-works')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Maanzoni Lodges- Machakos</span>
                                    <h3><a href="{{asset('/projects/public-works')}}">278 SWH systems</a></h3>
                                    <p>278 SWH systems</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upper-box mt-5">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h3>Residential Sector</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="{{asset('assets/images/karem.png')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Karen</span>
                                        <h3><a href="{{url('projects/home-systems')}}">Combined 20KW off-grid PV system</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('projects/home-systems')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('projects/home-systems')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Karen</span>
                                    <h3><a href="{{url('projects/home-systems')}}">Combined 20KW off-grid PV system</a></h3>
                                    <p>Combined 20KW off-grid PV system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="assets/images/service/service-12.jpg" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Kitui</span>
                                        <h3><a href="{{url('projects/home-systems')}}">15 kWp Solar Water Pumping</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('projects/home-systems')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('projects/home-systems')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Kitui</span>
                                    <h3><a href="{{url('projects/home-systems')}}">15 kWp Solar Water Pumping</a></h3>
                                    <p>15 kWp Solar Water Pumping</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box image-box-elm"><img src="assets/images/service/service-13.jpg" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="text">
                                        <span class="category">Rongai</span>
                                        <h3><a href="{{url('projects/home-systems')}}">10.6 kW PV system and Water pumping</a></h3>
                                    </div>
                                    <div class="link"><a href="{{url('projects/home-systems')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                </div>
                                <div class="overlay-content">
                                    <div class="shape-box" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <div class="link"><a href="{{url('projects/home-systems')}}"><i class="flaticon-right-arrow"></i><span>More</span></a></div>
                                    <span class="category">Rongai</span>
                                    <h3><a href="{{url('projects/home-systems')}}">Combined 10.6 kW PV system and Water pumping</a></h3>
                                    <p>Combined 10.6 kW PV system and Water pumping</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-four end -->

@endsection
