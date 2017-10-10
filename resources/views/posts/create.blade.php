@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading" style="text-align:center;">Perguntas Frequentes</div>
        <div class="panel-body">
          <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-body">
                <h4>
                {{$post->title}}
                </h4>
                <p>{{$post->description}}</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
