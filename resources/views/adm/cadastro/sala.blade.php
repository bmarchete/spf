@extends('template-adm')

@section('content')

    <h2 class="heading" align="center">Cadastre as Salas na Equipe</h2>

    @include('errors.list')

    <form class="form-horizontal" id="cad_salas" name="cad_salas" method="post" action="{{route('salas.store')}}">
        {{csrf_field()}}
        <fieldset>

            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Nome da sala</label>

                <div class="col-md-4">
                    <input name="nome_sala" id="nome_sala" class="form-control input-md" type="text">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Selecione a Equipe</label>

                <div class="col-md-4">
                    <select id="equipe_codigo" name="equipe_codigo" class="form-control">
                        @foreach($equipes as $equipe)
                            <option value="{{$equipe->codigo}}">{{ $equipe->tema }}</option>
                        @endforeach
                    </select>

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>

                <div class="col-md-4">
                    <button type="submit" id="enviar" value="enviar" class="btn btn-info">Cadastrar
                    </button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection