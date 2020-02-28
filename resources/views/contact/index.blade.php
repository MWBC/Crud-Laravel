 <!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
    <title>Contatos</title>

    <!--<style>

        div.tabela{
            margin: 30px 300px;
        }

        table{
            justify-content: center;
        }

        table tr#labels{
            color: red;
            font-size: 25px;
            text-align: left;
        }

        table tr#labels td{
            padding-right: 30px;
        }

        header{
            font-size: 40px;
            text-align: center;
            height: 90px;
            background-color: lightslategrey;
        }

        p#linkCadastro{


        }
    </style>-->

    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">

</head>

<body>

<header>CRUD</header>
<div class="container">
<p id="linkCadastro"><a href="<?= url('/cadastrar') ?>"> Cadastrar Novo Contato</a></p>

@if(!empty($contacts[0]))

    <table class="table table-striped table-hover">

        <thead id='labels'>
            <td>Nome:</td>
            <td>Telefone:</td>
            <td>Email:</td>
            <td>Ações</td>
        </thead>

    @foreach ($contacts as $contact)

        @php
        $linkRead = url('/contato/' . $contact->url);
        $linkEdit = url('/contato/editar/' . $contact->url);
        $linkRemove = url('/contato/remover/' . $contact->url);
        @endphp

        <tr>
            <td>{{{$contact->name}}}</td>
            <td>{{{$contact->telephone}}}</td>
            <td>{{{$contact->email}}}</td>
            <td><a href='{{$linkRead}}'>Ver mais</a> | <a href='{{$linkEdit}}'>Editar</a> |
                <a href='{{$linkRemove}}'>Remover</a></td>
        </tr>

    @endforeach

    </table>

@else

    <h2>Nenhum contato cadastrado!</h2>

@endif

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>

</body>
</html>
