<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    @if(Auth::guest())
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
                        
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="/">
                                SISCO</a></span>
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

    @else()
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        {{ config('app.name', 'SISCO') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/artikels">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/laporans/create">Laporan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ambulan/create">Ambulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/relawan">Relawan</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <!--<li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>-->
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../admin">Admin</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @include('inc.messages')
                @yield('content')
            </main>
        </div>
    @endif
</body>
</html>
