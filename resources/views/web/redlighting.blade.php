@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->
        <main class="main main-inner bg-energy" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>LIGHTING SOLUTIONS THAT SAVE <br>ENERGY AND IMPRESS</h2>
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
                        <h2 class="section-title">Easy control and energy efficiency solutions for your <span
                                class="text-primary">home’s lighting</span></h2>
                        <strong class="fade-title-left">Easy</strong>
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
                                    Control4
                                </h3>
                                <p class="project-details-descr">Control4 is a leading home automation provider,
                                    offering smart control systems for seamless integration of devices and systems. With
                                    Control4, homeowners enjoy increased comfort, convenience, and energy efficiency
                                    through automated tasks and intuitive interfaces.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/energy1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    Lutron
                                </h3>
                                <p class="project-details-descr">Discover the pinnacle of lighting control technology
                                    with Lutron, a global leader in smart lighting solutions. We proudly offer the
                                    industry-leading products from Lutron. Experience unparalleled convenience, energy
                                    efficiency, and style with their state-of-the-art lighting control systems.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/energy2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Clients  -->
            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Upgrade your home with <span class="text-primary">ASG's Lighting
                                & Energy Control</span>. Experience the convenience and savings today”</h2>
                        <strong class="fade-title-left">Upgrade</strong>
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
