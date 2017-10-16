@extends('layouts.app')

@section('content')
<div class="container">
<h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a class="btn btn-info btn-large" href="/albums"><i class="fa fa-sign-out" aria-hidden="true"></i> Voltar Para Galeria</a>
  <hr>
<div class="col-md-2"></div>
<div class="col-md-8">

  <img class="img-responsive" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <br><br>
  @can('edit_post')
  {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete Photo', ['class' => 'button alert'])}}
  {!!Form::close()!!}
  @endcan 
  <a class="btn btn-warning btn-block" href="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" download="{{$photo->photo}}.jpg">Download <i class="fa fa-download" aria-hidden="true"></i></a>
  <hr>
  <small>Size: {{$photo->size}}</small>[
<h1>Olá Mundo!</h1>
  </div>
</div>
<div class="col-md-2"></div>

@endsection
