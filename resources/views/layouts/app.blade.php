<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <!-- Styles -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css"/>

    <!-- Owl Carousal -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}" type="text/css"/>

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" type="text/css"/>

    <!-- Scroll Bar -->
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" type="text/css"/>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css"/>

    <!-- Color -->
    <link rel="stylesheet" href="{{ asset('css/color.css') }}" type="text/css"/>

    <!-- Custom Css -->
    @yield('css')
</head>

<body itemscope="">

    <div class="theme-layout bg-color-light">

        <!-- Header --->
        @include('layouts.header')

        @yield('content')

        <!-- Footer --->
        @include('layouts.footer')

    </div>

    <!-- Script -->

    <!-- Modernizr -->
    <script type="text/javascript" src="{{ asset('js/modernizr-2.0.6.js') }}"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.2.js') }}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Scroll To Top -->
    <script type="text/javascript" src="{{ asset('js/scrolltopcontrol.js') }}"></script>

    <!-- Scrolly -->
    <script type="text/javascript" src="{{ asset('js/jquery.scrolly.js') }}"></script>

    <!-- Owl Carousal -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- iCheck -->
    <script type="text/javascript" src="{{ asset('js/icheck.js') }}"></script>

    <!-- Select2 -->
    <script type="text/javascript" src="{{ asset('js/select2.full.js') }}"></script>

    <!-- CounterUp -->
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>

    <!-- Waypoints -->
    <script type="text/javascript" src="{{ asset('js/waypoints.js') }}"></script>

    <!-- Scroll Bar -->
    <script type="text/javascript" src="{{ asset('js/perfect-scrollbar.js') }}"></script>

    <!-- Scroll Bar -->
    <script type="text/javascript" src="{{ asset('js/perfect-scrollbar.jquery.js') }}"></script>

    <!-- Calender -->
    <script type="text/javascript" src="{{ asset('js/jquery.plugin.js') }}"></script>

    <!-- Calender -->
    <script type="text/javascript" src="{{ asset('js/jquery.datepick.js') }}"></script>

    <!-- Script -->
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Custom Script -->
    @yield('scripts')
</body>
</html>
