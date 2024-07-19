@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-residential" data-stellar-background-ratio="0.1">
            <div class="container">
                <header class="main-header">
                    <h2>EXPERIENCE CINEMA-QUALITY <br> ENTERTAINMENT AT HOME</h2>
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

            <!-- Residential Detail -->
            <section class="project-details" id="residential">
                <div class="container">
                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    HOME THEATER SYSTEMS
                                </h3>
                                <p class="project-details-descr">Experience the ultimate cinematic thrill in the comfort
                                    of your own home with our premium home theater systems. From high-definition
                                    projectors and immersive surround sound systems to cozy seating and acoustical
                                    treatments, we create a personalized theater experience that rivals the big screen.
                                </p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/residential1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    SURROUND AUDIO SYSTEMS
                                </h3>
                                <p class="project-details-descr">Whether you’re a music enthusiast or a movie lover, we
                                    carefully select and position speakers to create a lifelike audio environment that
                                    transports you into the heart of the action. From crystal-clear dialogue to
                                    thundering bass, our surround sound systems deliver an unparalleled audio journey
                                    that captivates your senses.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/residential2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Transform your living space into a <span
                                class="text-primary">cinema-like</span> experience"</h2>
                        <strong class="fade-title-left">Transform</strong>
                    </header>
                    <p class="mb-2">Schedule a consultation with our expert home theater installers</p>
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
