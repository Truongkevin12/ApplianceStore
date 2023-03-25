<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets\css\icons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets\css\app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets\libs\owl.carousel\assets\owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets\libs\owl.carousel\assets\owl.theme.default.min.css')}}">
        <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- content -->
          @include('header')
          {{-- @include('client.home.banner') --}}
          @yield('content')
          <!-- end content -->
          @include('footer')
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets\libs\jquery\jquery.min.js')}}"></script>
        <script src="{{ asset('assets\libs\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets\libs\metismenu\metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets\libs\simplebar\simplebar.min.js')}}"></script>
        <script src="{{ asset('assets\libs\node-waves\waves.min.js')}}"></script>
        <!-- App js -->
        <script src="{{ asset('assets\js\app.js')}}"></script>
        <script src="{{ asset('assets\libs\jquery.easing\jquery.easing.min.js')}}"></script>
        <!-- Plugins js-->
        <script src="{{ asset('assets\libs\jquery-countdown\jquery.countdown.min.js')}}"></script>

        <!-- owl.carousel js -->
        <script src="{{ asset('assets\libs\owl.carousel\owl.carousel.min.js')}}"></script>

        <!-- ICO landing init -->
        <script src="{{ asset('assets\js\pages\ico-landing.init.js')}}"></script>

        <script src="{{ asset('assets\js\app.js')}}"></script>
    </body>

</html>

