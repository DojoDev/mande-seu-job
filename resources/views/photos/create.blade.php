@extends('layouts.app')

@section('content')
<div class="container">
<h3>Upload Photo</h3>
{!!Form::open(['action' => 'PhotosController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
  {{Form::text('title','',['placeholder' => 'Photo Title', 'class'=>'form-control'])}}
    <br>
    {{Form::textarea('description','',['placeholder' => 'Photo Description', 'class'=>'form-control'])}}
    <br>
    {{Form::hidden('album_id', $album_id)}}
    <br>
    {{Form::file('photo')}}
    <br>
  {{Form::submit('submit',['class'=>'btn btn-success btn-large'])}}
{!! Form::close() !!}
</div>
@endsection
