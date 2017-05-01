@extends('template-site')

@section('content')

    <h2 class="heading" align="center">Pontuação final</h2>

    @include('errors.list')

    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Equipe</th>
            <th>Pontuacao</th>
            <th>Detalhes</th>

        </tr>
        </thead>
        <tbody>
        @foreach($total as $pontuacao)
            <tr>
                <td>{{$pontuacao->tema}}</td>
                <td>{{$pontuacao->pontuacao}}</td>
                <td><a class="btn btn-info" href="{{route('site.pontuacoes.equipes.id', $pontuacao->equipe_codigo)}}">Detalhes</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>


@endsection