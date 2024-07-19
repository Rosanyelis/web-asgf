<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advanced Systems Group | Audio Video Systems in Miami</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('icons/ms-icon-144x144.png') }}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">


</head>

    @yield('content')

        <!-- SCRIPTS -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- SLIDER REVOLUTION -->
    <script src="{{ asset('js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
    <script src="{{ asset('js/rev-slider/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/interface.js') }}"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#contact-form').submit(function(event) {
                // Evitar el envío normal del formulario
                event.preventDefault();
                $('.col-message, .success-message, .error-message').hide();
                $('#send').attr('disabled', 'disabled');
                $('#send').text('Please wait...');
                // Obtener los datos del formulario
                var formData = $(this).serialize();

                // Enviar los datos mediante Ajax
                $.ajax({
                    type: 'POST',
                    url: '{{ route("contact.send") }}',
                    data: formData,
                    success: function(response) {
                        // Manejar la respuesta del servidor
                        if (response.success === true) {
                            $(".col-message, .success-message").show();
                            $('#contact-form').trigger('reset');
                            $('#send').removeAttr('disabled');
                            $('#send').text('Send');
                            setTimeout(function() {
                                $('.col-message, .success-message').hide();
                            }, 3000);
                        } else {
                            $('#send').removeAttr('disabled');
                            $('#send').text('Send');
                            $('.col-message, .error-message').show();
                        }
                    }
                });
            });
        })
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FFJYD95S2Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-FFJYD95S2Q');
        gtag('config', 'AW-11222124145');
    </script>




</body>

</html>
