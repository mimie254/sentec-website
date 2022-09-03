@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>Detail Page</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                        <li>Projects</li>
                        <li>Industrial&commercial-Sector</li>
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
                            <figure class="image image-1"><img src="assets/images/gallery/protfolio-27.jpg" alt=""></figure>
                            <div class="overlay-content">
                                <h5><a href="portfolio-details.html">Roy Haulier</a></h5>
                                </div>
                            </div>
                            <div class="image-box">
                            <figure class="image image-2"><img src="assets/images/gallery/protfolio-28.jpg" alt=""></figure>
                            <div class="overlay-content">
                                <h5><a href="portfolio-details.html">Kim Fay Factory</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="text">
                                <h3>INDUSTRIAL & COMMERCIAL SECTOR</h3>
                                <p>With significant increase in energy prices annually as well as their carbon footprint. Generating solar power introduces massive benefits to companies by reducing energy costs, whilst getting a good return on investment. Savings made in turn reduce high operational costs and are channeled to other priority areas within these companies.</p>
                                <p>
                                SENTEC has undertaken a number of projects within the industrial/ commercial sector which has had an
                                impact on their savings and efficiency.
                                Some of the projects include;
                                <p><h4>Roy Haulier</h4>
                                Description: 50 Kwp (Grid tie P.V System)<br>
                                Impact: Reduced up to 60% on high electricity costs previously incurred by the institution.</p>
                                <h4>Kim Fay Factory</h4>
                                Description: Expansion of 1.2 Mwp plant to 1.45vMwp<br>
                                Impact: Saving up to 30% of the factory’s electricity costs.</p>
                                <h4>Two Rivers Mall</h4>
                                Description: 22.5 Kwp (Grid tie P.V System)<br>
                                Impact: Injecting over 271000 KwHrs in the system and generating over 6M income to the Two Rivers
                                project<br> </p>
                                <h4>Fairdeal Mombasa</h4>
                                Description: 40.2 Kwp (Grid tie P.V System)<br> </p>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-details end -->


        @endsection