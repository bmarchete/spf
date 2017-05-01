@extends('template-site')

@section('content')

    <div class="row">

        <div class='col-md-12'>
            <h3 class="heading" align="center">Atividade - {{$atividade->nome}}</h3>

            <p>Descrição: {{$atividade->descricao}}</p>
            <p>Horário de Início: {{\Carbon\Carbon::parse($atividade->horario_inicio)->format('d/m/Y H:i')}}</p>
            <p>Horário de fim: {{\Carbon\Carbon::parse($atividade->horario_fim)->format('d/m/Y H:i')}}</p>
            <p>Local de realização: {{$atividade->local}}</p>
        </div>
    </div>





@endsection
