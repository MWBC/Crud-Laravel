<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>

    <style>

        header{

            font-size: 40px;
            text-align: center;
            height: 90px;
            background-color: lightslategrey;
        }
    </style>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-theme.min.css">-->
</head>
<body>
    <!--<div class="container">-->

        <nav class="navbar navbar-expand-md navbar-dark bg-primary">

            <div class="container">

                <a href="{{url('/contatos')}}" class="navbar-brand h5">CRUD</a>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item"><a href="{{url('/cadastrar')}}" class="nav-link">Cadastrar Contato</a></li>
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Listagem de Contatos</a></li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <script src="{{asset('js/app.js')}}"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->

    <!--</div>-->
</body>
</html>
