@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>Public Works</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Projects</li>
                        <li>PUBLIC WORKS/ GOVERNMENT SECTOR</li>
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
                            <figure class="image image-2"><img src="{{asset('assets/images/shaurii.png')}}" alt=""></figure>
                            <div class="overlay-content">
                                <h5>Ministry of Housing- Shauri Moyo; Kisumu</h5>
                                </div>
                            </div>
                        <br><br>
                            <div class="image-box">
                            <figure class="image image-2"><img src="{{asset('assets/images/maanzoni.png')}}" alt=""></figure>
                            <div class="overlay-content">
                                <h5>Maanzoni Lodges- Machakos</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="text">
                                <h3>PUBLIC WORKS/ GOVERNMENT SECTOR</h3>
                                <hr>
                                <div class="col-md-12 ml-1">
                                    <p>SENTEC’s work is not limited to the private sector but has also been of great benefit to the public sector as a whole. Bearing in mind the varying needs of the various institutions within this sector our company has tailored projects aimed at addressing their specific pain points with the aim of providing a reliable energy source.</p>
                                    Some of the projects that have been undertaken include;
                                    <p><h5>Ministry of Housing- Shauri Moyo; Kisumu</h5><hr>
                                    Description: Civil servants housing scheme- 250pcs of 250 liters SWH Project</p>
                                    <p><h5>Maanzoni Lodges- Machakos</h5><hr>
                                    Description: 278 SWH systems
                                    <p><h5>Mombasa Port Area Road Development- Street lighting (Mwache Junction, Tsunza- Mteza section)
                                    </h5><hr>
                                    Description: The street lighting is still underway. SENTEC has been charged with the responsibility of engineering, procurement, installation. Commissioning, testing, operation & management.</p>
                                    </p>
                                    <p><h5>CID Headquarters – Kiambu Road, Nairobi</h5><hr>
                                    Description:2,000 Liters of centralized solar water heating systems</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-details end -->


        @endsection
