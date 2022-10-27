@extends('_includes._main')
@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>Home Systems</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Projects</li>
                    <li>Home-Systems</li>
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
                        <figure class="image image-1"><img src="{{asset('assets/images/karem.png')}}"
                                                           alt=""></figure>
                        <div class="overlay-content">
                            <h5>Karen Residential Home</h5>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="text">
                            <h3>HOME SYSTEMS</h3><hr>
                            <div class="col-md-12 ml-1">
                                <p>SENTEC solutions cut across all market segments. Home owners are part of our client base
                                    and have
                                    benefitted from our water heating solutions, lighting as well back up solutions. <br>
                                    Some of the projects include;</p>
                                <p>
                                <h5>Karen Residential Home</h5><hr>
                                Description: Combined SWH System & P.V Hybrid System<br><br>
                                Impact: Reduced up to 60% on high electricity costs previously incurred by the residential
                                home
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-details end -->
@endsection
