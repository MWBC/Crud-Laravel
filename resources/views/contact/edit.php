<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edição de Contato</title>
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
        }
        input{
            margin: 20px;
            display: block;
            border: 1px solid #999;
            padding: 8px;
            border-radius: 3px;
        }
        input:focus{
            border: 1px solid #ccc;
            outline: none;
        }
        input[type=submit]{
            width:100px;
            color:#FFF;
            background:linear-gradient(top, #F33, #933 );
            background:-webkit-linear-gradient(top, #F33, #933 );
            background:-moz-linear-gradient(top, #F33, #933 );
            border:1px solid #333;
            cursor:pointer;
        }
    </style>
</head>
<body>
<h2>Formulário de Edição</h2>
<form action="<?= url('/contato/update', ['id'=>$contact[0]->id]); ?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $contact[0]->name; ?>" size="30" maxlength="100">
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" value="<?= $contact[0]->telephone; ?>">
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?= $contact[0]->email; ?>">
    <input type="submit" value="Enviar" id="enviar" name="enviar">
</form>
</body>
</html>
