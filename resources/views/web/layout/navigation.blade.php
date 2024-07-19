<header id="top" class="header-home">
        <div class="brand-panel">
            <a href="#top" class="brand js-target-scroll">
                <img class="brand-logo" src="{{ asset('img/Logo-asg.png') }}" class="img-responsive" alt="logo">
            </a>
        </div>

        <!-- Navigation Desctop -->

        <nav class="navbar-desctop visible-md visible-lg">
            <div class="container">
                <a href="#top" class="brand js-target-scroll">
                    <img src="{{ asset('img/Logo-asg.png') }}" class="img-responsive" alt="logo">
                </a>
                <ul class="navbar-desctop-menu">

                    <li @if (Route::is('home')) class="active" @endif>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li
                    @if (Route::is('residential.one') || Route::is('residential.two') || Route::is('residential.three') || Route::is('residential.four')) class="active" @endif
                    >
                        <a href="#" data-toggle="dropdown" aria-label="Residential" role="button">Residential <i class="fa fa-angle-down" aria-label="angle down"></i></a>
                        <ul>
                            <li><a href="{{ route('residential.one') }}" aria-label="Home Entertainment">Home Entertainment</a></li>
                            <li><a href="{{ route('residential.two') }}" aria-label="Smart Home Automation">Smart Home Automation</a></li>
                            <li><a href="{{ route('residential.three') }}" aria-label="Lighting Energy Control">Lighting Energy Control</a></li>
                            <li><a href="{{ route('residential.four') }}" aria-label="Security and Installation">Security and Installation</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('comercial.one') || Route::is('comercial.two') || Route::is('comercial.three') ) class="active" @endif>
                        <a href="#" data-toggle="dropdown" aria-label="Comercial" role="button" >Comercial<i class="fa fa-angle-down" aria-label="angle down"></i></a>
                        <ul>
                            <li><a href="{{ route('comercial.one') }}" aria-label="Integrated Security">Integrated Security</a></li>
                            <li><a href="{{ route('comercial.two') }}" aria-label="Professional AV System">Professional AV System</a></li>
                            <li><a href="{{ route('comercial.three') }}" aria-label="IT Structured Wiring">IT & Structured Wiring</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('marine.one') || Route::is('marine.two') || Route::is('marine.three') || Route::is('marine.four')) class="active" @endif>
                        <a href="#" data-toggle="dropdown" aria-label="Marine" role="button" >Marine <i class="fa fa-angle-down" aria-label="angle down"></i></a>
                        <ul>
                            <li><a href="{{ route('marine.one') }}" aria-label="Starlink Installations">Starlink Installations</a></li>
                            <li><a href="{{ route('marine.two') }}" aria-label="KVH Partners">KVH Partners</a></li>
                            <li><a href="{{ route('marine.three') }}" aria-label="Audio Video Systems">Audio Video Systems</a></li>
                            <li><a href="{{ route('marine.four') }}" aria-label="Video Security">Video Surveillance</a></li>
                        </ul>
                    </li>
                    <li @if (Route::is('about')) class="active" @endif>
                        <a href="{{ route('about') }}" aria-label="About us">About us</a>
                    </li>
                    <li @if (Route::is('blog')) class="active" @endif>
                        <a href="{{ route('blog') }}" aria-label="Blog">Blog</a>
                    </li >

                    <li @if (Route::is('contact')) class="active" @endif>
                        <a href="{{ route('contact') }}" aria-label="Contacts">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Navigation Mobile -->

        <nav class="navbar-mobile">
            <!-- Navbar Collapse -->
            <a class="brand js-target-scroll" href="#top">
            <img src= "{{ asset('img/Logo-asg.png') }}" width="20%" alt="Brand">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile" aria-expanded="false" aria-controls="navbar-mobile" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" role="presentation"></span>
                <span class="icon-bar" role="presentation"></span>
                <span class="icon-bar" role="presentation"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="navbar-nav-mobile">
                <li @if (Route::is('home')) class="active" @endif>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li
                    @if (Route::is('residential.one') || Route::is('residential.two') || Route::is('residential.three') || Route::is('residential.four')) class="active" @endif
                    >
                        <a href="#" data-toggle="dropdown" aria-label="Residential" role="button" >Residential <i class="fa fa-angle-down" aria-label="angle down"></i></a>
                        <ul>
                            <li><a href="{{ route('residential.one') }}" aria-label="Home Entertainment">Home Entertainment</a></li>
                            <li><a href="{{ route('residential.two') }}" aria-label="Smart Home Automation">Smart Home Automation</a></li>
                            <li><a href="{{ route('residential.three') }}" aria-label="Lighting Energy Control">Lighting Energy Control</a></li>
                            <li><a href="{{ route('residential.four') }}" aria-label="Security and Installation">Security and Installation</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('comercial.one') || Route::is('comercial.two') || Route::is('comercial.three') ) class="active" @endif>
                        <a href="#" data-toggle="dropdown" aria-label="Comercial" role="button">Comercial<i class="fa fa-angle-down" aria-label="angle down"></i></a>
                        <ul>
                            <li><a href="{{ route('comercial.one') }}" aria-label="Integrated Security" >Integrated Security</a></li>
                            <li><a href="{{ route('comercial.two') }}" aria-label="Professional AV System">Professional AV System</a></li>
                            <li><a href="{{ route('comercial.three') }}" aria-label="IT Structured Wiring">IT & Structured Wiring</a></li>
                        </ul>
                    </li>
                    <li
                    @if (Route::is('marine.one') || Route::is('marine.two') || Route::is('marine.three') || Route::is('marine.four')) class="active" @endif>
                        <a href="#" data-toggle="dropdown" aria-label="Marine" role="button">Marine <i class="fa fa-angle-down" aria-label="angle down"></i></a>
                        <ul>
                            <li><a href="{{ route('marine.one') }}" aria-label="Starlink Installations">Starlink Installations</a></li>
                            <li><a href="{{ route('marine.two') }}" aria-label="KVH Partners">KVH Partners</a></li>
                            <li><a href="{{ route('marine.three') }}" aria-label="Audio Video Systems">Audio Video Systems</a></li>
                            <li><a href="{{ route('marine.four') }}" aria-label="Video Security">Video Surveillance</a></li>
                        </ul>
                    </li>
                    <li @if (Route::is('about')) class="active" @endif>
                        <a href="{{ route('about') }}" aria-label="About us">About us</a>
                    </li>
                    <li @if (Route::is('blog')) class="active" @endif>
                        <a href="{{ route('blog') }}" aria-label="Blog">Blog</a>
                    </li >

                    <li @if (Route::is('contact')) class="active" @endif>
                        <a href="{{ route('contact') }}" aria-label="Contacts">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
