<title>SISCO | Tempat Posko Kesehatan</title>

@extends('layouts.appUser')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
<div id="map1" onload="">
</div>

<section class="header1 cid-seOs3rwYpK mbr-parallax-background" id="header1-2o">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    posko Kesehatan</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Dapatkan informasi terkini mengenai pandemi serta tips kesehatan lainnya</h3>
            </div>
        </div>
    </div>

</section>

<section class="video4 cid-seOsQZdSTD" id="video4-2r">
    <div class="container">
        <div class="title-wrapper mb-5">
        </div>
        @include('inc.messages')
        @if(count($poskos) > 0)
            @foreach ($poskos as $posko)

            <div class="row align-items-center">
                <div class="col-md-4 col-sm-4">
                    <img src="/storage/cover_images/{{$posko->cover_image}}" width="100%" class="rounded"  style="padding-top:15px;padding-bottom:15px;">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                    <strong><a href="/poskos/{{$posko->id_posko}}">{{$posko->nama_posko}}</a></strong></h5>
                    <small style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                        Alamat:
                        {{$posko->alamat_kesehatan}}
                    </small>
                    <small style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                        {{$posko->no_telp_kesehatan}}
                    </small>
                </div>
            </div>
            @endforeach
        @else
        <div class="row align-items-center">
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <p class="mbr-text mbr-fonts-style display-7">COMING SOON...</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@extends('layouts.appFooter')
