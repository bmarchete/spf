@extends('layouts.app') @section('content')

<h2 class="heading" align="center">Bem vindo {{Auth::user()->name}}</h2>

@include('adm.flash')



<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Cadastrar</div>
        <div class="panel-body">
            <a href="{{route('adm-classificacao-create')}}" class="btn btn-primary btn-block active">Classificação</a>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Consultar Classificação por</div>
        <div class="panel-body">
            <a href="{{route('adm-atividades')}}" class="btn btn-primary btn-block active">Atividades</a>
            <a href="{{route('adm-equipes')}}" class="btn btn-primary btn-block active">Equipes</a>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Consultar Pontuações</div>
        <div class="panel-body">
            <a href="{{route('adm-pontuacao-index')}}" class="btn btn-primary btn-block active">Geral</a>
            <a href="{{route('adm-pontuacao-total')}}" class="btn btn-primary btn-block active">Total</a>
        </div>
    </div>
</div>




@endsection