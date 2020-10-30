<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{asset('assets/images/sisco-128x128-1.png')}}" type="image/x-icon">
  <meta name="description" content="This is the article page of SISCO">


  <title>SISCO | Artikel Kesehatan</title>
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

  <section class="menu cid-seOeLna5wu" once="menu" id="menu2-1y">



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
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="/ambulans">Hubungi Ambulance</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="/artikels">Artikel Kesehatan</a></li><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="posko.html">Data Posko</a>
                </li><li class="nav-item"><a class="nav-link link text-white text-primary display-4" href="daftar.html">
                        Pendaftaran Relawan</a></li></ul>

        </div>
    </nav>
</section>

<section class="header1 cid-seOfb1Mmun mbr-parallax-background" id="header1-22">



    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">Artikel Kesehatan</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Dapatkan informasi terkini mengenai pandemi serta tips kesehatan lainnya</h3>


            </div>
        </div>
    </div>

</section>

<section class="video2 cid-seOiIYIjCh" id="video2-2f">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>{{$artikel->title_artikel}}</strong></h4><br>

                {{-- <h5 class="mbr-section-subtitle mbr-fonts-style mb-0 mt-2 display-7">Click on the video in this block to set the link to
                    your own video.</h5> --}}
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-10 video-block">
                <div class="video-wrapper"><img src="/storage/cover_images/{{$artikel->cover_image}}" width="1280" height="720" frameborder="0"></div>
                {{-- <p class="mbr-text pt-2 mbr-fonts-style display-4">
                    Video Description</p> --}}
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-seOixwsugR" id="content1-2d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8">
                <small>Written on {{$artikel->created_at}}</small> <br><br>
                <p>
                    {{$artikel->body_artikel}}
                </p>
            </div>
        </div>
        @if(!Auth::guest())
            <br><br><br><br>
            <a href="/artikels/{{$artikel->id_artikel}}/edit" class="btn btn-primary display-4">EDIT</a>
            {!!Form::open(['action' => ['ArtikelController@destroy', $artikel->id_artikel], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-secondary display-4'])}}
            {!!Form::close() !!}
        @endif
    </div>
</section>

<section class="cid-seOAAIADKt" id="footer2-30">





    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Address</strong>
                    <br>
                    <br>1234 Street Name
                    <br>City, AA 99999
                    <br>
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: info@site.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Links</strong>
                    <br>
                    <br><a class="text-primary" href="https://mobiri.se/">Website builder</a>
                    <br><a class="text-primary" href="https://mobiri.se/">Download for Windows</a>
                    <br><a class="text-primary" href="https://mobiri.se/">Download for Mac</a>
                    <br>
                    <br><strong>Feedback</strong>
                    <br>
                    <br>Please send us your ideas, bug reports, suggestions! Any feedback would be appreciated.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNveGQ9bfpKFwWzQLLftrR9hNiHwdqQG8&amp;q=Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2025 Mobirise - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/r" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Made with <a href="https://mobirise.site/b" style="color:#aaa;">Mobirise</a> website themes</p></section><script src="{{asset('assets/web/assets/jquery/jquery.min.js"></script>  <script src="{{asset('assets/popper/popper.min.js"></script>  <script src="{{asset('assets/bootstrap/js/bootstrap.min.js"></script>  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>  <script src="https://apis.google.com/js/plusone.js"></script>  <script src="{{asset('assets/facebook-plugin/facebook-script.js"></script>  <script src="{{asset('assets/tether/tether.min.js"></script>  <script src="{{asset('assets/smoothscroll/smooth-scroll.js"></script>  <script src="{{asset('assets/dropdown/js/nav-dropdown.js"></script>  <script src="{{asset('assets/dropdown/js/navbar-dropdown.js"></script>  <script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="{{asset('assets/viewportchecker/jquery.viewportchecker.js"></script>  <script src="{{asset('assets/parallax/jarallax.min.js"></script>  <script src="{{asset('assets/playervimeo/vimeo_player.js"></script>  <script src="{{asset('assets/theme/js/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
