@extends('template-adm')

@section('content')
    <h2 class="heading" align="center">Cadastre a Atividade</h2>

    @include('errors.list')


    {{--{!! Form::open()  !!}--}}
    <form class="form-horizontal" id="cad_atividade" name="cad_atividade" method="post"
          action="{{ route('atividades.store') }}">
        {{ csrf_field() }}
        <fieldset>


            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Nome da Atividade</label>

                <div class="col-md-4">
                    <input name="nome" id="nome" class="form-control input-md" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Dia/Horario Inicio</label>

                <div class="col-md-4">
                    <input id="horario_inicio" name="horario_inicio" class="form-control input-md" type="datetime">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Dia/Horario Termino</label>

                <div class="col-md-4">
                    <input id="horario_termino" name="horario_termino" class="form-control input-md" type="datetime">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Local da Atividade</label>

                <div class="col-md-4">
                    <input name="local" id="local" class="form-control input-md" type="text">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Valor do WO</label>

                <div class="col-md-4">
                    <input name="wo" id="wo" class="form-control input-md" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Descrição da Atividade</label>

                <div class="col-md-4">
                    <textarea class="form-control" name="descricao" id="descricao" type='text'></textarea>
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
{{--{!! Form::close()  !!}--}}

@endsection

@section('css')

    <link href="{{ url("/assets/js") }}/DatePicker/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>

@endsection

@section('scripts')

    <script src="{{ url("/assets/js") }}/DatePicker/build/jquery.datetimepicker.full.min.js"></script>

    <script>
        $.datetimepicker.setLocale('pt');
        $('#horario_inicio').datetimepicker({
            format: 'Y-m-d H:i',
            step: 30
        });

        $('#horario_termino').datetimepicker({
            format: 'Y-m-d H:i',
            step: 30
        });
    </script>

@endsection