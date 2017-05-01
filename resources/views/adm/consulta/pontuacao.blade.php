@extends('template-adm')

@section('content')

    <h2 class="heading" align="center">Pontuações cadastradas</h2>

    @include('errors.list')

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
                        {{$pontuacao->posicao}}
                    @endif
                </td>
                <td>{{$pontuacao->pontuacao}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>


@endsection