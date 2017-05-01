@extends('template-site')
@section('content')
    <h3 class="heading text-center">Atividades realizadas hoje</h3>

    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Início</th>
            <th>Término</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($atividades as $atividade)

            @if(\Carbon\Carbon::today()->dayOfYear == \Carbon\Carbon::parse($atividade->horario_inicio)->dayOfYear )

                <tr>
                    <td>{{$atividade->nome}}</td>
                    <td>{{\Carbon\Carbon::parse($atividade->horario_inicio)->format('H:i')}}</td>
                    <td>{{\Carbon\Carbon::parse($atividade->horario_termino)->format('H:i')}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('siteAtividadesId', $atividade->codigo)}}">Detalhes</a>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endsection

@section('content2')

    <div class=" row page-content" style="margin-top: 20px">


        <div class="entry-content cf">

            <div class="col-md-12">
                <h3 class="heading text-center">Atividades futuras</h3>

                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Início</th>
                        <th>Término</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $atividades  as $atividade)

                        @if(\Carbon\Carbon::today()->dayOfYear < \Carbon\Carbon::parse($atividade->horario_inicio)->dayOfYear )

                            <tr>
                                <td>{{$atividade->nome}}</td>
                                <td>{{\Carbon\Carbon::parse($atividade->horario_inicio)->format('d/m/Y H:i')}}</td>
                                <td>{{\Carbon\Carbon::parse($atividade->horario_termino)->format('d/m/Y H:i')}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('siteAtividadesId', $atividade->codigo)}}">Detalhes</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>


        </div>


        <div class="c-1"></div>
        <div class="c-2"></div>
        <div class="c-3"></div>
        <div class="c-4"></div>
    </div>

    <div class=" row page-content" style="margin-top: 20px">


        <div class="entry-content cf">

            <div class="col-md-12">
                <h3 class="heading text-center">Atividades já realizadas</h3>

                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Início</th>
                        <th>Término</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $atividades  as $atividade)

                        @if(\Carbon\Carbon::today()->dayOfYear > \Carbon\Carbon::parse($atividade->horario_inicio)->dayOfYear )

                            <tr>
                                <td>{{$atividade->nome}}</td>
                                <td>{{\Carbon\Carbon::parse($atividade->horario_inicio)->format('d/m/Y H:i')}}</td>
                                <td>{{\Carbon\Carbon::parse($atividade->horario_termino)->format('d/m/Y H:i')}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('siteAtividadesId', $atividade->codigo)}}">Detalhes</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>


        </div>


        <div class="c-1"></div>
        <div class="c-2"></div>
        <div class="c-3"></div>
        <div class="c-4"></div>
    </div>

@endsection