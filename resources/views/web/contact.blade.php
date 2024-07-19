@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

    <!-- Home -->

    <main class="main main-inner main-contacts bg-contacts" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>Contacts</h1>
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


      <!-- Objects -->



      <section class="clients section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title mb-2"><span class="text-primary">TRANSFORMING</span> SPACES, ELEVATING EXPERIENCES</h2>
            <strong class="fade-title-left">Experiencies</strong>
          </header>
        </div>
      </section>

      <!-- Contacts -->

      <section class="contacts section">
        <div class="container">
          <div class="section-content" style="margin: 0;">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                You can also call us at: +1 (305) 725-4927 <br>
                Email: info@advancesystemsgroup.com
              </div>
              <div class="col-base  col-md-8">
                <form class="js-ajax-form">
                  <div class="row-field row">
                    <div class="col-field col-sm-6 col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="Email *" aria-label="Email">
                      </div>
                    </div>
                    <div class="col-field col-sm-6 col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message" aria-label="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-message col-field col-sm-12">
                      <div class="form-group">
                        <div class="success-message"><i class="fa fa-check text-primary" aria-label="check"></i> Thank you!. Your message is successfully sent...</div>
                        <div class="error-message">We're sorry, but something went wrong</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-submit text-right"><button class="btn btn-shadow-2 wow swing">Send <i class="icon-next" aria-label="next" role="presentation"></i></button></div>
                </form>
              </div>
            </div>
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
