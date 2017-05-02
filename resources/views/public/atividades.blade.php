@extends('layouts.public')

@section('content')


@foreach($atividades as $atividade)

<div class="row">
    <div class="col-md-12">
        <h2 style='font-family: roboto;' align="center" class="heading">{{$atividade->nome}}</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Colocação</th>
                    <th>Equipe</th>
                    <th>Cadastrado por:</th>
                </tr>
            </thead>

            <tbody>

                @foreach($atividade->classificacaos as $item)
                <tr>
                    <td>
                        {{ $item->posicoes_posicao != -1 ? $item->posicoes_posicao . 'º': 'WO'}}
                    </td>

                    <td>{{$item->equipe->tema}}</td>
                    <td>{{$item->users->name}}</td>
                </tr>
                @endforeach




            </tbody>
        </table>

        
    </div>
</div>
@endforeach

@endsection
