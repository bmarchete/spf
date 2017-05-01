@extends('template-adm')

@section('content')

    <h2 class="heading" align="center">Cadastre as Classificações para esta atividade </h2>

    @include('errors.list')

    <form class="form-horizontal" id="cad_atividadeequipe" name="cad_atividadeequipe"
          method="post" action="{{route('classificacoes.store')}}">
        {!! csrf_field() !!}
        <fieldset>


            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Equipe</label>

                <div class="col-md-4">
                    <select name="equipe_codigo" id="equipe_codigo" class="form-control">
                        @foreach($equipes as $equipe)
                            <option value="{{$equipe->codigo}}">{{ $equipe->tema }}</option>
                        @endforeach

                    </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Atividade</label>

                <div class="col-md-4">

                    <select name="posicoes_atividade_codigo" id="posicoes_posicao" class="form-control">
                        @foreach($atividades as $atividade)
                            <option value="{{$atividade->codigo}}">{{ $atividade->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Posição</label>

                <div class="col-md-4">

                    <select name="posicoes_posicao" id="posicoes_posicao" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="-1">WO</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>

                <div class="col-md-4">
                    <button type="submit" id="enviar" value="enviar" class="btn btn-info">
                        Cadastrar
                    </button>

                </div>

            </div>


        </fieldset>
    </form>
@endsection