@extends('layouts.app')
@extends('layouts.popup')

@section('content')
    <h1>Buat Artikel</h1>

    {!! Form::open(['action' => 'ArtikelController@store', 'method' =>'POST']) !!}
        <div class="form-group">
            {{Form::label('title_artikel', 'Judul')}}
            {{Form::text('title_artikel', '', ['class' => 'form-control', 'placeholder' => 'Judul'])}}
        </div>
        <div class="form-group">
           {{Form::label('body_artikel','Isi Artikel')}}
           {{ Form::textarea('body_artikel','',['class' => 'form-control', 'placeholder' => 'Isi Artikel'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('is_published','Dipublish')}}
            {{Form::checkbox('is_published',true)}}
         </div> --}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}   
        {{-- {{Form::checkbox($name, $value, $checked, [$options])}} --}}
        
    {!! Form::close() !!}
    
@endsection