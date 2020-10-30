<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="assets/images/sisco-128x128-1.png" type="image/x-icon">

    <title>{{config('SISCO')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/facebook-plugin/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/animatecss/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
    <link rel="preload" as="style" href="{{asset('assets/mobirise/css/mbr-additional.css')}}"><link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">

</head>
<body>
    <section class="menu cid-seOs3rgjMf" once="menu" id="menu2-2n">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    @if (Auth::Guest())
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-white display-5" href="/admin">SISCO</a></span>
                    @else
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-white display-5" href="/admin">SISCOAdmin</a></span>
                    @endif
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="/ambulans">Hubungi Ambulance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="/artikels">Artikel Kesehatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="/posko">Data Posko</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white text-primary display-4" href="daftar.html">Pendaftaran Relawan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
