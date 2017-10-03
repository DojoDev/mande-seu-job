@extends('layouts.app')

@section('content')
<div class="container form-group">
  <h3>Create Album</h3>
  {!!Form::open(['action' => 'AlbumsController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    {{Form::text('name','',['placeholder' => 'Album Name','class'=>'form-control'])}}
    {{Form::textarea('description','',['placeholder' => 'Album Description', 'class'=>'form-control'])}}
    {{Form::file('cover_image')}}
    {{Form::submit('submit')}}
  {!! Form::close() !!}
  </div>
@endsection
