@extends('layouts.appUser')

<section class="header1 cid-seOjuaaiu2 mbr-parallax-background" id="header1-2g">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    Hubungi Ambulance</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Hubungi ambulance terdekat dari lokasi anda</h3>

            </div>
        </div>
    </div>

</section>

<section class="image1 cid-seOdG1e7F1" id="image1-1x">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                <div class="image-wrapper">
                    <img src="assets/images/4.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-5">
                    CALL AMBULANCE</p>
                </div>
            </div>
            <div class="col-12 col-lg">
                @if (empty($ambulan))
                {{-- kalo ambulance empty --}}
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong style="color: red">Ambulance Tidak Ditemukan</strong></h3>
                </div>
                @else
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Ambulance Ditemukan</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7"></p>
                    <p>
                        Nama Posko : {{$posko->nama_posko}}
                    </p>
                    <p>
                        Alamat : {{$posko->alamat_kesehatan}}
                    </p>
                    <p>
                        No. Telepon : {{$posko->no_telp_kesehatan}}
                    </p>
                    <p>
                        Id Ambulance : {{$ambulan->id_ambulan}}
                    </p>
                    <p>
                        Nomor Polisi : {{$ambulan->NoPol}}
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@extends('layouts.appFooter')