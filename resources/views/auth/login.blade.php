<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área de login</title>

    <!-- CSS -->

    <link rel="stylesheet" href="{{ url('assets/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('assets/') }}/css/login/form-elements.css">
    <link rel="stylesheet" href="{{ url('assets/') }}/css/login/style.css">


</head>

<body style="background: url({{url('assets/img')}}/back_login.jpg   );">

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            @include('errors.list')
                            <h3>Login</h3>

                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="{{url('/login')}}" method="post" class="login-form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Usuario</label>
                                <input type="text" name="email" placeholder="Usuario" class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Senha</label>
                                <input type="password" name="password" placeholder="Senha" class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Javascript -->
<script src="{{ url('assets/') }}/js/jquery.js"></script>
<script src="{{ url('assets/') }}/js/bootstrap.min.js"></script>



</body>

</html>