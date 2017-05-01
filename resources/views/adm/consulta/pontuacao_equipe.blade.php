@extends('template-adm')

@section('content')

    @include('errors.list')
    @foreach($equipes as $equipe)
        <h2 class="heading" align="center">Equipe {{$equipe->tema}}</h2>

        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Atividade</th>
                <th>Posicao</th>
                <th>Pontuacao</th>

            </tr>
            </thead>
            <tbody>
            @foreach($equipe->pontuacoes as $pontuacao)
                <tr>
                    <td>{{$pontuacao->nome}}</td>

                    <td>
                        @if($pontuacao->posicao == -1)
                            WO
                        @else
                            {{$pontuacao->posicao}}
                        @endif
                    </td>
                    <td>{{$pontuacao->pontuacao}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach

@endsection