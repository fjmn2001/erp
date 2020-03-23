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
    <link rel="icon" href="../assets/img/brand/favicon.ico" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="../assets/css/icons.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!--  Custom Scroll bar-->
    <link href="../assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="../assets/plugins/side-menu/closed/sidemenu.css">

    <!--- Dashboard-1 css-->
    <link href="../assets/css/bootstrap-custom.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-dark.css" rel="stylesheet">

    <!--- Animations css-->
    <link href="../assets/css/animate.css" rel="stylesheet">

</head>
<body class="main-body" id="app">

<global-loader></global-loader>

<app></app>

<!-- main-signin-wrapper -->

<!-- /main-signin-wrapper -->

<!-- JQuery min js -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Bundle js -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Ionicons js -->
<script src="../assets/plugins/ionicons/ionicons.js"></script>

<!-- Moment js -->
<script src="../assets/plugins/moment/moment.js"></script>

<!-- eva-icons js -->
<script src="../assets/js/eva-icons.min.js"></script>

<!-- Rating js-->
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="../assets/plugins/rating/jquery.barrating.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js"></script>

</body>
</html>
