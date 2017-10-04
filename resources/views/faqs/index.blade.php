@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading" style="text-align:center;">Perguntas Frequentes</div>
        <div class="panel-body">
          <div class="panel-group" id="accordion">
           @foreach($faqs as $faq)
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse" class="panel-title expand">
                   <div class="right-arrow pull-right">+</div>
                  <a href="#">{{$faq->title}}</a>
                </h4>
               </div>
               <div id="collapse" class="panel-collapse collapse">
                <div class="panel-body">{{$faq->description}}</div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
