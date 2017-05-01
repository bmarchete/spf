@extends('template-site')

@section('content')
    <h2 class="heading text-center">Placar - Equipes</h2>
    <p class="text-justify">

        As informações apresentadas nesta página apresentam apenas as atividades inseridas até o momento.
        Acesse esta página constantemente para ver as últimas alterações no placar da SPF!
    </p>
@endsection


@section('content2')
    @foreach($equipes as $equipe)
        @include('errors.list')
        <div class=" row page-content" style="margin-top: 20px">


            <div class="entry-content cf">
                <div class="col-md-12">

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
                </div>


            </div>


            <div class="c-1"></div>
            <div class="c-2"></div>
            <div class="c-3"></div>
            <div class="c-4"></div>
        </div>
    @endforeach
@endsection
