<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name'), 'Ichiro LaravelApp'}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            <h1>Buat Artikel</h1>
            {!! Form::open(['action' => 'AmbulanController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title_artikel', 'Judul')}}
                    {{Form::text('title_artikel', '', ['class' => 'form-control', 'placeholder' => 'Judul'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body_artikel', 'Isi Artikel')}}
                    {{Form::textarea('body_artikel', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Isi Artikel'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </body>
</html>