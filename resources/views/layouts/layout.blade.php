<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ URL::asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('/css/aos.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

</body>