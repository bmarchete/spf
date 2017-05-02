@extends('layouts.app')

@section('content')

<h2 class="heading" align="center">Consulta de Classificação por Equipes </h2>

  @foreach($equipes as $equipe)
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">{{$equipe->tema}}</div>
        
        <div class="panel-body">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Colocação</td>
                        <td>Atividade</td>
                        <td>Cadastrado por:</td>
                    </tr>
                </thead>

                <tbody>

                        @foreach($equipe->classificacaos as $item)
                             <tr>
                                <td>
                                   {{ $item->posicoes_posicao != -1 ? $item->posicoes_posicao . 'º': 'WO'}}
                                </td>

                                <td>{{$item->atividade->nome}}</td>
                                <td>{{$item->users->name}}</td>
                            </tr>
                        @endforeach
                       
                
                    

                </tbody>
            </table>

        </div>
    </div>
</div>
@endforeach

    
@endsection