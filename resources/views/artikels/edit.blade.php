@extends('layouts.app')
@include('inc.messages')

@section('content')
    <h1>Edit Artikel</h1>

    {!! Form::open(['action' => ['ArtikelController@update', $artikel->id_artikel], 'method' =>'POST']) !!}
        <div class="form-group">
            {{Form::label('title_artikel', 'Judul')}}
            {{Form::text('title_artikel', $artikel->title_artikel, ['class' => 'form-control', 'placeholder' => 'Judul'])}}
        </div>
        <div class="form-group">
           {{Form::label('body_artikel','Isi Artikel')}}
           {{ Form::textarea('body_artikel',$artikel->body_artikel,['class' => 'form-control', 'placeholder' => 'Isi Artikel'])}}
        </div>
 
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}   
        
    {!! Form::close() !!}
    
@endsection