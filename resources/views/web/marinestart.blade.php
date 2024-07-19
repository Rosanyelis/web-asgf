@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-marine" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>EXPERT INSTALLATION FOR SEAMLESS TECH INTEGRATION</h2>
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
                        <h2 class="section-title">Comprehensive services for the installation of <span
                                class="text-primary">state-of-the-art</span> technology systems</h2>
                        <strong class="fade-title-left">Comprehensive</strong>
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
                                    STARLINK PROFESSIONAL INSTALLATION
                                </h3>
                                <p class="project-details-descr">Experience lightning-fast internet connectivity with
                                    our professional Starlink installation services. Our service deliver hassle-free
                                    setup, precise alignment, and support, empowering you with reliable and high-speed
                                    internet access wherever you are.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/marine1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    GLOBAL MARITIME COVERAGE
                                </h3>
                                <p class="project-details-descr">Starlink service is now global, providing connectivity
                                    to the vast majority of the Earth’s oceans and seas. Deliveries are available in
                                    most countries where Starlink provides service.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/marine2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Our experts provide expert installation solutions for a <span
                                class="text-primary">smooth and hassle-free integration</span> of Starlink technology”
                        </h2>
                        <strong class="fade-title-left">Hassle-free</strong>
                    </header>
                    <p class="mb-2">Discover the difference of expert installation and unlock the full potential of
                        Starlink.</p>
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
