@extends('layouts.app')

@section('content')
<div class="container form-group">
  <h3>Create Album</h3>
  {!!Form::open(['action' => 'AlbumsController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    {{Form::text('name','',['placeholder' => 'Album Name','class'=>'form-control'])}}
    <br>
    {{Form::textarea('description','',['placeholder' => 'Album Description', 'class'=>'form-control'])}}
    <br>
    {{Form::file('cover_image')}}
    <br>
    {{Form::submit('Cadastrar Um Novo Album',['class'=>'btn btn-success btn-large'])}}
  {!! Form::close() !!}
  </div>
@endsection
