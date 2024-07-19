@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-video" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>NEXT-LEVEL SECURITY WITH HIGH-DEFINITION SURVEILLANCE</h2>
                </header>
            </div>

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </main>

        <div class="content">
            <section id="" class="about section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Advanced video surveillance systems to <span
                                class="text-primary">enhance security and peace of mind</span>.</h2>
                        <strong class="fade-title-left">Advanced</strong>
                    </header>
                </div>
            </section>

            <!-- Residential Detail -->
            <section class="project-details" id="">
                <div class="container">
                    <div class="project-details-item heightItem2">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    VIDEO SURVEILLANCE
                                </h3>
                                <p class="project-details-descr">Our advanced video surveillance systems offer
                                    comprehensive monitoring capabilities for maritime applications. Whether you need to
                                    safeguard commercial ships, offshore platforms, port facilities, or coastal areas,
                                    our solutions provide real-time, high-definition video feeds to enable effective
                                    surveillance and threat detection.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/video1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    SECURITY SYSTEMS
                                </h3>
                                <p class="project-details-descr">The maritime environment is known for its challenging
                                    conditions, including adverse weather, corrosive saltwater, and dynamic movements.
                                    Our surveillance systems are built to withstand these challenges, ensuring reliable
                                    performance and longevity.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/video2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Trust Advance Systems Group to deliver exceptional Marine
                            Audio-Visual Systems and redefine your onboard experience. Explore our offerings and <span
                                class="text-primary">embark on a new level of marine entertainment with us</span>”</h2>
                        <strong class="fade-title-left">Exceptional</strong>
                    </header>
                    <p class="mb-2">Schedule a consultation with our expert installers</p>
                    <div class="section-content m-0">
                        <a href="#" class="btn btn-shadow-2">Contact one of our specialists <i
                                class="icon-next" role="presentation"></i></a>
                    </div>
                </div>
            </section>

            <!-- Footer -->

            @include('web.layout.footer')

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
