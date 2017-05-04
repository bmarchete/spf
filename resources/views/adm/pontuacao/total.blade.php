@extends('layouts.app')


@section('content')

@section('content') 
 
 @if(!request('points'))

 @include('adm.pontuacao.finalizado')

@else

    <h2 class="heading" align="center">Pontuação final</h2>
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-body">
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
                <td><a class="btn btn-info" href="">Detalhes</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>

        </div>
    </div>
</div>

  
@endif

@endsection