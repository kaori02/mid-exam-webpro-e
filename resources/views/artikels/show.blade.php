@extends('layouts.app')

@section('content')
    <a href="/artikels" class="btn btn-default">Kembali</a>
    <h1>{{$artikel->title_artikel}}</h1> 
    <small>Ditulis {{$artikel->added_on}}</small>
    <div>
        {{$artikel->body_artikel}}
    </div>
    <hr>
@endsection