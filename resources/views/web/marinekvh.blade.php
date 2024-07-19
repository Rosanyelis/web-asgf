@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-partners" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>DELIVERING TOP-TIER SATELLITE SOLUTIONS WITH KVH</h2>
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
                        <h2 class="section-title">Collaborative solutions in conjunction with our premier <span
                                class="text-primary">satellite partner</span>, KVH</h2>
                        <strong class="fade-title-left">Partner</strong>
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
                                    SATELLITE SOLUTIONS
                                </h3>
                                <p class="project-details-descr">Stay connected and entertained while cruising the
                                    waters with our premium satellite installation services, ensuring reliable audio and
                                    video connectivity for your ship’s onboard systems.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/partners1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    KVH PARTNERS
                                </h3>
                                <p class="project-details-descr">KVH is a global leader in mobile connectivity, content,
                                    and value-added services with innovative technology designed to enable a mobile
                                    world and keep mariners always connected.</p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/partners2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">KVH is a <span class="text-primary">global leader in mobile
                                connectivity</span>, content, and value-added services with innovative technology
                            designed to enable a mobile world and keep mariners always connected.</h2>
                        <strong class="fade-title-left">Hassle-free</strong>
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
