@extends('layouts.app')

@section('content')
<div class="container">

<div class="panel panel-default" style="text-align:center;">
    <div class="panel-heading">Sistema para Solicitação e Acompanhamento de Jobs
</div>

        <div class="panel-body">
            <div class="col-md-5 alert alert-success">
            <h3>PERFIL</h3>
            <b>Editar Perfil e Senha</b>
            <hr>
            <a href="{{url('/home')}}" class="btn btn-success btn-block">Visualizar Arquivos</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 alert alert-success">
            <h3>FAQ</h3>
            <b>Perguntas frequentes</b>
            <hr>
            <a href="{{url('/faqs')}}" class="btn btn-success btn-block">VER PERGUNTAS</a>
            </div>

            <div class="col-md-5 alert alert-success">
            <h3>MANDE SEU JOB</h3>
            <b>Envie Seu Job</b>
            <hr>
            <a href="{{url('/new_ticket')}}" class="btn btn-success btn-block">Mande Seu Job Agora</a>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-5 alert alert-success">
            <h3>MEUS ARQUIVOS</h3>
            <b>Arquivos de Post e Artes</b>
            <hr>
            <a href="{{url('/albums')}}" class="btn btn-success btn-block">Visualizar Arquivos</a>
            </div>

        </div>
    </div>
</div>
@endsection
