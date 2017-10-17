@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{$album->name}}</h1>
  <a class="btn btn-warning btn-large" href="/albums"><i class="fa fa-sign-out" aria-hidden="true"></i> Voltar</a>
  @can('edit_post')
  <a class="btn btn-success btn-large" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
  @endcan
  <hr>
  @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    
    <div id="photos" style="text-align:center;" class="container">
      <div class="row">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
            <div class='col-md-4'>
             <a href="/photos/{{$photo->id}}">
                <img class="img-responsive" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
              </a>
             <br>
             <h4>{{$photo->title}}</h4>
          @else
          <div class="row">
            <div class='col-md-4'>
              <a href="/photos/{{$photo->id}}">
                 <img class="img-responsive" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
               </a>
              <br>
              <h4>{{$photo->title}}</h4>
          @endif
        	@if($i % 3 == 0)
          </div></div><div class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <b>NENHUMA ARTE PARA SEU ALBÚM</b>
  @endif
  </div>

@endsection
