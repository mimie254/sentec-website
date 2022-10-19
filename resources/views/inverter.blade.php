@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>INVERTER POWER BACKUP SYSTEMS</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Services</li>
                        <li>INVERTER POWER BACKUP SYSTEMS</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-details -->
        <section class="service-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-4  col-sm-12 sidebar-side">
                        <div class="service-sidebar default-sidebar">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h5>Main Services</h5>
                                    <div class="icon-box"><img src="assets/images/icons/icon-54.png" alt=""></div>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="{{url('/services/solar-photovoltaic-systems')}}"><i
                                                    class="fas fa-angle-right"></i><span>Solar Photovoltaic Systems</span></a></li>
                                        <li><a href="{{url('/services/water-heating-systems')}}"><i class="fas fa-angle-right"></i><span>Water Heating Systems</span></a></li>
                                        <li><a href="#"><i class="fas fa-angle-right"></i><span>Water Pumping Systems</span></a></li>
                                        <li><a href="#"><i class="fas fa-angle-right"></i><span>Street Lighting Solutions</span></a></li>
                                        <li><a href="{{url('services/LED-lighting-solutions')}}"><i class="fas fa-angle-right"></i><span>LED Lighting Solutions</span></a></li>
                                        <li><a  class="current" href="{{url('services/power-backup-systems')}}"><i class="fas fa-angle-right"></i><span>Power Backup Systems</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 content-side">
                        <div class="service-details-content">
                            <figure class="main-image"><img src="{{asset('assets/images/inverter.png')}}" style="max-height: 450px" alt=""></figure>
                            <div class="content-one">
                                <div class="text">
                                    <h2>Inverters & Charge Controllers</h2>
                                    <p>
                                    Quite often in an off grid solar power system, the batteries are charged with solar panels. Sometimes solar power alone may not be enough to charge the battery, in these cases, an AC generator can be used to help keep the battery charged.<br>
                                    <br>

                                    An inverter/charger would convert the AC power from the generator to charge the DC battery bank. An off grid inverter/charger would be converting the power in both directions, from AC to DC to charge the battery from the AC generator, and converting the DC power from the battery to AC for your appliances.</p>

                                </div>

                            </div>
                            <figure class="main-image"><img src="{{asset('assets/images/backup-batteries.png')}}" style="max-height: 450px" alt=""></figure>
                            <div class="content-two">
                                <div class="text">
                                    <h3>Solar & Backup Batteries</h3>
                                    <p>This system allows you to enjoy uninterrupted power supply all the times and hence allow one to carry out daily functions without fearing for power cuts & trips.<br>
                                    <br>
                                    They are noiseless and gives out back up power automatically without the input of a technician once installed. They’re suitable for domestic and medium to high commercial applications.</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


       @endsection
