@extends('_includes._main')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>Products</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-list">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar default-sidebar">
                        <div class="search-widget">
                            <div class="search-inner">
                                <form action="" method="get">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search..." required="">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h5>Categories</h5>
                                <div class="icon-box"><img src="{{asset('assets/images/icons/icon-57.png')}}" alt=""></div>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#"><i class="fas fa-long-arrow-right"></i>Solar panels<span>[10]</span></a></li>
                                    <li><a href="#"><i class="fas fa-long-arrow-right"></i>Inverters<span>[10]</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-list-content">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image" style="width: 310px"><a href="#"><img
                                                src="{{asset('assets/images/inverters/must.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Must</a></h5>
                                    <p>
                                    <ul>
                                        <li>Type: Off Grid,On Grid</li>
                                        <li>Power Range: 0.3-5Kw</li>
                                        <li>Frequency: 50Hz,60Hz</li>
                                        <li>Product warranty: 1 Year and Above</li>
                                        <li>Efficiency: >80%</li>
                                    </ul>
                                    </p>
                                    <div class="btn-box">
                                        <a href="#"><i class="flaticon-right-arrow"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image" style="width: 310px"><a href="#"><img
                                                src="{{asset('assets/images/inverters/sma.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">SMA</a></h5>
                                    <p>
                                    <ul>
                                        <li>Type: Off Grid,On Grid</li>
                                        <li>Power Range: 0.3-5Kw</li>
                                        <li>Frequency: 50Hz,60Hz</li>
                                        <li>Product warranty: 1 Year and Above</li>
                                        <li>Efficiency: >80%</li>
                                    </ul>
                                    </p>
                                    <div class="btn-box">
                                        <a href="#"><i class="flaticon-right-arrow"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image" style="width: 310px"><a href="#"><img
                                                src="{{asset('assets/images/inverters/victron.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Victron</a></h5>
                                    <p>
                                    <ul>
                                        <li>Type: Off Grid,On Grid</li>
                                        <li>Power Range: 0.3-5Kw</li>
                                        <li>Frequency: 50Hz,60Hz</li>
                                        <li>Product warranty: 1 Year and Above</li>
                                        <li>Efficiency: >80%</li>
                                    </ul>
                                    </p>
                                    <div class="btn-box">
                                        <a href="#"><i class="flaticon-right-arrow"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->

@endsection
