<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Administração Semana Paulo Freire</title>

    <link href="{{ url("/assets/css") }}/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url("/assets/css") }}/style.css">
    @yield('css')

</head>
<body>



<header>

    <div class="wrapper cf">
        <div id="logo">
            <a href="{{ route('index.adm') }}">
                <img src="{{ url("/assets/img") }}/spfcom.gif" class="img-responsive" width='230' height='90' alt=""/>
            </a>

        </div>
    </div>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Cadastrar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('equipes.create') }}">Equipes</a></li>
                            <li><a href="{{ url(route('salas.create')) }}">Salas</a></li>
                            <li><a href="{{ url(route('atividades.create')) }}">Atividades</a></li>
                            <li><a href="{{ url(route('posicoes.create')) }}">Posição de Atividade</a></li>
                            <li><a href="{{ url(route('classificacoes.create')) }}">Classificação de Atividade</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Consultas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('equipes.show')}}">Equipes</a></li>
                            <li><a href="{{route('atividades.show')}}">Cronograma</a></li>
                            <li><a href="{{route('pontuacoes.show')}}">Cronograma Futuro</a></li>
                            <li><a href="#">Colocação Geral</a></li>
                        </ul>
                    </li>

                </ul>

                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Encerramento <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('adm.encerra')}}">Encerrar SPF</a></li>
                            <li><a href="{{route('adm.restaura')}}">Restaurar SPF</a></li>

                        </ul>
                    </li>
                    <li><a href="{{ url('/logout') }}">Sair</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


</header>

<div class="container">


    <div class=" row page-content">


        <div class="entry-content cf">

            <div class="col-md-12">

                @include('flash::message')

                @yield('content')

            </div>


        </div>


        <div class="c-1"></div>
        <div class="c-2"></div>
        <div class="c-3"></div>
        <div class="c-4"></div>
    </div>


</div>

<div style="margin-top: 80px;"></div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <p class="text-muted text-center" >Sistema desenvolvido por alunos de tcc do curso Integrado de Informática para Internet. Adaptado e mantido pelo Professor Binho</p>

            </div>
        </div>
    </div>
</footer>

<script src="{{ url("/assets/js") }}/jquery.js"></script>
<script src="{{ url("/assets/js") }}/bootstrap.min.js"></script>

<script>
    $('div.alert').not('.alert-important').delay(2000).slideUp(300);
</script>

@yield('scripts')
</body>
</html>