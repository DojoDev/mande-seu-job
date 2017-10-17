@extends('layouts.app')

@section('content')
  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
  	  $i = 1;
    ?>
    <div id="albums" class="container" style="text-align:center;">
        @foreach($albums as $album)
        @can('view-album', $album)
          @if($i == $colcount)
          <div class="col-xs-5 col-md-4">
          <a class="thumbnail" href="/albums/{{$album->id}}">
          <img class="img-responsive" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
          </a>
          <h4>{{$album->name}}</h4>
          </div>
          @endcan
          @else
          <div class="col-xs-5 col-md-4">
            <a class="thumbnail" href="/albums/{{$album->id}}">
                <img class="img-responsive" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
              </a>
              <h4>{{$album->name}}</h4>
          </div>
          @endif
        	@if($i % 3 == 0)
         

        	@else
      
          @endif
        	<?php $i++; ?>
        @endforeach


  @else
    <p>No Albums To Display</p>
  @endif
  </div>
@endsection
