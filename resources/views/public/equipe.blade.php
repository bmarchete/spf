@extends('layouts.public')

@section('content')

    <h3 class="heading" align="center">{{ucfirst($equipe->tema)}}</h3>

    <div class="row">
       
            <div class="col-md-12">
                <div class="thumbnail">
                    <img src="{{url('assets')}}/img/equipes_2016/{{$equipe->foto}}" alt="{{ $equipe->tema }}">

                 
                </div>



            </div>
       
    </div>

      <div class="row">
       
            <div class="col-md-12">

            
    <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Colocação</th>
                        <th>Atividade</th>
                        <th>Cadastrado por:</th>
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
@endsection
