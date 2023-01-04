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
                    <h6>THE TEAM</h6>
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
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_7">
                        <div class="content-box">
                            <div class="text">
                                <h5>Chesire Kipkemboi Edwin - Director Finance and Strategy</h5>
                                <p>Chesire Kipkemboi Edwin is a holder of B. Tech. in Mechanical and Production
                                    Engineering
                                    form Moi University and masters in Energy Technology from Jomo Kenyatta University
                                    of
                                    Agriculture and Technology. He is a registered graduate engineer with the Engineers
                                    Registration Board of Kenya.<br>

                                    He has expansive knowledge of the Kenya’s energy sector having worked with the
                                    Ministry
                                    of Energy and Petroleum for the past 6 years. He is has undertaken key tasks
                                    including
                                    the performing prefeasibility study for Kenya’s Nuclear Power Programme, Development
                                    of
                                    Energy Bill 2015 and Development of the long-term energy plan for the country: The
                                    Least
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
@endsection
