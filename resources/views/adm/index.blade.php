@extends('template-adm')

@section('content')

    <h2 class="heading" align="center">Bem vindo, administrador</h2>


    <div class="row">
        <div class="col-md-6">
            <h4 align='center'>Cadastrar</h4>
            <a href="{{ route('equipes.create') }}" class="btn btn-default btn-block active">Equipes</a>
            <a href="{{ route('salas.create') }}" class="btn btn-default btn-block active">Salas</a>
            <a href="{{ route('atividades.create') }}" class="btn btn-default btn-block active"> Atividades</a>
            <a href="{{ route('posicoes.create') }}" class="btn btn-default btn-block active"> Posições de
                Atividades</a>
            <a href="{{ route('classificacoes.create') }}" class="btn btn-default btn-block active">Classificações
                deAtividades</a>
        </div>
        <div class="col-md-6">
            <h4 align='center'>Consultar</h4>

            <a href="{{route('equipes.show')}}" class="btn btn-default btn-block active">Equipes</a>
            <a href="{{route('atividades.show')}}" class="btn btn-default btn-block active">Cronograma</a>
            <a href="{{route('pontuacoes.show')}}" class="btn btn-default btn-block active">Pontuação</a>
            <a href="{{route('adm.fim')}}" class="btn btn-default btn-block active">Resultado Final</a>

        </div>
    </div>


    <br/>

@endsection