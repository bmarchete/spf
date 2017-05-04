@extends('layouts.public') 

@section('content')
<div class="row">

    @if(request('points'))
    <div class='col-md-12'>
        <h2 style='font-family: roboto;' align="center" class="heading">Já temos um vencedor!</h2>
        <a href=""><img src="{{url('assets')}}/img/fim.jpg" class="img-responsive center-block" alt="fim" /></a>
    </div>
    @endif


</div>

<div class="row">
    <div class="col-md-12">
        <h2 style='font-family: roboto;' align="center" class="heading">Placar das equipes</h2>

        <div class="row">
         @foreach($equipes as $equipe)
            <div class="col-xs-12 col-md-4">
                <a href="{{route('equipes-id', $equipe->codigo)}}" class="thumbnail">
                <img src="{{url('assets')}}/img/{{$equipe->foto}}" class="img-responsive" alt="{{$equipe->tema}}" />
                </a>
            </div>
  @endforeach
        </div>

        

    </div>
</div>


<div class='row'>
    <div class="col-md-12">
        <h2 style='font-family: roboto;' align="center" class="heading">Palavra da coordenação do evento</h2>
    </div>
    <div class='col-md-6'>

        <img src="{{url('assets')}}/img/spf_2017.jpg" class="img-responsive" alt="" />

    </div>
    <div class='col-md-6'>
        <h2 style='font-family: roboto;'>Busca pela tolerância</h2>

       <p>
            <cite>
                "[…] uma subjetividade interminável imposta aos outros como objetividade: é a definição filosófica 
                do terror. […]" O homem revoltado, Albert Camus
            </cite>
            </p>
             <p>
            Diante desta definição, fiquei aqui pensando coisas sobre o contexto da semana Paulo Freire. Refletindo 
            como iriamos justificar a escolha do tema para a gincana que deve ter uma função pedagógica que envolva o
            cultural, o artístico, o  esportivo e não se pode esquecer a parte humanitária, desta forma ajudar na construção
            de seres humanos melhores. Como sempre entre ano e sai ano, os questionamentos aparecem e o mais forte 
            sempre é o que tem de pedagógico neste tema? E de que forma ele pode contribuir para que aconteça uma desconstrução 
            e uma ressignificação.
            </p>

             <a href="{{route('palavras')}}">
                <button id="singlebutton" name="singlebutton" class="btn btn-default">Ler mais</button>
            </a>

    </div>
</div>



<div class='row'>

    <div class="col-md-6">
        <h2 style='font-family: roboto;' align="center" class="heading">Regulamento</h2>

        <p align="midle">Aqui você encontra todas as regras e o regulamento da semana de gincana.</p>
        <a href="https://onedrive.live.com/?authkey=!AG8xXOYsoW0M2V0&cid=374003CAEC5F7F2A&id=374003CAEC5F7F2A!1901&parId=root&o=OneUp">
            <button id="singlebutton" name="singlebutton" class="btn btn-default">Download</button>
        </a>
    </div>

    <div class="col-md-6">
        <h2 style='font-family: roboto;' align="center" class="heading">Sobre nós</h2>

        <p align="midle">Uma breve descrição sobre nós, criadores e desenvolvedores do projeto Semana Paulo Freire Informatizada.
        </p>
        <a href="{{route('sobre')}}">
            <button id="singlebutton" name="singlebutton" class="btn btn-default">Ver Mais</button>
        </a>
    </div>

</div>

@endsection