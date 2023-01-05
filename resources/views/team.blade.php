@extends('_includes._main')
@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>SENTEC Team</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="{{url('/')}}">Home</a></li>
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
                    <h6>LeaderShip Team</h6>
                </div>

            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/paul.jpg')}}" alt=""></figure>
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

                                    I have over ten years' experience in energy sector with a focus on development,
                                    construction and service .My desire is to work, develop and perfect into a
                                    multidisciplinary team leader in energy and resources management for accessibility
                                    and environmental conservation.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                <div class="col-md-6">
                    <div class="row clearfix mt-5">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_7">
                                <div class="content-box">
                                    <div class="text">
                                        <h5>Chesire Kipkemboi Edwin - Director Strategy</h5>
                                        <p>Chesire Kipkemboi Edwin is a holder of B. Tech. in Mechanical and Production
                                            Engineering
                                            form Moi University and masters in Energy Technology from Jomo Kenyatta University
                                            of
                                            Agriculture and Technology. </p>
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
                <div class="col-md-6">
                    <div class="row clearfix mt-5">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_7">
                                <div class="content-box">
                                    <div class="text">
                                        <h5>Fred Ngatia - Finance director</h5>
                                        <p>
                                             Fred Holds a Degree in Accounts from Oxford University, CPAK, ACCA CFIP and Diploma in Business Administration Finance Director
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('assets/images/team/fred.jpeg')}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row clearfix mt-5">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img style="max-height: 400px" src="{{asset('assets/images/team/faith.jpeg')}}" alt=""></figure>
                            {{--<ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>--}}
                            <div class="text">
                                <h5><a href="#">Faith Nafula</a></h5>
                                <span class="designation">Technical sales manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/bancy.jpeg')}}" alt=""></figure>

                            <div class="text">
                                <h5><a href="#">Bancy Musembi</a></h5>
                                <span class="designation">Digital Marketing & Customer relations manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/leslie.jpeg')}}" alt=""></figure>
                            {{--<ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>--}}
                            <div class="text">
                                <h5><a href="#">Leslie Igiraneza</a></h5>
                                <span class="designation">Technical sales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/gibson.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Gibson Mwiti</a></h5>
                                <span class="designation">Technical sales engineer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/jjoseph.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Joseph Njeri</a></h5>
                                <span class="designation">Technician</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/dennis.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#"> Dennis Kamau</a></h5>
                                <span class="designation">Technician</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
