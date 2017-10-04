@extends('layouts.app')

@section('content')
<div class="container">
<h3>Create FAQS</h3>
    {!!Form::open(['action' => 'FaqsController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        {{Form::text('title','',['placeholder' => 'FAQ Title','class'=>'form-control'])}}
        <br>
        {{Form::textarea('description','',['placeholder' => 'FAQ Description','class'=>'form-control'])}}
        <br>
        {{Form::submit('Cadastrar Nova Pergunta',['class'=>'btn btn-success btn-large'])}}
        <br>
    {!! Form::close() !!}
</div>
@endsection