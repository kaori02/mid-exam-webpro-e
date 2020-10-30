
  <title>SISCO | Ambulans</title>
  @extends('layouts.appAdmin')
  @section('content')
      <h1>Input Ambulan</h1>
      {!! Form::open(['action' => 'AmbulanController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-group">
              {{Form::label('id_posko', 'Nama Posko')}}
              {{Form::select('id_posko',$poskos)}}
          </div>
          <div class="form-group">
              {{Form::label('NoPol', 'Nomor Polisi')}}
              {{Form::textarea('NoPol', '', ['class' => 'form-control', 'placeholder' => 'Nomor Polisi'])}}
          </div>
          {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
      {!! Form::close() !!}
  @endsection
  