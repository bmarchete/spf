@extends('template-adm')

@section('content')

    <h2 class="heading" align="center">Equipes cadastradas</h2>

    @include('errors.list')

    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Cor</th>
            <th>Tema</th>
            <td>

            </td>
        </tr>
        </thead>
        <tbody>
        @foreach($equipes as $equipe)
            <tr>
                <td>{{$equipe->cor}}</td>
                <td>{{$equipe->tema}}</td>
                <td>
                    <form method="post" action="{{ route('equipes.destroy', $equipe->codigo) }}">
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