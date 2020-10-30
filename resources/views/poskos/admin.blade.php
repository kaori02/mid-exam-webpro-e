
<title>SISCO | Admin Page</title>
@extends('layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="media-container-row pt-5 pb-5">
            <h3>Posko Kita</h3>
            <a href="/poskos/create" class="btn btn-primary btn-block" style="float-right">Tambah Posko</a>
        </div>

        @if(count($poskos) > 0)
        <table class="table table-striped">
            <tr>
                <th>Nama Posko</th>
                <th>UBAH</th>
                <th>HAPUS</th>
            </tr>
            @foreach ($poskos as $posko)
                <tr>
                    <th>{{$posko->nama_posko}}</th>
                    <th><a href="/poskos/{{$posko->id_posko}}/edit" class="btn btn-primary display-4">Ubah</a></th>
                    <th>
                        {!!Form::open(['action' => ['PoskoKesehatanController@destroy', $posko->id_posko], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
            <th>Tidak ada posko</th>
    </table>
    @endif

    </div>
</div>
@endsection
