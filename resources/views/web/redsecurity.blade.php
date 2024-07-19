@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-security" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>SECURING YOUR WORLD WITH <br>CUTTING-EDGE TECHNOLOGY</h2>
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
                        <h2 class="section-title">High-definition video surveillance systems and <span
                                class="text-primary">professional</span> installation services</h2>
                        <strong class="fade-title-left">Professional</strong>
                    </header>
                </div>
            </section>

            <!-- Residential Detail -->
            <section class="project-details" id="residential">
                <div class="container">
                    <div class="project-details-item heightItem2">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    VIDEO SURVEILLANCE AND SECURITY SYSTEMS
                                </h3>
                                <p class="project-details-descr">Protect what matters most with our video surveillance
                                    and security systems. Our expert solutions ensure the safety and security that you
                                    need. With advanced technology and seamless integration, we provide reliable and
                                    customized solutions to keep you in control and give you peace of mind.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="{{ asset('img/camara-security.avif') }}">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    STARLINK PROFESSIONAL INSTALLATION
                                </h3>
                                <p class="project-details-descr">Experience lightning-fast internet connectivity with
                                    our professional Starlink installation services. Our service deliver hassle-free
                                    setup, precise alignment, and support, empowering you with reliable and high-speed
                                    internet access wherever you are.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/security2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Protect your home with <span
                                class="text-primary">confidence</span>. Contact us today for top-notch Security and
                            Installation services”</h2>
                        <strong class="fade-title-left">Protect</strong>
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
