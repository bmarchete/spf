@extends('template-adm')

@section('content')

    <h2 class="heading" align="center">Cadastre a Equipe</h2>

    @include('errors.list')

    <form class="form-horizontal" id="cad_equipe" name="cad_equipe" method="post" action="{{ route('equipes.store') }}">
        {{ csrf_field() }}
            <fieldset>

                <div class=" form-group">
    <label class="col-md-4 control-label" for="textinput">Cor da Equipe</label>

    <div class="col-md-4">
        <input name="cor" id="cor" class="form-control input-md" type="text">
    </div>
    </div>


    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tema da Equipe</label>

        <div class="col-md-4">
            <input name="tema" id="tema" class="form-control input-md" type="text">

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