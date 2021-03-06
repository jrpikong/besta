<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>besta.id</title>

    <meta name="keywords" content="Alumunium Composite Panel,Alucobond,besta rekanda,PT.besta rekanda,Spesialis Facade, Skylight dan Curtain Wall" />
    <meta name="description" content="Besta Rekanda - Specialist Alumunium Composite Panel">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico" type="image/x-icon')}}"/>
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fork-awesome/1.1.7/css/fork-awesome.min.css">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/nivo-slider/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/nivo-slider/default/default.css')}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('css/demos/demo-construction.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('css/skins/skin-construction.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>

<body data-spy="scroll" data-target="#sidebar" data-offset="120">
<div class="body">
    {{--Include Header--}}
    @include('partials.header')
    {{--End Header--}}
    <div role="main" class="main">
        @yield("content")
    </div>

    {{--Include Footer--}}
    @include("partials.footer")
    {{--End Footer--}}
</div>


{{--Javascript Section--}}
<!-- Vendor -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>
<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/common/common.min.js')}}"></script>
<script src="{{asset('vendor/jquery.validation/jquery.validation.min.js')}}"></script>
<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendor/vide/vide.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('vendor/nivo-slider/jquery.nivo.slider.min.js')}}"></script>
<script src="{{asset('js/views/view.contact.js')}}"></script>

<!-- Demo -->
<script src="{{asset('js/demos/demo-construction.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('js/theme.init.js')}}"></script>
@yield('script')
</body>
</html>