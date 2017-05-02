@extends('layouts.app')

@section('content')

    <h2 class="heading" align="center">Pontuações cadastradas</h2>
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-body">
             <table class="table table-responsive">
        <thead>
        <tr>
            <th>Atividade</th>
            <th>Equipe</th>
            <th>Posicao</th>
            <th>Pontuacao</th>

        </tr>
        </thead>
        <tbody>
        @foreach($pontuacoes as $pontuacao)
            <tr>
                <td>{{$pontuacao->nome}}</td>
                <td>{{$pontuacao->tema}}</td>
                <td>
                    @if($pontuacao->posicao == -1)
                        WO
                    @else
                        {{$pontuacao->posicao}}º
                    @endif
                </td>
                <td>{{$pontuacao->pontuacao}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

        </div>
    </div>
</div>

   

@endsection