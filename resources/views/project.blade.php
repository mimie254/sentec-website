@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>Our Projects</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li>Projects</li>
                        <li>Project-Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar default-sidebar">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h5>Categories</h5>
                                    <div class="icon-box"><img src="assets/images/icons/icon-57.png" alt=""></div>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="{{url('health_details')}}"><i class="fas fa-long-arrow-right"></i>HEALTH SECTOR<span></span></a></li>
                                        <li><a href="{{url('education_details')}}"><i class="fas fa-long-arrow-right"></i>EDUCATION SECTOR<span></span></a></li>
                                        <li><a href="{{url('commercial_details')}}"><i class="fas fa-long-arrow-right"></i>INDUSTRIAL & COMMERCIAL SECTOR<span></span></a></li>
                                        <li><a href="{{url('public_details')}}"><i class="fas fa-long-arrow-right"></i>PUBLIC WORKS/ GOVERNMENT SECTOR<span></span></a></li>
                                        <li><a href="{{url('home_details')}}"><i class="fas fa-long-arrow-right"></i>HOME SYSTEMS
                                        <span></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-list-content">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">

                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-folder"></i>Health Sector<li>
                                        <li><i class="far fa-folder"></i>Gatundu Hospital<li>
                                    </ul>
                                    <h3><a href="blog-details.html">15,000 liters SWH project commissioned in September 2020</h3>
                                    <p>The hospital has managed to save over 400,000/= per month on their electric bills while
                                        supplying hot water to 400 patients and hospital staff daily.</p>
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-6.jpg" alt=""></a></figure>
                                    <div class="btn-box">
                                    <li><a href="{{url('health_details')}}"><i class="fas fa-long-arrow-right"></i>READ MORE<span></span></a></li>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-folder"></i>Education Sector</li>
                                        <li><i class="far fa-user"></i>Rift valley technical Institute</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Rift valley technical Institute- 3000liters SWH Project</a></h3><p>Provides reliable hot water to the students which
                                    is much needed in the cold Eldoret climatic conditions. The institution has lowered electricity
                                    bills by 90,000/= monthly</p>
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-7.jpg" alt=""></a></figure>
                                    <div class="btn-box">
                                    <li><a href="{{url('education_details')}}"><i class="fas fa-long-arrow-right"></i>READ MORE<span></span></a></li>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-folder"></i>INDUSTRIAL & COMMERCIAL SECTOR</li>
                                        <li><i class="far fa-user"></i>Two Rivers Mall</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Expansion of 1.2 Mwp plant to 1.45vMwp</a></h3>
                                    <p>Injecting over 271000 KwHrs in the system and generating over 6M income to the Two Rivers
                                        project.</p>
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-8.jpg" alt=""></a></figure>
                                    <div class="btn-box">
                                    <li><a href="{{url('commercial_details')}}"><i class="fas fa-long-arrow-right"></i>READ MORE<span></span></a></li>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-folder"></i>PUBLIC WORKS/ GOVERNMENT SECTOR</li>
                                        <li><i class="far fa-user"></i>CID Headquarters – Kiambu Road, Nairobi</li>
                                    </ul>
                                    <h3><a href="blog-details.html">2,000 Liters of centralized solar water heating systems</a></h3>

                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-9.jpg" alt=""></a></figure>
                                    <div class="btn-box">
                                    <li><a href="{{url('public_details')}}"><i class="fas fa-long-arrow-right"></i>READ MORE<span></span></a></li>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-folder"></i>HOME SYSTEMS</li>
                                        <li><i class="far fa-user"></i>Karen Residential Home</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Combined SWH System & P.V Hybrid System</a></h3>
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-10.jpg" alt=""></a></figure>
                                    <div class="btn-box">
                                    <li><a href="{{url('home_details')}}"><i class="fas fa-long-arrow-right"></i>READ MORE
                                        <span></span></a></li>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->


        @endsection
