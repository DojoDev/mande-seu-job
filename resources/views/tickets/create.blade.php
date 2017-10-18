@extends('layouts.app')

@section('content')
<div class="container">
<h3>Mande Seu Job</h3>
{!!Form::open(['action' => 'TicketsController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
  {{Form::text('title','',['placeholder' => 'Titulo do Seu Job', 'class'=>'form-control'])}}
  <br>
    <select id="categorie" type="categorie" class="form-control" name="categorie">
        <option value="">Selecione a Categoria</option>
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            @endforeach
    </select>
    <br>
    {{Form::textarea('message','',['placeholder' => 'Photo Description', 'class'=>'form-control'])}}
    <br>
    {{Form::file('document')}}
    <br>
  {{Form::submit('submit',['class'=>'btn btn-success btn-large'])}}
{!! Form::close() !!}
</div>
@endsection
