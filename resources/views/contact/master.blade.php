<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-theme.min.css">-->
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <a href="{{url('/contatos')}}" class="navbar-brand h5">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavDropdown">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a href="{{url('/cadastrar')}}" class="nav-link">Cadastrar Contato</a></li>
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Listagem de Contatos</a></li>
            </ul>
        </div>

    </nav>

    <script src="{{asset('js/app.js')}}"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->

    @yield('content')
</body>
</html>
