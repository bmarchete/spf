@extends('template-site')

@section('content')

    <h3 class="heading" align="center">Equipes participantes</h3>

    <div class="row">
        @foreach($equipes as $equipe)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="{{url('assets')}}/img/equipes_2016/{{$equipe->foto}}" alt="{{ $equipe->tema }}">

                    <div class="caption">
                        <h3 class="text-center">{{ ucfirst($equipe->tema) }}</h3>

                        <p>{{ $equipe->cor }}</p>

                        <p> Salas:
                            @foreach($equipe->salas as $sala)
                                {{$sala->nome_sala}}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
