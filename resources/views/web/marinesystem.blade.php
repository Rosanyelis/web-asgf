@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">
        <!-- Home -->
        <main class="main main-inner bg-audio" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>CREATING IMMERSIVE EXPERIENCES WITH SUPERIOR AUDIO-VISUAL SYSTEMS</h2>
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
                        <h2 class="section-title">High-quality, immersive audio and video systems for an <span
                                class="text-primary">enhanced entertainment experience</span></h2>
                        <strong class="fade-title-left">Enhanced</strong>
                    </header>
                </div>
            </section>

            <!-- Residential Detail -->
            <section class="project-details" id="">
                <div class="container">
                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    AUDIO-VISUAL SYSTEMS
                                </h3>
                                <p class="project-details-descr">Elevate your maritime experience with our cutting-edge
                                    audiovisual and entertainment solutions, designed to transform your vessel into a
                                    captivating entertainment hub on the water.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/audio1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    ENTERTAINMENT SYSTEMS
                                </h3>
                                <p class="project-details-descr">Immerse yourself in a world of superior audiovisual
                                    experiences with our bespoke solutions tailored for the maritime environment,
                                    bringing theater-like entertainment right to your yacht.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/audio2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Our comprehensive offerings include high-definition Video
                            Surveillance specifically designed for <span class="text-primary">marine
                                environments</span>”</h2>
                        <strong class="fade-title-left">High-definition</strong>
                    </header>
                    <p class="mb-2">Experience next-level security as we provide advanced surveillance solutions
                        tailored for marine applications</p>
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
