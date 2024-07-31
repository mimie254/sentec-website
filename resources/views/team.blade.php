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
                                <p>
                                    Eng. Paul Simiyu Mabonga is a dedicated energy engineer, effective projects coordinator
                                    and manager with a passion for propagating the use of clean energy through audit,
                                    engineering, procurement, construction, operations, and maintenance of solar energy
                                    systems.<br><br>
                                    He holds a Bachelor of Science Degree in Mechanical and Production Engineering (Moi
                                    University) and currently pursuing a Masters in Business Administration (strategic
                                    management –JKUAT).<br><br>
                                    As a Team Lead at Sentec Ltd, he has successfully designed and consulted for various local
                                    and regional clients including the design and development of solar street lighting works for
                                    21 municipalities in Uganda through the Uganda Support to Municipality Infrastructure
                                    Programme (USMID). The designs have led to successful publication for the adoption of the
                                    standards of solar lighting engineering.<br><br>
                                    His expertise in the industry has led to the successful design, development, and
                                    standardization of new off-grid street lighting solutions across Eastern Africa with over
                                    35,000 lighting solutions deployed in Kenya, Uganda, and Rwanda. He has also been
                                    involved in the sizing, supply, installation, commissioning, and servicing of over 22MW of
                                    solar power projects and over 60000m3 by volume of solar water heating projects in Kenya
                                    and Southern Sudan.<br>
                                </p>
                                <h5>Contact Details</h5>
                                <p>
                                    Eng. Paul Simiyu Mabonga,<br>
                                    Managing Director,<br>
                                    Sentimental Energy Company Ltd.<br>
                                    0709750074 / 0738261640<br>
                                    Nairobi, Diani Close, Off Ole Dume Road, Gate 7<br>
                                </p>
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
                                <figure class="image"><img src="{{asset('assets/images/team/fred.jpg')}}" alt=""></figure>
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
                            <figure class="image-box"><img style="max-height: 400px" src="{{asset('assets/images/team/ziporah.jpeg')}}" alt=""></figure>
                            {{--<ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>--}}
                            <div class="text">
                                <h5><a href="#">Zipporah Wairimu</a></h5>
                                <span class="designation">HR Business Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/cynthia.jpeg')}}" alt=""></figure>
                            {{--<ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>--}}
                            <div class="text">
                                <h5><a href="#">Cynthia Muhati </a></h5>
                                <span class="designation">Business Process/Sales Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/bonnke.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Bonnke Museeve</a></h5>
                                <span class="designation">Solar Sales Engineer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/june.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">June Cherono</a></h5>
                                <span class="designation">Technical Solar sales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/grace.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Grace Wambugu</a></h5>
                                <span class="designation">Technical Solar Sales Engineer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/joseph.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Joseph Kimita </a></h5>
                                <span class="designation">Technical Department Lead</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/kedrine.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Kedrine Wangui </a></h5>
                                <span class="designation">Accountant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/shirlyn.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Shirlyne Mboya </a></h5>
                                <span class="designation">HR Assistant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/hillary.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Hillary Kimutai</a></h5>
                                <span class="designation">Kimilili Sales Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/cliff.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Clifford Mulama</a></h5>
                                <span class="designation">Marketing Executive</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block mt-2">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img  style="max-height: 400px" src="{{asset('assets/images/team/sharon.jpeg')}}" alt=""></figure>
                            <div class="text">
                                <h5><a href="#">Sharon Nyanchama</a></h5>
                                <span class="designation">Technical Solar sales</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
