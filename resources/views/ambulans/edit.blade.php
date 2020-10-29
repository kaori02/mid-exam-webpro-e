@extends('layouts.app')

@section('content')
    <h1>Edit Ambulans</h1>

    {!! Form::open(['action' => ['AmbulanController@update', $ambulan->id_ambulan], 'method' =>'POST']) !!}
        <div class="form-group">
            {{Form::label('id_posko', 'Id Posko')}}
            {{Form::text('id_posko', $ambulan->id_posko, ['class' => 'form-control', 'placeholder' => 'Id Posko'])}}
        </div>
        <div class="form-group">
            {{Form::label('NoPol', 'Nomor Polisi')}}
            {{Form::text('NoPol', $ambulan->NoPol, ['class' => 'form-control', 'placeholder' => 'Nomor Polisi'])}}
        </div>
 
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}   
        
    {!! Form::close() !!}
    
@endsection