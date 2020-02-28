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

    <!--<link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">-->
</head>
<body>
    <header>CRUD</header>

    <!--<h1>CRUD</h1>-->

    @yield('content')

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
</body>
</html>
