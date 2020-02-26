<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
    <title>Contatos</title>

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
            background-color: yellow;
        }

        p#linkCadastro{


        }
    </style>
</head>

<body>

    <header>Futura Listagem de Contatos</header>

<p id="linkCadastro"><a href="<?= url('/cadastrar') ?>"> Cadastrar Novo Contato</a></p>



<?php

if(!empty($contacts)){

    echo "<div class='tabela'><table>";

    echo "<tr id='labels'>
                <td>Nome:</td>
                <td>Telefone:</td>
                <td>Email:</td>
                <td>Ações</td>
              </tr>";

    foreach ($contacts as $contato){

        $linkRead = url('/contato/' . $contato->url);
        $linkEdit = url('/contato/editar/' . $contato->url);
        $linkRemove = url('/contato/remover/' . $contato->url);

        echo "<tr>
                        <td>{$contato->name}</td>
                        <td>{$contato->telephone}</td>
                        <td>{$contato->email}</td>
                        <td><a href='{$linkRead}'>Ver mais</a> | <a href='{$linkEdit}'>Editar</a> | <a href='{$linkRemove}'>Remover</a></td>
                      </tr>";

    }

    echo "</table></div>";
}else {

    echo "<h2>Nenhum contato cadastrado!</h2>";
}
?>
</body>
</html>
