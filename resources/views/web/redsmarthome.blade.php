@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-automation" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>TRANSFORMING HOMES WITH <br>INTELLIGENT AUTOMATION</h2>
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
            <section id="" class="about   section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Integrated control systems for<span class="text-primary"> convenience
                                and security</span> in your home</h2>
                        <strong class="fade-title-left">Control</strong>
                    </header>
                </div>
            </section>

            <!-- Residential Detail -->
            <section class="project-details" id="residential">
                <div class="container">
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    SMART HOME AUTOMATION
                                </h3>
                                <p class="project-details-descr">Experience the ultimate convenience and energy
                                    efficiency with our cutting-edge lights automation system for homes, allowing you to
                                    effortlessly control and customize your lighting preferences at the touch of a
                                    button.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/automation1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    CONTROL INTEGRATION
                                </h3>
                                <p class="project-details-descr">Effortlessly control lighting levels and color
                                    temperatures to suit your activities and preferences, achieve a sleek and modern
                                    aesthetic with control interfaces, save time and effort with automated lighting
                                    routines, and integrate with other smart home devices for a truly connected living
                                    experience.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/automation2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Transform your home with
                            <span class="text-primary">Smart Home Automation</span>. Take control of your living space.
                            <span class="text-primary">Get started today</span>”</h2>
                        <strong class="fade-title-left">Transform</strong>
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
