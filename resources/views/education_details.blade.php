@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>Education Sector</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>About</li>
                        <li>Projects</li>
                        <li>Education-Sector</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- project-details -->
        <section class="project-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="text">
                                <h3>EDUCATION SECTOR</h3>
                                <hr>

                                <p>
                                    Education offers the opportunity to break the poverty cycle, however, most schools in Kenya don’t have
                                    access to reliable energy. <br>Power supply has a both an indirect and direct impact on the education sector
                                    therefore a reliable source of power is key to ensure good quality of education. <br>The use of solar power has
                                    been proven to help bridge this gap.<br> Through the use of solar schools can meet 75 percent of their
                                    electricity need and reduce their carbon footprint.<br>
                                    The use of solar also helps schools free up much-needed money within their budgets which can in turn be
                                    channeled to cover other important costs.<br>
                                    SENTEC solar has undertaken both heating and lighting projects that have had a major impact.<br>
                                    At Kabarak University, 9600 liters SWH Heating project was installed to supply hot water to their
                                    student hostels.<br> Previously the institution used firewood heated boilers to heat their water which was both
                                    expensive, unsafe and environmentally unfriendly.<br>
                                    Since the installation of the systems the institution has been able to save on costs, given students reliable
                                    access to hot water through installed showers and saved the environment through reduced use of
                                    firewood.<br>
                                <p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-2"><img src="{{asset('assets/images/waterHeating.png')}}" alt=""></figure>
                            <div class="overlay-content">
                                <h5>Kabarak University</h5>
                            </div>
                        </div>
                        <br><br>
                        <div class="image-box">
                            <figure class="image image-2"><img src="{{asset('assets/images/bukura.png')}}" alt=""></figure>
                            <div class="overlay-content">
                                <h5>Bukura Agricultural college</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-details end -->

        @endsection
