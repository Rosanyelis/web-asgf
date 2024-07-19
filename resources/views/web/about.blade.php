@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-about" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>About Us</h2>
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

            <!-- About  -->

            <section id="about" class="about">
                <div class="container">
                    <div class="section-header ">
                        <h2 class="section-title text-primary">Elevating Excellence in Custom Audio, Video,
                            and Automation Solutions</h2>
                    </div>
                    <div class="entry" style="margin-top:1.5em;">
                        <p class="entry-text ">At our core, we are pioneers in the field of cutting-edge audio and video
                            systems.
                            Our commitment to unwavering excellence drives us to set and exceed
                            industry standards, shaping the future of technology in both residential and commercial
                            spaces.</p>
                    </div>
                    <div class="section-header ">
                        <h2 class="section-title text-primary">Why Choose Us?</h2>
                    </div>
                    <div class="entry" style="margin-top:1.5em;">
                        <p class="entry-text">We specialize in delivering unparalleled, tailored audio and video
                            solutions. Our advanced automation technologies cater to the diverse needs of our discerning
                            clientele. With a relentless focus on innovation and masterful craftsmanship, we consistently
                             surpass expectations.
                        </p>
                        <p class="entry-text">Client satisfaction is our ultimate goal.</p>
                        <p class="entry-text">Transforming Spaces, Redefining Experiences</p>
                        <p class="entry-text">Our mission is to create immersive, transformative experiences that
                            elevate how people interact with their living spaces, work environments, and leisure
                            pursuits. When you choose us, you choose the future of technology.
                            Elevate your audio, video, and automation experience with us.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Services -->

            <section id="services" class="services section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Commitment <span class="text-primary">and Future</span></h2>
                    </header>
                    <div class="section-content">
                        <div class="row-services row-base row">
                            <div class="col-base col-service col-sm-6 wow fadeInUp">
                                <div class="service-item">
                                    <img alt="We transform your spaces"
                                        src="{{ asset('img/img-icon/icon-architecture.png') }}">
                                    <h4>We transform your spaces</h4>
                                    <p>We create a better audiovisual and leisure experience through cutting-edge
                                        technology, using audio video solutions, and home automation.</p>
                                </div>
                            </div>

                            <div class="clearfix visible-sm"></div>
                            <div class="col-base col-service col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="service-item">
                                    <img alt="We are leaders in advanced audio-video systems"
                                        src="{{ asset('img/img-icon/icon-planing.png') }}">
                                    <h4>We are leaders in advanced audio-video systems</h4>
                                    <p>We operate in accordance with the highest-rated standards of excellence in the
                                        market, shaping the future of technology in both residential and commercial
                                        spaces..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Objects -->

            <section id="objects" class="objects section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">We are <span class="text-primary">Florida</span></h2>
                    </header>
                    <div class="section-content">
                        <div class="objects">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13609904.558832994!2d-101.36166551020966!3d33.612293643941996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses!2sve!4v1700441918427!5m2!1ses!2sve" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contacts -->

            @include('web.layout.contact')

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
