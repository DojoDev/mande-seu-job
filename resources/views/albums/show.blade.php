@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{$album->name}}</h1>
  <a class="btn btn-info btn-large" href="/albums">Go Back</a>
  <a class="btn btn-info btn-warning" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
  <hr>
  @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    <div id="photos" class="container">
      <div class="row">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
            <div class='col-md-4'>
             <a href="/photos/{{$photo->id}}">
                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
              </a>
             <br>
             <h4>{{$photo->title}}</h4>
          @else
          <div class="row">
            <div class='col-md-4'>
              <a href="/photos/{{$photo->id}}">
                 <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
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
    <p>No Photos To Display</p>
  @endif
  </div>
@endsection
