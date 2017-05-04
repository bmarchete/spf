<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Sistema de Pontuação da Semana Paulo Freire</title>

    <link href="{{ url("/assets/css") }}/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url("/assets/css") }}/style.css">
    @yield('css')

</head>
<body>


<header>


    <div class="wrapper cf">
        <div id="logo">
            <a href="/">
                <img src="{{ url("/assets/img") }}/spfcom.png" class="img-responsive" width='230' height='90' alt=""/>
            </a>

        </div>
    </div>

    <nav class="navbar navbar-inverse">
        <div class='nav-bar-ribbon'>
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

                <div class="col-md-8" style="margin-left: 3%;">

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




                            <ul class="nav navbar-nav">

                                <li>
                                    <a href="/">
                                        <div class="navegacao-adm">Inicio</div>
                                    </a>

                                </li>

                             

                                <li><a href="{{route('site-atividades')}}">
                                        <div class="navegacao-adm">Placar das Atividades</div>
                                    </a>
                                </li>

                              
                                <li>
                                    <a href="{{route('sobre')}}">
                                        <div class="navegacao-adm">Sobre</div>
                                    </a>
                                </li>


                            </ul>


                </div> <!-- /.navbar-collapse -->
</div>

            </div><!-- /.container-fluid -->

        </div>
    </nav>


</header>

<div class="container" style="margin-top: 10px;">


    <div class=" row page-content">


        <div class="entry-content cf">

            <div class="col-md-12">
                <br>

                @yield('content')

            </div>


        </div>


        <div class="c-1"></div>
        <div class="c-2"></div>
        <div class="c-3"></div>
        <div class="c-4"></div>
    </div>

    @yield('content2')

</div>

<div style="margin-top: 80px;"></div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>

                <p class="text-muted" align="center">Sistema desenvolvido por alunos de tcc do curso Integrado de
                    Informática para Internet. Adaptado e mantido pelo Professor Binho</p>

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