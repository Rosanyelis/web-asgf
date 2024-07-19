@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->

    @include('web.layout.loading')

    <!-- Header -->

    @include('web.layout.navigation')

    <!-- Layout -->

    <div class="layout">

        <!-- Home -->

        <main class="main">

            <div class="arrow-left" aria-label="arrow left" role="button" tabindex="0"></div>
            <div class="arrow-right" aria-label="arrow right" role="button" tabindex="0"></div>
            <!-- Start revolution slider -->

            <div class="rev_slider_wrapper">
                <div id="rev_slider" class="rev_slider fullscreenbanner">
                    <ul>

                        <!-- Slide 1 -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->
                            <img src="{{ asset('img/slider/slider1.png') }}" alt="carousel1"
                                data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div  class="slide-title tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                                data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" role="heading">TRANSFORMING SPACES ELEVATING EXPERIENCES
                            </div>

                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['95','130']"
                                data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">We specialize in delivering <br>cutting-edge custom
                                audio and <br>video solutions
                            </div>

                            <!-- Layer 3 -->


                        </li>

                        <!-- Slide 2 -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->
                            <img src="{{ asset('img/slider/slider2.png') }}" alt="carousel1"
                                data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                                data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" role="heading" >
                                <span>SMART HOME SYSTEMS, LIGHT & CLIMATE CONTROL</span>
                            </div>

                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['95','130']"
                                data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">Transform your home into a smart <br>and comfortable
                                space with ASG. <br>Get started today!
                            </div>

                            <!-- Layer 3 -->


                        </li>

                        <!-- Slide 3 -->
                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->
                            <img src="{{ asset('img/slider/slider3.png') }}" alt="carousel1"
                                data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                                data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" role="heading">CORPORATE AUDIO VIDEO SYSTEMS & AUTOMATION
                            </div>

                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['95','130']"
                                data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">Elevate your company with our<br> audiovisual and corporate <br>automation with us. Quote
                                now!
                            </div>

                            <!-- Layer 3 -->


                        </li>

                        <!-- Slide 4 -->
                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->
                            <img src="{{ asset('img/slider/slider4.png') }}" alt="carousel1"
                                data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                                data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" role="heading">MARINE AUDIO VIDEO AUTOMATION
                            </div>

                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['95','130']"
                                data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">Elevate your company with our<br> audiovisual and corporate <br>automation with us. Quote
                                now!
                            </div>

                            <!-- Layer 3 -->


                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <div class="content">

            <!-- About  -->

            <section id="about" class="about section">
                <div class="container">
                    <header class="section-header">
                        <h1 class="section-title" style="font-size: 2em">TAKE CONTROL WITH<span class="text-primary"> ADVANCE SYSTEMS
                                GROUP</span></h1>
                        <strong class="fade-title-left" role="heading">About</strong>
                    </header>
                    <div class="section-content">
                        <div class="row-base row">
                            <div class="col-base col-sm-6 col-md-4">
                                <h3 class="col-about-title">LEADERS IN CUSTOM AUDIO VIDEO SYSTEMS & AUTOMATION
                                    Serving Miami & South Florida<span class="text-primary">.</span></h3>
                                <div class="col-about-info">
                                    <p>Advance Systems Group is a company specialized in home automation solutions that allow integrating Audio, Video, and Automation systems tailored to your home, office, business, hotel, yacht, and more. We are professionals with over 20 years of experience in Lighting, video, sound, air conditioning, security cameras, electronic access, alarm, and satellite technology with Starlink and KVH.</p>
                                </div>
                            </div>
                            <div class="col-base col-about-spec col-sm-6 col-md-4">
                                <h3 class="col-about-title">Our<br> specialization<span class="text-primary">:</span></h3>
                                <div class="service-item">
                                    <img alt="Residential" width="58" src="{{ asset('img/iconos/home.png') }}">
                                    <h4>Residential</h4>
                                </div>
                                <div class="service-item">
                                    <img alt="Comercial" width="58" src="{{ asset('img/iconos/building.png') }}">
                                    <h4>Comercial</h4>
                                </div>
                                <div class="service-item">
                                    <img alt="Marine" width="58" src="{{ asset('img/iconos/bote.png') }}">
                                    <h4>Marine</h4>
                                </div>
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="col-base col-about-img col-sm-6 col-md-4">
                                <img alt="Smarthome phone" class="img-responsive" src="{{ asset('img/smarthome-phone.jpeg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience -->

            <section class="experience section">
                <div class="container">
                    <div class="text-parallax" data-stellar-background-ratio="0.85"
                        style="background-image: url('img/bg/text-1.jpg');">
                        <div class="text-parallax-content">23</div>
                    </div>

                    <!-- <hr style="border:0;"> -->
                    <h4 class="experience-info wow fadeInRight"><span class="text-primary">We have over 23 years of
                            experience on
                            telecommunications, </span><br>hospitality industry networking, home automation, structured
                        cabling.</h4>
                </div>
            </section>

            <!-- Residential Detail -->
            <section class="project-details" >
                <div class="container">
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft"
                                style="">
                                <h3 class="project-details-title">
                                    Residential <br>AV INSTALLERS & SMART HOME INTEGRATORS
                                </h3>
                                <p class="project-details-descr">Home automation and energy efficiency. With our service, you will be able to monitor your home via the internet through cameras, control lighting, HVAC, and climate control, as well as activate or turn on various devices that are automated. At Advance Systems Group, we are certified installers of Lutron and Control 4, and also, we are Control4 authorized dealers in the Miami and South Florida areas.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="Residential Detail" class="img-responsive" src="{{ asset('img/residential-detail.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projects section">
                <div class="section-content">
                    <div class="projects-carousel js-projects-carousel">
                        <div class="project project-light">
                            <a href="{{ route('residential.one') }}" title="Home Entertainment">
                                <figure>
                                    <img alt="Home Entertainment" src="{{ asset('img/home-entern.jpg') }}">
                                    <figcaption >
                                        <h3 class="project-title">
                                            Home <br>
                                            Entertainment
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project project-light">
                            <a href="{{ route('residential.two') }}" title="project 2"  >
                                <figure>
                                    <img alt="smart home Automation" src="{{ asset('img/smart-home-auto.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Smart Home <br>
                                            Automation
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{ route('residential.three') }}" title="project 3">
                                <figure>
                                    <img alt="Litching Energy Control" src="{{ asset('img/lithing-energy.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Lighting <br>
                                            Energy Control
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{ route('residential.four') }}" title="project 4">
                                <figure>
                                    <img alt="Security and Installation" src="{{ asset('img/security-home.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Security <br>
                                            and Installation
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comercial Detail -->
            <section class="project-details" id="comercial">
                <div class="container">
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    Commercial and Corporate
                                    <br>
                                    Experts in corporate and commercial audio video systems for your business
                                </h3>
                                <p class="project-details-descr">We are ready to equip your conference rooms, hotels, restaurant, club or any other facility that requires a custom AV solution or automation systems. We deliver quality work and to build long term relationships with all of our residential, commercial, and corporate clients.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="Comercial" class="img-responsive" src="{{ asset('img/comercial.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projects section">
                <div class="section-content">
                    <div class="projects-carousel js-projects-carousel">
                        <div class="project project-light">
                            <a href="{{ route('comercial.one') }}" title="Home Entertainment">
                                <figure>
                                    <img alt="Integrated Security" src="{{ asset('img/integrated-security.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Integrated <br>
                                            Security
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project project-light">
                            <a href="{{ route('comercial.two') }}" title="Home Entertainment">
                                <figure>
                                    <img alt="Professional AV System" src="{{ asset('img/av-system.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Professional <br>
                                            AV System
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{ route('comercial.three') }}" title="project 3">
                                <figure>
                                    <img alt="IT Structured Wiring" src="{{ asset('img/IT-Structured-Wiring.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            IT & <br>
                                            Structured Wiring
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{ route('comercial.one') }}" title="Home Entertainment">
                                <figure>
                                    <img alt="Integrated Security" src="{{ asset('img/marine-four.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Integrated <br>
                                            Security
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Marine Detail -->
            <section class="project-details" id="marine">
                <div class="container">
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info text-copy wow fadeInLeft">
                                <h3 class="project-details-title">
                                    Marine
                                    <br>
                                    STAY SAFE AND CONNECTED WITH OUR LEADING PARTNERS
                                </h3>
                                <p class="project-details-descr">We are certified partners of KVH and Starlink. We provide professional solutions with the leaders in satellite technology to keep you connected. Advance Systems Group is the leading provider of KVH and Starlink for professional maritime solutions in audio-video systems and video surveillance in Miami and South Florida.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="Yate" class="img-responsive" src="{{ asset('img/yate.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projects section">
                <div class="section-content">
                    <div class="projects-carousel js-projects-carousel">
                        <div class="project project-light">
                            <a href="{{ route('marine.one') }}" title="Home Entertainment">
                                <figure>
                                    <img alt="Starklink" src="{{ asset('img/starklink.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Starlink <br>
                                            Installations
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project project-light">
                            <a href="{{ route('marine.two') }}" title="project 2">
                                <figure>
                                    <img alt="KVH Partners" src="{{ asset('img/kvh.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            KVH <br>
                                            Partners
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{ route('marine.three') }}" title="project 3">
                                <figure>
                                    <img alt="Audio Video Systems" src="{{ asset('img/audio-system.jpg') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Audio Video <br>
                                            Systems
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{ route('marine.four') }}" title="project 3">
                                <figure>
                                    <img alt="Video Surveillance" src="{{ asset('img/video2.avif') }}">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Video <br>
                                            Surveillance
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Our Clients</h2>
                        <p>They trusted the quality and professionalism provided by Advance Systems Group. <br>You probably saw our work if you visited Ferreti Yacht, MDM, Courtyard by Marriott, and more.</p>
                        <strong class="fade-title-left">Customers</strong>
                    </header>
                    <div class="section-content">
                        <ul class="clients-list">
                            <li class="client">
                                <img alt="Ferreti" src="{{ asset('img/clients/ferretti.png') }}">
                            </li>
                            <li class="client">
                                <img alt="Bike Tech" src="{{ asset('img/clients/bike-tech.png') }}">
                            </li>
                            <li class="client">
                                <img alt="Country Marriot" src="{{ asset('img/clients/country-marriot.png') }}">
                            </li>
                            <li class="client">
                                <img alt="Marquis" src="{{ asset('img/clients/marquis.png') }}">
                            </li>
                            <li class="client">
                                <img alt="Marriot" src="{{ asset('img/clients/marriot.png') }}">
                            </li>
                            <li class="client">
                                <img alt="Imeca" src="{{ asset('img/clients/imeca.png') }}">
                            </li>
                            <li class="client">
                                <img alt="MDM" src="{{ asset('img/clients/mdm.png') }}">
                            </li>
                            <li class="client">
                                <img alt="Captiva" src="{{ asset('img/clients/captiva.png') }}">
                            </li>
                        </ul>
                    </div>
                    <div class="section-content">
                        <a href="#" class="btn btn-shadow-2" title="Work together" role="button" >Work together <i class="icon-next" aria-label="next" role="presentation"></i></a>
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
