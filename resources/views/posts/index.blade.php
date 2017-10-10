@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading" style="text-align:center;">Perguntas Frequentes</div>
        <div class="panel-body">
          <div class="panel-group" id="accordion">
           @foreach($posts as $post)
            @can('view_post', $post)
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-body">
                <h4>
                {{$post->title}}
                </h4>
                <p>{{$post->description}}</p>
                <b>Author:</b>{{$post->user->name}}
                <a href='{{url("posts/$post->id/post-update")}}'>Editar</a>
                @endcan 
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
