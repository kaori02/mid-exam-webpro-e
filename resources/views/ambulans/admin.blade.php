
<title>SISCO | Admin Page</title>
@extends('layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
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
        </div> --}}

            <div class="media-container-row pt-5 pb-5">
                <h3>Ambulan Kita</h3>
                <a href="/ambulans/create" class="btn btn-primary btn-block" style="float-right">Tambah Ambulan</a>
            </div>

            @if(count($ambulans) > 0)
            <table class="table table-striped">
                <tr>
                    <th>Nomor Polisi</th>
                    <th>Posko Kesehatan</th>
                    <th>UBAH</th>
                    <th>HAPUS</th>
                </tr>
                @foreach ($ambulans as $ambulan)
                    <tr>
                        <th>{{$ambulan->NoPol}}</th>
                        <th>{{$ambulan->nama_posko}}</th>
                        <th><a href="/ambulans/{{$ambulan->id_ambulan}}/edit" class="btn btn-primary display-4">Ubah</a></th>
                        <th>
                            {!!Form::open(['action' => ['AmbulanController@destroy', $ambulan->id_ambulan], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Hapus', ['class' => 'btn btn-danger display-4'])}}
                            {!!Form::close() !!}
                        </th>
                    </tr>
                @endforeach
            </table>

        @else
        <table class="table table-striped">
            <tr>
                <th>Tidak ada ambulan</th>
        </table>
        @endif

    </div>
</div>
@endsection
