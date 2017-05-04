@extends('layouts.public') 

@section('content')

<div class="row">
<div class="col-md-12">

                <h2 class="heading" align="center">Pontuações cadastradas</h2>
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Atividade</th>
                        <th>Equipe</th>
                        <th>Posicao</th>
                        <th>Cadastrado por:</th>
                        @if(request()->get('points'))
                            <th>Pontos</th>
                        @endif

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
                                    {{$pontuacao->posicao}}º lugar
                                @endif
                            </td>
                            <td>{{$pontuacao->adm}}</td>
                            @if(request()->get('points'))
                                <td>{{$pontuacao->pontuacao}}</td>
                            @endif

                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>

</div>

@endsection
