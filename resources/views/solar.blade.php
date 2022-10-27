@extends('_includes._main')
@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>SOLAR Photovoltaic SYSTEMS</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Services</li>
                    <li>SOLAR POWER SYSTEMS</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- service-details -->
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar default-sidebar">
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h5>Main Services</h5>
                                <div class="icon-box"><img src="{{asset('assets/images/icons/icon-54.png')}}" alt="">
                                </div>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="{{url('services/lighting-solutions')}}"><i
                                                class="fas fa-angle-right"></i><span>Lighting Solutions</span></a>
                                    </li>
                                    <li><a href="{{url('/services/solar-photovoltaic-systems')}}" class="current"><i
                                                class="fas fa-angle-right"></i><span>Solar Power Solutions</span></a>
                                    </li>
                                    <li><a href="{{url('/services/water-heating-systems')}}"><i
                                                class="fas fa-angle-right"></i><span>Water Heating Systems</span></a>
                                    </li>


                                    {{--<li><a href="{{url('services/power-backup-systems')}}"><i
                                                class="fas fa-angle-right"></i><span>Power Backup Systems</span></a>
                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <h3>Residential Solutions</h3>
                        <hr>
                        <div style="margin-left: 20px">
                            <div class="content-one">
                                <div class="text">

                                    <h5>Off-Grid/On-Grid Solar System</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                An Off-grid solar system is not connected to the utility grid and is completely
                                                reliant on the sun and energy stored in batteries to power your home or business,
                                                whereas the On-grid solar system, connected to the grid allows one to pull energy
                                                from the utility grid as a supplement when the electricity produced from the solar
                                                system is insufficient.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="main-image"><img src="{{asset('assets/images/off-on-grid.jpeg')}}"
                                                                            style="max-height: 300px" alt=""></figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="content-one">
                                <div class="text">
                                    <h5>Power Backup Systems</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Quite often in an off grid solar power system, the batteries are charged with solar
                                                panels. Sometimes solar power alone may not be enough to charge the battery, in
                                                these cases, an AC generator can be used to help keep the battery charged.<br>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="main-image"><img src="{{asset('assets/images/batterie.jpeg')}}"
                                                                            style="max-height: 300px" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-one">
                                <div class="text">
                                    <h5>Water Pumping Solutions</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Quite often in an off grid solar power system, the batteries are charged with solar
                                                panels. Sometimes solar power alone may not be enough to charge the battery, in
                                                these cases, an AC generator can be used to help keep the battery charged.<br>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="main-image"><img src="{{asset('assets/images/batterie.jpeg')}}"
                                                                            style="max-height: 300px" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-details-content">
                        <h3>Commercial Solutions</h3>
                        <hr>
                        {{--<div style="margin-left: 20px">
                            <div class="content-one">
                                <div class="text">

                                    <h5>Off-Grid/On-Grid Solar System</h5>
                                    <p>
                                        With an off-grid solar system, you’re completely reliant on the sun and energy
                                        stored in batteries to power your home or business. And when the electricity
                                        produced from your solar system is insufficient, the On-grid solar system enables
                                        you to pull energy from the utility grid to supplement it.<br>
                                        An Off-grid solar system is not connected to the utility grid and is completely
                                        reliant on the sun and energy stored in batteries to power your home or business,
                                        whereas the On-grid solar system, connected to the grid allows one to pull energy
                                        from the utility grid as a supplement when the electricity produced from the solar
                                        system is insufficient.
                                    </p>
                                </div>
                                <figure class="main-image"><img src="{{asset('assets/images/off-on-grid.jpeg')}}"
                                                                style="max-height: 300px" alt=""></figure>
                            </div>
                            <div class="content-one">
                                <div class="text">
                                    <h5>Inverters & Charge Controllers</h5>
                                    <p>
                                        Quite often in an off grid solar power system, the batteries are charged with solar
                                        panels. Sometimes solar power alone may not be enough to charge the battery, in
                                        these cases, an AC generator can be used to help keep the battery charged.<br>
                                        <br>
                                        An inverter/charger would convert the AC power from the generator to charge the DC
                                        battery bank. An off grid inverter/charger would be converting the power in both
                                        directions, from AC to DC to charge the battery from the AC generator, and
                                        converting the DC power from the battery to AC for your appliances.</p>
                                </div>
                                <figure class="main-image"><img src="{{asset('assets/images/batterie.jpeg')}}"
                                                                style="max-height: 300px" alt=""></figure>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->


@endsection
