@extends('template-adm')

@section('content')

    <h2 class="heading" align="center">Atividades cadastradas</h2>

    @include('errors.list')

    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Início</th>
            <th>Término</th>
            <td>

            </td>
        </tr>
        </thead>
        <tbody>
        @foreach($atividades as $atividade)
            <tr>
                <td>{{$atividade->nome}}</td>
                <td>{{\Carbon\Carbon::parse($atividade->horario_inicio)->format('d/m/Y H:i')}}</td>
                <td>{{\Carbon\Carbon::parse($atividade->horario_termino)->format('d/m/Y H:i')}}</td>
                <td>
                    <form method="post" action="{{route('atividades.destroy', $atividade->codigo)}}">
                       {{method_field('delete')}}
                        {{csrf_field()}}
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton"></label>

                                <div class="col-md-4">
                                    <button type="submit" id="enviar" value="enviar" class="btn btn-danger">Excluir
                                    </button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection