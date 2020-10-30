@extends('layouts.appUser')

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

        </div>
        <div class="row justify-content-center">
            <div class="mx-auto d-block">
                <img src="/storage/cover_images/{{$artikel->cover_image}}" width="800" height="600" frameborder="0"></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-seOixwsugR" id="content1-2d">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8">
                <small>Written on {{$artikel->created_at}}</small> <br><br>
                <p>{{$artikel->body_artikel}}</p>
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
@extends('layouts.appFooter');