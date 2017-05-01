@extends('template-site')

@section('content')

    @include('errors.list')

        <h2 class="heading" align="center">Equipe {{$equipe->tema}}</h2>

        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Atividade</th>
                <th>Posicao</th>
                @if(request()->get('points'))
                    <th>Pontos</th>
                @endif

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
                            {{$pontuacao->posicao}}º lugar
                        @endif
                    </td>
                    @if(request()->get('points'))
                        <td>{{$pontuacao->pontuacao}}</td>
                    @endif


                </tr>
            @endforeach
            </tbody>
        </table>


@endsection