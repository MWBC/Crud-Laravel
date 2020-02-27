<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
    <title>Contatos</title>
    <link href="./public/assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

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
    </style>
</head>

<body>

<header>Futura Listagem de Contatos</header>

<div class="container">
<p id="linkCadastro"><a href="<?= url('/cadastrar') ?>"> Cadastrar Novo Contato</a></p>

@if(!empty($contacts))

    <div class='tabela'><table>

        <tr id='labels'>
            <td>Nome:</td>
            <td>Telefone:</td>
            <td>Email:</td>
            <td>Ações</td>
        </tr>

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

    </table></div>
@else

    <h2>Nenhum contato cadastrado!</h2>

@endif


</body>
</html>
