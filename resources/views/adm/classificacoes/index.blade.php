@extends('layouts.app') @section('content')

<h2 class="heading" align="center">Cadastre as Classificações para esta atividade </h2>




<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Cadastre a Classificação</div>
        <div class="panel-body">


            <div class="alert alert-danger" style="display:none;">
                <span id="errorMessage"></span>
            </div>

            <div class="alert alert-success" style="display:none;">
                <span id="okMessage"></span>
            </div>


            <!--<form class="form-horizontal" id="cad_atividadeequipe" name="cad_atividadeequipe" method="post" action="{{route('adm-classificacao-store')}}">-->
            <!-- {!! csrf_field() !!} -->
            <!--<fieldset>-->
            <div class="form-horizontal">

                <div class="form-group">
                    <label class="col-md-4 control-label" for="equipe">Equipe</label>

                    <div class="col-md-4">
                        <select name="equipe_codigo" id="equipe" class="form-control">
                                 @foreach($equipes as $equipe)
                                <option value="{{$equipe->codigo}}">{{ $equipe->tema }}</option>
                                @endforeach

                            </select>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="atividade">Atividade</label>

                    <div class="col-md-4">

                        <select name="posicoes_atividade_codigo" id="atividade" class="form-control">
                                @foreach($atividades as $atividade)
                                    <option value="{{$atividade->codigo}}">{{ $atividade->nome }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="posicao">Posição</label>

                    <div class="col-md-4">

                        <select name="posicoes_posicao" id="posicao" class="form-control">
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
                        <button type="submit" id="enviar" value="enviar" class="btn btn-primary">
                                Cadastrar
                            </button>

                    </div>

                </div>

            </div>



            <!--</fieldset> </form>-->

        </div>
    </div>
</div>


@endsection @section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    document.getElementById('enviar').addEventListener('click', () => {

        var posicao = document.getElementById('posicao').value;
        var equipe = document.getElementById('equipe').value;
        var atividade = document.getElementById('atividade').value;


        axios.post('/administrator/classificacoes/ajax', {
                equipe_codigo: equipe,
                posicoes_atividade_codigo: atividade,
                posicoes_posicao: posicao
            })
            .then(function (response) {
                console.log(response.data);
                $('#okMessage').text(response.data);
                $('div.alert-success').show();
                $('div.alert').not('.alert-important').delay(2000).slideUp(300);


            })
            .catch(function (error) {
                console.log(error.response.data);
                $('#errorMessage').text(error.response.data);
                $('div.alert-danger').show();
                $('div.alert').not('.alert-important').delay(2000).slideUp(300);
            });

    });
</script>
@endsection