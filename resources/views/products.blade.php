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
                    <li>Solar Panels</li>
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
                                <div class="icon-box"><img src="assets/images/icons/icon-57.png" alt=""></div>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li class="active"><a href="{{url('products/solar')}}"><i class="fas fa-long-arrow-right"></i>Solar panels<span>[4]</span></a></li>
                                    <li><a href="{{url('products/inverters')}}"><i class="fas fa-long-arrow-right"></i>Inverters<span>[3]</span></a></li>
                                    <li><a href="{{url('products/batteries')}}"><i class="fas fa-long-arrow-right"></i>Batteries<span>[4]</span></a></li>
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
                                                src="{{asset('assets/images/panels/jinko.jpeg')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Jinko Solar</a></h5>
                                    <p>
                                    <ul>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Type: Mono-crystalline,Polycrystalline</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Power Range: 200-360Wp</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Panel Efficiency: 15.50-19.00%</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Weight: 19Kg-28Kg</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Height: 1956mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Width: 992mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Depth: 40mm</li>
                                    </ul>
                                    </p>
                                    {{--<div class="btn-box">
                                        <a href="#"><i class="flaticon-right-arrow"></i>Read More</a>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image" style="width: 310px"><a href="#"><img
                                                src="{{asset('assets/images/panels/yingli.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Yingli Solar</a></h5>
                                    <p>
                                    <ul>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Type: Mono-crystalline,Polycrystalline</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Power Range: 200-360Wp</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Panel Efficiency: 15.50-19.00%</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Weight: 19Kg-28Kg</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Height: 1956mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Width: 992mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Depth: 40mm</li>
                                    </ul>
                                    </p>
                                    {{--<div class="btn-box">
                                        <a href="#"><i class="flaticon-right-arrow"></i>Read More</a>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image" style="width: 310px"><a href="#"><img
                                                src="{{asset('assets/images/panels/amerisolar.png')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">AmeriSolar</a></h5>
                                    <p>
                                    <ul>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Type: Mono-crystalline,Polycrystalline</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Power Range: 200-360Wp</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Panel Efficiency: 15.50-19.00%</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Weight: 19Kg-28Kg</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Height: 1956mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Width: 992mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Depth: 40mm</li>
                                    </ul>
                                    </p>
                                    {{--<div class="btn-box">
                                        <a href="#"><i class="flaticon-right-arrow"></i>Read More</a>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image" style="width: 310px"><a href="#"><img
                                                src="{{asset('assets/images/panels/canadian.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Canadian Solar</a></h5>
                                    <p>
                                    <ul>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Type: Mono-crystalline,Polycrystalline</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Power Range: 200-360Wp</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Panel Efficiency: 15.50-19.00%</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Weight: 19Kg-28Kg</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Height: 1956mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Width: 992mm</li>
                                        <li><img src="{{asset('/assets/images/icons/check-1.png')}}"> Maximum Depth: 40mm</li>
                                    </ul>
                                    </p>
                                    {{--<div class="btn-box">
                                        <a href="#"><i class="flaticon-right-arrow"></i>Read More</a>
                                    </div>--}}
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
