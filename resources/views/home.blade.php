<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Title -->
    <title> Rapo - Premium dashboard ui bootstrap rwd admin html5 template </title>

    <!-- Favicon -->
    <link rel="icon" href="/public/img/brand/favicon.ico" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="/public/css/icons.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="/public/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!--  Custom Scroll bar-->
    <link href="/public/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="/public/plugins/side-menu/closed/sidemenu.css">

    <!--- Dashboard-1 css-->
    <link href="/public/css/bootstrap-custom.css" rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet">
    <link href="/public/css/style-dark.css" rel="stylesheet">

    <!--- Animations css-->
    <link href="/public/css/animate.css" rel="stylesheet">

</head>
<body>

<div class="main-body" id="app">
    <global-loader></global-loader>

    <app></app>
</div>

<!-- JQuery min js -->
<script src="/public/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Bundle js -->
<script src="/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Ionicons js -->
<script src="/public/plugins/ionicons/ionicons.js"></script>

<!-- Moment js -->
<script src="/public/plugins/moment/moment.js"></script>

<!-- eva-icons js -->
<script src="/public/js/eva-icons.min.js"></script>

<!-- Rating js-->
<script src="/public/plugins/rating/jquery.rating-stars.js"></script>
<script src="/public/plugins/rating/jquery.barrating.js"></script>

<!-- Custom js -->
<script src="/public/js/custom.js"></script>

</body>
</html>
