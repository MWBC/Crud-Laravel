@extends('contact.master')

@section('content')

<form action="{{url('/store')}}" method="post">
    {{csrf_field()}}

    <p class="h3 my-5" align="center" style="color: #17a2b8">Formulário de Cadastro</p>
    <div class="container w-25 my-4 table-bordered">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" placeholder="Digite o seu nome" name="name" required>
        </div>

        <div class="form-group">
            <label for="telephone">Telefone:</label>
            <input type="tel" class="form-control" placeholder="Digite o seu telefone" name="telephone" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Digite o seu email" name="email">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary w-50 offset-md-3">Enviar</button>
        </div>
    </div>
</form>

@endsection
<!--<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Contato</title>
    <style>
        html{
            background-color: #F4F4F4;
            font-family: 'Nunito', sans-serif;
            font-size: 12px;
        }
        body{
            width: 700px;
            border: 1px solid #ddd;
            margin: 10px auto;
            background-color: #FFF;
            padding:10px 30px;
            border-radius:5px;
        }
        h2{
            font-family: 'Nunito', sans-serif;
            font-size: 40px;
            color: chocolate;
            text-align: center;
        }
        input{
            margin: 20px;
            display: block;
            border: 1px solid #999;
            padding: 8px;
            border-radius: 3px;
            text-align: center;

        }
        input:focus{
            border: 1px solid #ccc;
            outline: none;
        }
        input[type=submit]{

            width:150px;
            color:#FFF;
            background:linear-gradient(top, #F33, #933 );
            background:-webkit-linear-gradient(top, #F33, #933 );
            background:-moz-linear-gradient(top, #F33, #933 );
            border:1px solid #333;
            cursor:pointer;
        }
        label{
            color: red;
        }
        .campos{
            margin-left: 25%;
            font-size: 17px;
        }
        #enviar{
            margin-top: 30px;
            margin-left: 70px;
        }
    </style>
</head>
<body>
<h2>Formulário de Cadastro</h2>
<form action="<?= url('/store'); ?>" method="post">

    <?= csrf_field(); ?>

    <div class="campos">
        <label for="name">Nome:</label>
        <input type="text" name="name" size="30" maxlength="100">

        <label for="telephone">Telefone:</label>
        <input type="text" name="telephone" size="30">

        <label for="email">E-mail:</label>

        <input type="email" name="email" size="30">
        <input type="submit" value="Enviar" id="enviar" name="enviar">
    </div>
</form>
</body>
</html>-->
