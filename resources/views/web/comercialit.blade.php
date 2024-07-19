@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-it" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h2>SOLVING CONNECTIVITY CHALLENGES WITH INNOVATIVE SOLUTIONS</h2>
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
                        <h2 class="section-title">Expert IT services and structured wiring solutions to ensure <span
                                class="text-primary">efficient and reliable</span> connectivity</h2>
                        <strong class="fade-title-left">Efficient</strong>
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
                                    IT SERVICES
                                </h3>
                                <p class="project-details-descr">Streamline your business operations with our
                                    comprehensive IT services. We offer a wide range of solutions tailored to meet your
                                    specific technology needs. From network setup and cybersecurity to cloud computing
                                    and IT support, our expert team provides reliable, efficient, and scalable IT
                                    solutions that empower your business to thrive in the digital landscape.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/it1.avif">
                            </div>
                        </div>
                    </div>
                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    STRUCTURED WIRING SOLUTIONS
                                </h3>
                                <p class="project-details-descr">Experience seamless connectivity and optimized
                                    performance with our structured wiring solutions. We specialize in designing and
                                    installing robust wiring infrastructures that enable efficient data transmission and
                                    networking. </p>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="" class="img-responsive" src="img/it2.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title mb-2">“From optimizing network infrastructure to providing
                            comprehensive IT support, we have the expertise to ensure seamless communication and <span
                                class="text-primary">reliable connectivity</span>”</h2>
                        <strong class="fade-title-left">Optimizing</strong>
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
