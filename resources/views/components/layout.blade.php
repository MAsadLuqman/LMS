<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LMS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href=" {{ asset('assets/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Modernize js -->
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
</head>

<body>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

<div id="wrapper" class="wrapper bg-ash">
    <!-- Page Area Start Here -->
    <x-header></x-header>
    <div class="dashboard-page-one">
        <x-navbar></x-navbar>
        {{$slot}}
    </div>
</div>




<!-- jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('assets/js/popper.min.js') }}js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Counterup Js -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Moment Js -->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<!-- Waypoints Js -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<!-- Scroll Up Js -->
<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
<!-- Full Calender Js -->
<script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
<!-- Chart Js -->
<script src="{{ asset('assets/js/Chart.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
