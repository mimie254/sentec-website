@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>Health Sector</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>About</li>
                        <li>Projects</li>
                        <li>Health Sector</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- project-details -->
        <section class="project-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-1"><img src="{{asset('assets/images/gallery/protfolio-27.jpg')}}" alt=""></figure>
                            <div class="overlay-content">
                                <h5>Dreamland Hospital</h5>
                                </div>
                            </div>
                        <br><br>
                            <div class="image-box">
                            <figure class="image image-2"><img src="{{asset('assets/images/gallery/protfolio-28.jpg')}}" alt=""></figure>
                            <div class="overlay-content">
                                <h5><a >St. Leonard’s Hospital- Kericho (Ongoing Project)</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="text">
                                <h3>HEALTH SECTOR</h3>
                                <p>The health sector is one of the core sectors in any society. Kenya is working towards worldwide healthcoverage by 2030 which is one of the UN pillars. Services in our health care institutions are power reliant including surgery, vaccine preservation, imaging, maternity etc. Lack of/ unreliable power supply acts as a major barrier to accessing the necessary healthcare especially to those living in the rural communities.</p>
                                <p>The use of solar power has helped improve the quality of health care services provided by ensuring;<ul><li>Healthcare services are uninterrupted.<li>
                                    <li>Health institutions save on financial resources that are reinvested in other priority health programs.</li>
                                    <li>Institutional resilience through proper data capturing and storage and lowering of carbon emission.</li>
                                 </ul>
                                 <br>
                                    In line with our mission SENTEC has carried out solar projects in the health sector.These are as outlined below;</p>
                                    <p><h4>Dreamland Hospital</h4>
                                Description: 29Kwp P.V System<br>
                                Impact: Uninterrupted power supply to the hospital allowing 24hour service provision. </p>


                                <p><h4>St. Leonard’s Hospital- Kericho (Ongoing Project)</h4>
                                Description: 1200 liters (SWH); 20Kwp (P.V System) <br>
                                Impact: 600 liters SWH installed on site. Reduced power costs since installation of systems and ceased
                                usage of electric water heating</p>

                                    <p><h4>Gatundu Hospital</h4>
                                Description: 15,000 liters SWH project commissioned in September 2020<br>
                                Impact: The hospital has managed to save over 400,000/= per month on their electric bills while supplying hot water to 400 patients and hospital staff daily.</h4>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-details end -->


        @endsection
