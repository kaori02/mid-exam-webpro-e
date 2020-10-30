@extends('layouts.appUser')

<section class="header1 cid-seOs3rwYpK mbr-parallax-background" id="header1-2o">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    Artikel Kesehatan</h1>
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
        @if(count($artikels) > 0)
            @foreach ($artikels as $artikel)
                {{-- isi content --}}
                <div class="row align-items-center">
                    <div class="mx-auto d-block">
                        <img src="/storage/cover_images/{{$artikel->cover_image}}" alt="" width="800" height="600"></div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                            <strong><a href="/artikels/{{$artikel->id_artikel}}">{{$artikel->title_artikel}}</a></strong></h5>
                            <small>Ditulis pada {{$artikel->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$artikels->links()}}
        @else
            <div class="row align-items-center">
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <p class="mbr-text mbr-fonts-style display-7">COMING SOON...</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            @if(!Auth::guest())
                <h3><a class="btn btn-primary" href="/artikels/create">Tulis Artikel baru!</a></h3>
            @endif
        </div>
    </div>
</section>

@extends('layouts.appFooter')