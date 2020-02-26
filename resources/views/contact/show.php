<h1>Página Single</h1>

<?php

if(!empty($contato)){

    foreach ($contato as $cont){
        ?>

        <h2>Nome: <?=  $cont->name?></h2>
        <h2>Telefone: <?= $cont->telephone ?></h2>
        <h2>email: <?= $cont->email ?></h2>
        <?php
    }
}
