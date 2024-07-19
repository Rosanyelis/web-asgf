@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-professional" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>CREATING IMMERSIVE AUDIO-VISUAL EXPERIENCES</h2>
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
                        <h2 class="section-title"><span class="text-primary">Comprehensive audio-visual solutions</span>
                            for commercial and personal use</h2>
                        <strong class="fade-title-left">solutions</strong>
                    </header>
                </div>
            </section>

            <!-- Residential Detail -->
            <section class="project-details" id="residential">
                <div class="container">
                    <div class="project-details-item heightItem3">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    AUDIO VISUAL SYSTEMS
                                </h3>
                                <p class="project-details-descr">Transform your company’s audio-visual experience with
                                    our comprehensive solutions designed to enhance communication and collaboration. We
                                    specialize in delivering high-quality audio-visual systems that create immersive
                                    environments for boardrooms, conference halls, and more. Experience seamless
                                    integration, intuitive controls, and impressive audio-visual setups that make a
                                    lasting impact on your business.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/professional1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item heightItem2">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    COMMERCIAL MUSIC SYSTEMS
                                </h3>
                                <p class="project-details-descr">Immerse your business in superior sound quality with
                                    our commercial sound systems service. We specialize in designing and installing
                                    customized audio solutions that enhance the ambiance and elevate the customer
                                    experience. From retail spaces to restaurants and offices, our expert team delivers
                                    seamless integration, crystal-clear audio, and optimal coverage.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/professional2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“Whether it's designing captivating soundscapes or delivering
                            visually stunning displays, <span class="text-primary">we bring your vision to life</span>”
                        </h2>
                        <strong class="fade-title-left">Stunning</strong>
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
