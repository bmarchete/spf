@extends('layouts.app') @section('content')

<h2 class="heading" align="center">Bem vindo {{Auth::user()->name}}</h2>

@include('adm.flash')



<div class="col-md-4 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Cadastrar</div>
        <div class="panel-body">
            <a href="{{route('adm-classificacao-create')}}" class="btn btn-primary btn-block active">Classificação</a>
        </div>
    </div>
</div>

<div class="col-md-4 ">
    <div class="panel panel-default">
        <div class="panel-heading">Consultar Classificação por</div>
        <div class="panel-body">
            <a href="{{route('adm-atividades')}}" class="btn btn-primary btn-block active">Atividades</a>
            <a href="{{route('adm-equipes')}}" class="btn btn-primary btn-block active">Equipes</a>
            <a href="" class="btn btn-primary btn-block active">Resultado Final</a>
        </div>
    </div>
</div>




@endsection