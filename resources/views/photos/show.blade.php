@extends('layouts.app')

@section('content')
<div class="container">
  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a class="btn btn-info btn-large" href="/albums/{{$photo->album_id}}">Back To Gallery</a>
  <hr>
  <img class="img-responsive" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <br><br>
  {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete Photo', ['class' => 'button alert'])}}
  {!!Form::close()!!}
  <hr>
  <small>Size: {{$photo->size}}</small>
  </div>
@endsection
