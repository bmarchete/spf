@extends('template-site')

@section('content')
    <div class="row">

        @if(request('points'))
            <div class='col-md-12'>
                <h2 style='font-family: roboto;' align="center" class="heading">Já temos um vencedor!</h2>
                <a href="{{route('site.fim')}}"><img src="{{url('assets')}}/img/fim.jpg" class="img-responsive center-block"
                                                        alt="fim"/></a>
            </div>
        @endif

        <div class='col-md-6'>
            <h2 style='font-family: roboto;' align="center" class="heading">Equipes deste ano</h2>
            <a href="{{route('siteEquipes')}}"><img src="{{url('assets')}}/img/equipes.jpg" class="img-responsive"
                                                    width="549"
                                                    height="406" alt=""/></a>
        </div>

        <div class='col-md-6'>
            <h2 style='font-family: roboto;' align="center" class="heading">Cronograma completo</h2>
            <a href="{{route('siteAtividades')}}"><img src="{{url('assets')}}/img/cronograma.jpg" class="img-responsive"
                                                       width="549"
                                                       height="406" alt=""/></a>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <h2 style='font-family: roboto;' align="center" class="heading">Placar das equipes</h2>

            <p>Confira o placar de sua equipe clicando no nome dela</p>

            <p class="text-center">
                @foreach($equipes as $equipe)
                    <a class="btn btn-info"
                       href="{{route('site.pontuacoes.equipes.id', $equipe->codigo)}}">{{$equipe->tema}}</a>
                @endforeach
            </p>

        </div>
    </div>

    <div class='row'>
        <div class="col-md-12">
            <h2 style='font-family: roboto;' align="center" class="heading">Palavra da coordenação do evento</h2>
        </div>
        <div class='col-md-6'>

            <img src="{{url('assets')}}/img/spf1.jpg" class="img-responsive" alt=""/>

        </div>
        <div class='col-md-6'>
            <h2 style='font-family: roboto;'>Busca pela tolerância</h2>

            <p><cite>

                    "Olá a todos os participantes da Semana Paulo Freire, gostaria de escrever algumas palavras sobre o
                    educador que vamos homenageá-lo durante a semana que começa, depois de ficar pensando o que
                    escrever. Cheguei a seguinte conclusão. Paulo Freire queria entre outras coisas provocar em nós o
                    diálogo e através dele fazer com que pudéssemos ler o mundo. Lembre-se Paulo Freire algumas vezes é
                    considerado um herói, mas algumas vezes é também um vilão. Resumindo Paulo Freire é um ser dialético
                    como cada um de nós. Ao mesmo tempo herói e vilão
                    Dizem que todos nascem heróis, mas se você deixar. A vida irá fazê-lo passar do limite até que se
                    torne um vilão. O problema é que você nem sempre sabe que passou do limite. Ser mal e tão insano e
                    autodestrutivo quanto ser bom. Um indivíduo pode sorrir, sorrir, e ser um vilão.
                </cite></p>

            <p><a href='{{url('coordenacao')}}'>
                    <button id="singlebutton" name="singlebutton" class="btn btn-default">Leia Mais</button>
                </a>
            </p>

        </div>
    </div>



    <div class='row'>
        <div class="col-md-4">
            <h2 style='font-family: roboto;' align="center" class="heading">Próximas Atividades</h2>

        </div>

        <div class="col-md-4">
            <h2 style='font-family: roboto;' align="center" class="heading">Regulamento</h2>

            <p align="midle">Aqui você encontra todas as regras e o regulamento da semana de gincana.</p>
            <a href="#">
                <button id="singlebutton" name="singlebutton" class="btn btn-default">Download</button>
            </a>
        </div>

        <div class="col-md-4">
            <h2 style='font-family: roboto;' align="center" class="heading">Sobre nós</h2>

            <p align="midle">Uma breve descrição sobre nós, criadores e desenvolvedores do projeto Semana Paulo Freire
                Informatizada.</p>
            <a href='{{route('siteSobre')}}'>
                <button id="singlebutton" name="singlebutton" class="btn btn-default">Ver Mais</button>
            </a>
        </div>

    </div>

@endsection