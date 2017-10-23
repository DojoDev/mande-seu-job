@extends('layouts.app')

@section('content')
<div class="container">
<h3>{{$ticket->title}}</h3>
  <p>{{$ticket->description}}</p>
  <a class="btn btn-info btn-large" href="/albums"><i class="fa fa-sign-out" aria-hidden="true"></i> Voltar Para Galeria</a>
  <hr>
<div class="col-md-2"></div>
<div class="col-md-8">
<img class="img-responsive" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <br><br>
  @can('edit_post')
  {!!Form::open(['action' => ['TicketsController@destroy', $ticket->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete Photo', ['class' => 'button alert'])}}
  {!!Form::close()!!}
  @endcan 
  <a class="btn btn-warning btn-block" href="/storage/tickets/{{$ticket->user_id}}/{{$ticket->document}}" download="{{$photo->photo}}">Download <i class="fa fa-download" aria-hidden="true"></i></a>
  <hr>
  <small>Size: {{$ticket->size}}</small>
  </div>
</div>
<div class="col-md-2"></div>
@endsection
