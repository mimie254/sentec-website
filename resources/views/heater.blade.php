@extends('_includes._main')
@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title">
                    <h1>WATER HEATING SYSTEMS</h1>
                </div>
                <ul class="bread-crumb clearfix pull-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Services</li>
                    <li>WATER HEATING SYSTEMS</li>
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
                                <div class="icon-box"><img src="{{asset('assets/images/icons/icon-54.png')}}" alt=""></div>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="{{url('services/lighting-solutions')}}" ><i
                                                class="fas fa-angle-right"></i><span>Lighting Solutions</span></a>
                                    </li>
                                    <li><a href="{{url('/services/solar-photovoltaic-systems')}}"><i
                                                class="fas fa-angle-right"></i><span>Solar Power Solutions</span></a>
                                    </li>
                                    <li><a href="{{url('/services/water-heating-systems')}}" class="current"><i
                                                class="fas fa-angle-right"></i><span>Water Heating Systems</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="content-two">
                            <div class="text">
                                <h5>Flat plate solar water heating system</h5>
                                <hr>
                                <figure class="main-image"><img src="{{asset('assets/images/Flat-plate-solar-water-heating-system.png')}}"
                                                                style="max-height: 300px" alt=""></figure>
                                <p>
                                    Flat-plate collectors capture the energy from the sun. There are different designs,
                                    but for the most part they use heat transfer fluid. Once cold water has been
                                    collected in the storage tank, the flat-plate collector starts looping the fluid
                                    through the cold water and heats it up.<br>
                                    <br>
                                    But this only happens after the radiation energy has been transformed into thermal
                                    energy through the collector. After the fluid has been heated it will start to
                                    circulate. The collector plate consists of a copper sheet and tubing. The surface is
                                    coated with a dark material, specifically to increase absorbency efficiency.

                                    The collector is also very well insulated in order to prevent heat from escaping.
                                </p>
                            </div>

                        </div>
                        <div class="content-two">
                            <div class="text">
                                <h5>Evacuated tube solar water heating system (pressurized and non-pressurized)</h5>
                                <hr>
                                <figure class="main-image"><img src="{{asset('assets/images/Evacuated-tube-solar-water-heating-system.png')}}"
                                                                style="max-height: 300px" alt=""></figure>
                                <p>Evacuated tube comprises of a smaller glass tube suspended within a larger glass
                                    tube. The air is then pumped out of the space between the small inner tube and the
                                    larger outer tube creating a vacuum thermal insulation layer. This vacuum layer is
                                    absolutely key since it reduces heat loss from the solar collector.
                                    <br>
                                    An absorber plate absorbs the heat and transfers it to a heat transfer fluid. In
                                    passive systems, convection drives the movement of the heating fluid around the
                                    solar collector, when the transfer liquid gets heated it evaporates and turns to
                                    steam.
                                    <br>
                                    This rises to the top of the evacuated tube solar collector the heat is transferred
                                    via a heat exchanger, the transfer liquid, having given up its heat to the heat
                                    exchanger then condenses and falls back down the evacuated tube where the process
                                    can start again</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->


@endsection
