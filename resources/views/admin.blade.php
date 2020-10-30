@extends('layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        {{-- <section class="pricing-table1 cid-rDTsBhQYJ5 mbr-parallax-background" id="pricing-tables1-3">
            <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 50, 0);">
            </div>
            <div class="container">
                <div class="media-container-row">
                    <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                        <div class="plan-header text-center pt-5">
                            <h3 class="plan-title mbr-fonts-style display-5">
                                Buat Artikel</h3>
                        </div>
                        <div class="plan-body pb-5">
                            <div class="mbr-section-btn text-center pt-4">
                                <a href="/news/create" class="btn btn-primary display-4">DO IT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($artikels) > 0)
                <table class="table table-striped">
                    <tr>
                        <th>TITLE</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($artikels as $artikel)
                        <tr>
                            <th>{{$artikel->title}}</th>
                            <th><a href="/artikels/{{$artikel->id}}/edit" class="btn btn-primary display-4">EDIT</a></th>
                            <th>
                                {!!Form::open(['action' => ['ArtikelController@destroy', $artikel->id_artikel], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-primary display-4'])}}
                                {!!Form::close() !!}
                            </th>
                        </tr>
                    @endforeach
                </table>

            @else
            <table class="table table-striped">
                <tr>
                    <th>Tidak ada artikel</th>
            </table>
            @endif
        </section> --}}
    </div>
</div>
@endsection
