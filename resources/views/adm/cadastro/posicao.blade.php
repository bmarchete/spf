@extends('template-adm')

@section('content')
    <h2 class="heading" align="center">Cadastrar Posições</h2>

    @include('errors.list')


    <form class="form-horizontal" method="post" action="{{route('posicoes.store')}}">
        {{ csrf_field() }}
        <fieldset>

            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Selecione a Atividade</label>

                <div class="col-md-4">
                    <select name="atividade_codigo" id="atividade_codigo" class="form-control">
                        @foreach($atividades as $atividade)
                            <option value="{{$atividade->codigo}}">{{ $atividade->nome }}</option>
                        @endforeach

                    </select>

                </div>
            </div>



            <div class="form-group">

            </div>


            <div class="input_fields_wrap">

                <div class="form-group ">
                    <label class="col-md-4 control-label" for="textinput">1º lugar</label>

                    <div class="col-md-3">
                        <input name="posicao[]" id="posicao" class="form-control input-md" type="text">
                    </div>

                    <div class="col-md-2">
                        <button class="btn btn-default add_field_button ">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            var max_fields = 6;
            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var add_button = $(".add_field_button"); //Add button ID

            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append(
                            '<div class="form-group ">' +
                                '<label class="col-md-4 control-label" for="textinput">'+ x + 'º lugar</label>' +
                                '<div class="col-md-3">' +
                                    '<input name="posicao[]" id="posicao" class="form-control input-md" type="text">' +
                                '</div>' +
                            '</div>'
                    );
                }
            });

//            $(wrapper).on("click",".remove_field", function(e){
//                e.preventDefault();
//                $(this).parent('div').remove(); x--;
//            })
        });
    </script>

@endsection