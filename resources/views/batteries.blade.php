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
                                <div class="icon-box"><img src="{{asset('assets/images/icons/icon-57.png')}}" alt="">
                                </div>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#"><i class="fas fa-long-arrow-right"></i>Solar panels<span>[10]</span></a>
                                    </li>
                                    <li><a href="#"><i
                                                class="fas fa-long-arrow-right"></i>Inverters<span>[10]</span></a></li>
                                    <li><a href="#"><i class="fas fa-long-arrow-right"></i>Batteries<span>[4]</span></a>
                                    </li>
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
                                                src="{{asset('assets/images/batteries/ritar.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Ritar</a></h5>
                                    <p>
                                    <ul>
                                        <li>Category: Stand Alone</li>
                                        <li>Nominal voltage: 12v</li>
                                        <li>Technology: SLA,Lead Acid</li>
                                        <li>Nominal capacity: 25-260Ah</li>
                                        <li>Maximum Length: 710mm</li>
                                        <li>Maximum Width: 350mm</li>
                                        <li>Maximum Height: 366mm</li>
                                        <li>Weight: 8-53Kgs</li>
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
                                                src="{{asset('assets/images/batteries/hoppecke.jpg')}}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Hoppecke</a></h5>
                                    <p>
                                    <ul>
                                        <li>Category: Stand Alone,On-grid ,Off-grid</li>
                                        <li>Nominal voltage: 2-512v</li>
                                        <li>Technology: AGM,VRLA</li>
                                        <li>Nominal capacity:4340Ah</li>
                                        <li>Maximum Length: 308mm</li>
                                        <li>Maximum Width: 508mm</li>
                                        <li>Maximum Height: 815mm</li>
                                        <li>Weight:19-246Kgs</li>
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
                                                src="{{asset('assets/images/batteries/trojan.jpg')}}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Trojan</a></h5>
                                    <p>
                                    <ul>
                                        <li>Catergory: Stand Alone</li>
                                        <li>Nominal voltage: 2-12v</li>
                                        <li>Technology: AGM</li>
                                        <li>Nominal capacity: 99-2450Ah</li>
                                        <li>Maximum Length: 28mm</li>
                                        <li>Maximum Width: 11mm</li>
                                        <li>Maximum Height: 24mm</li>
                                        <li>Weight:27-332Kgs</li>
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
                                                src="{{asset('assets/images/batteries/champion.jpg')}}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="content-box">
                                    <h5><a href="#">Champion</a></h5>
                                    <p>
                                    <ul>
                                        <li>Catergory: Stand Alone</li>
                                        <li>Nominal voltage: 2-12v</li>
                                        <li>Technology: VRLA</li>
                                        <li> Nominal capacity: 100-1500Ah</li>
                                        <li>Maximum Length: 400mm</li>
                                        <li>Maximum Width: 350mm</li>
                                        <li>Maximum Height: 345mm</li>
                                        <li>Weight:31-98.5Kgs</li>
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
